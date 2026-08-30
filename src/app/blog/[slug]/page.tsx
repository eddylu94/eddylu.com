import type { Metadata } from "next";
import Link from "next/link";
import { notFound } from "next/navigation";
import Image from "next/image";
import fs from "fs";
import path from "path";
import { getPostBySlug, formatDate } from "@/lib/posts";
import { buildMetadata } from "@/lib/metadata";

const POSTS_DIR = path.join(process.cwd(), "content/blog");

export function generateStaticParams() {
  return fs
    .readdirSync(POSTS_DIR)
    .filter((file) => file.endsWith(".md"))
    .map((file) => ({ slug: file.replace(/\.md$/, "") }));
}

export async function generateMetadata({
  params,
}: {
  params: Promise<{ slug: string }>;
}): Promise<Metadata> {
  const { slug } = await params;

  if (!fs.existsSync(path.join(POSTS_DIR, `${slug}.md`))) {
    return {};
  }

  const post = await getPostBySlug(slug);

  return buildMetadata({
    title: post.title,
    description: post.description,
    path: `/blog/${slug}`,
    image: post.cover,
    type: "article",
    publishedTime: post.date,
  });
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
      <Link
        href="/blog"
        className="text-xs font-medium uppercase tracking-widest text-muted transition-colors hover:text-foreground"
      >
        ← All posts
      </Link>

      <p className="mt-6 text-sm text-muted">{formatDate(post.date)}</p>
      <h1 className="mt-2 text-4xl font-semibold tracking-tight text-foreground">
        {post.title}
      </h1>

      <div className="mt-8">
        <div className="relative mx-auto aspect-video w-full max-w-full overflow-hidden rounded-lg border border-border bg-surface">
          <Image
            src={post.cover}
            alt={post.title}
            fill
            className="object-contain"
            priority
          />
        </div>
        {post.coverCaption && (
          <p className="mt-2 text-center text-sm italic text-muted">
            {post.coverCaption}
          </p>
        )}
      </div>

      <div
        className="prose prose-neutral mt-8 max-w-none prose-a:font-medium"
        dangerouslySetInnerHTML={{ __html: post.contentHtml }}
      />
    </article>
  );
}
