import mysql from "mysql2/promise";
import net from "net";
import type { EventEmitter } from "events";

// Node's Happy Eyeballs (autoSelectFamily) connection racing has a bug where
// a failed connection attempt can throw `TypeError: object null is not
// iterable` while building an AggregateError, outside of any promise chain
// mysql2 sets up — so it surfaces as an uncaught exception no try/catch can
// intercept. Disabling it makes connection failures (e.g. no MySQL running)
// surface as normal, catchable promise rejections instead.
net.setDefaultAutoSelectFamily(false);

let pool: mysql.Pool | undefined;

function getPool(): mysql.Pool {
  if (!pool) {
    pool = mysql.createPool({
      host: process.env.MYSQL_HOST,
      port: Number(process.env.MYSQL_PORT ?? 3306),
      user: process.env.MYSQL_USER,
      password: process.env.MYSQL_PASSWORD,
      database: process.env.MYSQL_DATABASE,
      waitForConnections: true,
      connectionLimit: 5,
      connectTimeout: 5000,
    });

    // mysql2 pools emit connection-level errors as an 'error' event;
    // without a listener, Node treats that as an uncaught exception
    // and crashes the whole process on any DB hiccup. The promise-pool's
    // types only declare the 'enqueue' event even though it's a real
    // EventEmitter at runtime, so this needs an explicit cast.
    (pool as unknown as EventEmitter).on("error", () => {});
  }
  return pool;
}

const DEFAULT_TIMEOUT_MS = 5000;

// mysql2's own connection retry/backoff can hang for minutes when the
// database is unreachable, well past its connectTimeout. Racing every
// call against a hard timeout keeps a MySQL outage from hanging pages
// instead of failing fast.
export async function query<T>(
  sql: string,
  params: unknown[] = [],
  timeoutMs = DEFAULT_TIMEOUT_MS
): Promise<T> {
  return Promise.race([
    getPool()
      .query(sql, params)
      .then(([rows]) => rows as T),
    new Promise<T>((_, reject) =>
      setTimeout(() => reject(new Error("Database query timed out")), timeoutMs)
    ),
  ]);
}
