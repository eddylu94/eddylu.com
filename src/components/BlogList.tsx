import Link from "next/link";
import Image from "next/image";
import { getAllPosts, formatDate } from "@/lib/posts";

export default function BlogList() {
  const posts = getAllPosts();
  const [featured, ...rest] = posts;

  return (
    <div className="mx-auto max-w-5xl px-4 py-10">
      <p className="max-w-xl text-muted">
        Random thoughts about technology, mostly software engineering and AI.
      </p>

      <div className="mt-8 grid gap-5 sm:grid-cols-2">
        {featured && (
          <Link
            href={`/blog/${featured.slug}`}
            className="group flex h-80 flex-col overflow-hidden rounded-lg border border-border bg-surface transition-colors hover:border-accent"
          >
            <div className="relative h-[220px] shrink-0 overflow-hidden">
              <span className="absolute left-3 top-3 z-10 text-xs font-medium uppercase tracking-widest text-white/80 mix-blend-difference">
                Latest
              </span>
              <Image
                src={featured.cover}
                alt={featured.title}
                fill
                className="object-cover transition-transform duration-300 group-hover:scale-[1.03]"
              />
            </div>
            <div className="flex-1 p-4">
              <div className="mb-1.5 line-clamp-2 text-lg font-semibold tracking-tight text-foreground">
                {featured.title}
              </div>
              <div className="text-sm text-muted">
                {formatDate(featured.date)}
              </div>
            </div>
          </Link>
        )}

        {rest.map((post, i) => (
          <Link
            key={post.slug}
            href={`/blog/${post.slug}`}
            className="group flex h-80 flex-col overflow-hidden rounded-lg border border-border bg-surface transition-colors hover:border-accent"
          >
            <div className="relative h-[220px] shrink-0 overflow-hidden">
              <span className="absolute left-3 top-3 z-10 text-xs font-medium text-white/80 mix-blend-difference">
                {String(i + 2).padStart(2, "0")}
              </span>
              <Image
                src={post.cover}
                alt={post.title}
                fill
                className="object-cover transition-transform duration-300 group-hover:scale-[1.03]"
              />
            </div>
            <div className="flex-1 p-4">
              <div className="mb-1.5 line-clamp-2 text-lg font-semibold tracking-tight text-foreground">
                {post.title}
              </div>
              <div className="text-sm text-muted">{formatDate(post.date)}</div>
            </div>
          </Link>
        ))}
      </div>
    </div>
  );
}
