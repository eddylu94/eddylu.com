import Image from "next/image";
import type { Book } from "@/lib/readings-data";

export default function BookGrid({ books }: { books: Book[] }) {
  return (
    <div className="grid gap-6 sm:grid-cols-2">
      {books.map((book) => (
        <div key={book.title} className="flex gap-4">
          <Image
            src={book.cover}
            alt={book.title}
            width={100}
            height={150}
            className="h-[150px] w-[100px] shrink-0 rounded object-cover shadow"
          />
          <div>
            <h4 className="font-semibold text-[#333]">{book.title}</h4>
            <p className="text-sm text-[#888]">by {book.author}</p>
            <p className="mt-1 text-sm text-[#333]">{book.description}</p>
            <a
              href={book.link}
              target="_blank"
              rel="noreferrer"
              className="mt-1 inline-block text-sm font-bold text-[#333]"
            >
              View on Amazon
            </a>
          </div>
        </div>
      ))}
    </div>
  );
}
