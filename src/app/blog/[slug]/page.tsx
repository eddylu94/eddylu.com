import { notFound } from "next/navigation";
import Image from "next/image";
import fs from "fs";
import path from "path";
import { getPostBySlug, formatDate } from "@/lib/posts";

const POSTS_DIR = path.join(process.cwd(), "content/blog");

export function generateStaticParams() {
  return fs
    .readdirSync(POSTS_DIR)
    .filter((file) => file.endsWith(".md"))
    .map((file) => ({ slug: file.replace(/\.md$/, "") }));
}

export default async function BlogPostPage({
  params,
}: {
  params: Promise<{ slug: string }>;
}) {
  const { slug } = await params;

  if (!fs.existsSync(path.join(POSTS_DIR, `${slug}.md`))) {
    notFound();
  }

  const post = await getPostBySlug(slug);

  return (
    <article className="mx-auto max-w-[800px] px-4 py-10">
      <h1 className="text-4xl font-bold text-[#333]">{post.title}</h1>
      <p className="mt-2 italic text-[#666]">{formatDate(post.date)}</p>

      <div className="mt-8">
        <div className="relative mx-auto aspect-video w-full max-w-full">
          <Image
            src={post.cover}
            alt={post.title}
            fill
            className="object-contain"
            priority
          />
        </div>
        {post.coverCaption && (
          <p className="mt-2 text-center italic text-[#666]">
            {post.coverCaption}
          </p>
        )}
      </div>

      <div
        className="prose prose-neutral mt-8 max-w-none prose-a:font-bold prose-a:text-[#333]"
        dangerouslySetInnerHTML={{ __html: post.contentHtml }}
      />
    </article>
  );
}
