import BookGrid from "@/components/BookGrid";
import { technicalBooks, leisureBooks } from "@/lib/readings-data";

export default function ReadingsPage() {
  return (
    <div className="mx-auto max-w-4xl px-4 py-10">
      <h1 className="text-3xl font-bold text-[#333]">Readings</h1>
      <p className="mt-1 text-[#888]">
        Books I found interesting and worth sharing
      </p>

      <div className="mt-8">
        <h2 className="text-xl font-semibold text-[#333]">Technical Books</h2>
        <p className="mt-1 text-[#333]">
          Technical books and resources for software engineering and computer
          science.
        </p>
        <div className="mt-4">
          <BookGrid books={technicalBooks} />
        </div>
      </div>

      <div className="mt-10">
        <h2 className="text-xl font-semibold text-[#333]">Leisure Books</h2>
        <p className="mt-1 text-[#333]">Non-technical books I&apos;ve enjoyed reading.</p>
        <div className="mt-4">
          <BookGrid books={leisureBooks} />
        </div>
      </div>
    </div>
  );
}
