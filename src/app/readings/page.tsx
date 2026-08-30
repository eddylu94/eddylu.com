import type { Metadata } from "next";
import BookGrid from "@/components/BookGrid";
import { technicalBooks, leisureBooks } from "@/lib/readings-data";
import { buildMetadata } from "@/lib/metadata";

export const metadata: Metadata = buildMetadata({
  title: "Readings",
  description: "Books I found interesting and worth sharing",
  path: "/readings",
});

export default function ReadingsPage() {
  return (
    <div className="mx-auto max-w-4xl px-4 py-10">
      <h1 className="text-3xl font-semibold tracking-tight text-foreground">Readings</h1>
      <p className="mt-1 text-muted">
        Books I found interesting and worth sharing
      </p>

      <div className="mt-10">
        <span className="text-xs font-medium uppercase tracking-widest text-muted">
          Technical Books
        </span>
        <p className="mt-2 text-foreground">
          Technical books and resources for software engineering and computer
          science.
        </p>
        <div className="mt-5">
          <BookGrid books={technicalBooks} />
        </div>
      </div>

      <div className="mt-12">
        <span className="text-xs font-medium uppercase tracking-widest text-muted">
          Leisure Books
        </span>
        <p className="mt-2 text-foreground">Non-technical books I&apos;ve enjoyed reading.</p>
        <div className="mt-5">
          <BookGrid books={leisureBooks} />
        </div>
      </div>
    </div>
  );
}
