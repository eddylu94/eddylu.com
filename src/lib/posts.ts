import fs from "fs";
import path from "path";
import matter from "gray-matter";
import { remark } from "remark";
import remarkGfm from "remark-gfm";
import html from "remark-html";

const POSTS_DIR = path.join(process.cwd(), "content/blog");

function toDateString(value: unknown): string {
  if (value instanceof Date) {
    return value.toISOString().slice(0, 10);
  }
  return value as string;
}

export type PostMeta = {
  slug: string;
  title: string;
  date: string;
  cover: string;
  coverCaption?: string;
};

function readSlugs(): string[] {
  return fs
    .readdirSync(POSTS_DIR)
    .filter((file) => file.endsWith(".md"))
    .map((file) => file.replace(/\.md$/, ""));
}

export function getAllPosts(): PostMeta[] {
  return readSlugs()
    .map((slug) => {
      const file = fs.readFileSync(path.join(POSTS_DIR, `${slug}.md`), "utf8");
      const { data } = matter(file);
      return {
        slug,
        title: data.title as string,
        date: toDateString(data.date),
        cover: data.cover as string,
        coverCaption: data.coverCaption as string | undefined,
      };
    })
    .sort((a, b) => (a.date < b.date ? 1 : -1));
}

export async function getPostBySlug(slug: string) {
  const file = fs.readFileSync(path.join(POSTS_DIR, `${slug}.md`), "utf8");
  const { data, content } = matter(file);
  const processed = await remark().use(remarkGfm).use(html).process(content);

  return {
    slug,
    title: data.title as string,
    date: toDateString(data.date),
    cover: data.cover as string,
    coverCaption: data.coverCaption as string | undefined,
    contentHtml: processed.toString(),
  };
}

export function formatDate(iso: string): string {
  return new Date(`${iso}T00:00:00Z`).toLocaleDateString("en-US", {
    weekday: "long",
    year: "numeric",
    month: "long",
    day: "numeric",
    timeZone: "UTC",
  });
}
