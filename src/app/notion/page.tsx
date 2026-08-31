import type { Metadata } from "next";
import { buildMetadata } from "@/lib/metadata";

const NOTION_URL = "https://www.notion.so/Random-Notes-b91efbf129b64a83b12c893211b4ef8c";

export const metadata: Metadata = buildMetadata({
  title: "Notion",
  description: "A running Notion space of random notes I've collected.",
  path: "/notion",
});

export default function NotionPage() {
  return (
    <div className="mx-auto max-w-3xl px-4 py-10">
      <h1 className="text-3xl font-semibold tracking-tight text-foreground">Random Notes</h1>
      <p className="mt-1 text-muted">
        A loosely organized Notion space where I jot down notes, snippets, and
        things worth remembering.
      </p>

      <a
        href={NOTION_URL}
        target="_blank"
        rel="noreferrer"
        className="mt-6 inline-flex items-center gap-1.5 border-b-2 border-accent pb-0.5 text-sm font-medium uppercase tracking-widest text-foreground transition-opacity hover:opacity-70"
      >
        Open Random Notes
        <svg
          xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 24 24"
          fill="none"
          stroke="currentColor"
          strokeWidth="2"
          strokeLinecap="round"
          strokeLinejoin="round"
          className="h-4 w-4"
        >
          <path d="M7 17 17 7" />
          <path d="M7 7h10v10" />
        </svg>
      </a>
    </div>
  );
}
