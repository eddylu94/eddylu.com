import type { Metadata } from "next";
import { query } from "@/lib/db";

export const dynamic = "force-dynamic";

export const metadata: Metadata = {
  title: "Statistics",
  robots: { index: false, follow: false },
};

type ViewRow = { path: string; created_at: string };
type CountRow = { count: number };

export default async function StatsPage() {
  let recent: ViewRow[] = [];
  let totalViews = 0;
  let distinctVisitors = 0;
  let error = false;

  try {
    recent = await query<ViewRow[]>(
      "SELECT path, created_at FROM page_views ORDER BY created_at DESC LIMIT 20"
    );

    const totalRows = await query<CountRow[]>(
      "SELECT COUNT(*) AS count FROM page_views"
    );
    totalViews = totalRows[0].count;

    const distinctRows = await query<CountRow[]>(
      "SELECT COUNT(DISTINCT ip_hash) AS count FROM page_views"
    );
    distinctVisitors = distinctRows[0].count;
  } catch {
    error = true;
  }

  if (error) {
    return (
      <div className="mx-auto max-w-3xl px-4 py-10 text-foreground">
        <h1 className="text-2xl font-semibold tracking-tight">Statistics</h1>
        <p className="mt-4 text-muted">Stats are temporarily unavailable.</p>
      </div>
    );
  }

  return (
    <div className="mx-auto max-w-3xl px-4 py-10 text-foreground">
      <h1 className="text-2xl font-semibold tracking-tight">Statistics</h1>

      <p className="mt-6 text-muted">Views of the last 20 pages on this website:</p>
      <div className="mt-3 overflow-hidden rounded-lg border border-border">
        <table className="w-full border-collapse text-left text-sm">
          <thead>
            <tr className="border-b border-border bg-surface">
              <th className="p-3 font-medium text-muted">Date</th>
              <th className="p-3 font-medium text-muted">Page Visited</th>
            </tr>
          </thead>
          <tbody>
            {recent.map((row, i) => (
              <tr key={i} className="border-b border-border last:border-none hover:bg-surface-hover">
                <td className="p-3">{new Date(row.created_at).toLocaleString()}</td>
                <td className="p-3">{row.path}</td>
              </tr>
            ))}
          </tbody>
        </table>
      </div>

      <p className="mt-8">
        Total distinct visitors: <strong>{distinctVisitors}</strong>
      </p>
      <p className="mt-2">
        Total views: <strong>{totalViews}</strong>
      </p>
    </div>
  );
}
