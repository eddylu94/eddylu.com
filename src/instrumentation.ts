export function register() {
  if (process.env.NEXT_RUNTIME === "nodejs") {
    // mysql2's internal connection retry logic can emit 'error' events
    // asynchronously, disconnected from any promise chain — no try/catch
    // or Promise.race in application code can intercept those. Without
    // this, a transient MySQL outage would crash the whole Node process
    // (and PM2 would restart it) instead of just failing the one request.
    process.on("uncaughtException", (err) => {
      console.error("Uncaught exception (contained):", err);
    });
    process.on("unhandledRejection", (reason) => {
      console.error("Unhandled rejection (contained):", reason);
    });
  }
}
