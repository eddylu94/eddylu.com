import type { Metadata } from "next";
import BlogList from "@/components/BlogList";
import { buildMetadata } from "@/lib/metadata";

export const metadata: Metadata = buildMetadata({
  title: "Blog",
  description: "Random thoughts about technology",
  path: "/blog",
});

export default function BlogPage() {
  return <BlogList />;
}
