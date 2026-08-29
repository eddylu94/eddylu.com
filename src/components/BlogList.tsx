import Link from "next/link";
import Image from "next/image";
import { getAllPosts, formatDate } from "@/lib/posts";

export default function BlogList() {
  const posts = getAllPosts();

  return (
    <div className="mx-auto max-w-5xl px-4 py-10">
      <div className="grid gap-5 sm:grid-cols-2">
        {posts.map((post) => (
          <Link
            key={post.slug}
            href={`/blog/${post.slug}`}
            className="flex h-80 flex-col overflow-hidden rounded-[10px] border border-[#ccc] bg-white hover:opacity-70"
          >
            <div className="relative h-[220px] shrink-0 overflow-hidden">
              <Image
                src={post.cover}
                alt={post.title}
                fill
                className="object-cover"
              />
            </div>
            <div className="flex-1 p-4">
              <div className="mb-1.5 line-clamp-2 text-lg font-semibold text-[#333]">
                {post.title}
              </div>
              <div className="text-sm text-[#888]">{formatDate(post.date)}</div>
            </div>
          </Link>
        ))}
      </div>
    </div>
  );
}
