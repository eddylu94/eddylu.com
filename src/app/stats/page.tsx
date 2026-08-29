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
      <div className="mx-auto max-w-3xl px-4 py-10 text-[#333]">
        <h1 className="text-2xl font-bold">Statistics</h1>
        <p className="mt-4">Stats are temporarily unavailable.</p>
      </div>
    );
  }

  return (
    <div className="mx-auto max-w-3xl px-4 py-10 text-[#333]">
      <h1 className="text-2xl font-bold">Statistics</h1>

      <p className="mt-6">Views of the last 20 pages on this website:</p>
      <table className="mt-3 w-full border-collapse text-left">
        <thead>
          <tr className="bg-[#666] text-white">
            <th className="p-2">Date</th>
            <th className="p-2">Page Visited</th>
          </tr>
        </thead>
        <tbody>
          {recent.map((row, i) => (
            <tr key={i} className="even:bg-[#f2f2f2] hover:bg-[#ddd]">
              <td className="border border-[#ddd] p-2">
                {new Date(row.created_at).toLocaleString()}
              </td>
              <td className="border border-[#ddd] p-2">{row.path}</td>
            </tr>
          ))}
        </tbody>
      </table>

      <p className="mt-8">
        Total distinct visitors: <strong>{distinctVisitors}</strong>
      </p>
      <p className="mt-2">
        Total views: <strong>{totalViews}</strong>
      </p>
    </div>
  );
}
