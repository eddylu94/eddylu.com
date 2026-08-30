import Image from "next/image";
import type { Book } from "@/lib/readings-data";

export default function BookGrid({ books }: { books: Book[] }) {
  return (
    <div className="grid gap-4 sm:grid-cols-2">
      {books.map((book) => (
        <div
          key={book.title}
          className="flex gap-4 rounded-lg border border-border bg-surface p-4 transition-colors hover:border-accent"
        >
          <Image
            src={book.cover}
            alt={book.title}
            width={100}
            height={150}
            className="h-[150px] w-[100px] shrink-0 rounded object-cover"
          />
          <div>
            <h4 className="font-semibold tracking-tight text-foreground">{book.title}</h4>
            <p className="text-xs text-muted">by {book.author}</p>
            <p className="mt-1 text-sm text-foreground">{book.description}</p>
            <a
              href={book.link}
              target="_blank"
              rel="noreferrer"
              className="mt-2 inline-block text-sm font-medium text-accent underline decoration-accent/40 underline-offset-4 hover:decoration-accent"
            >
              View on Amazon →
            </a>
          </div>
        </div>
      ))}
    </div>
  );
}
