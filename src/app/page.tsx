import type { Metadata } from "next";
import BlogList from "@/components/BlogList";
import { buildMetadata } from "@/lib/metadata";

export const metadata: Metadata = buildMetadata({
  description: "Random thoughts about technology",
  path: "/",
});

export default function Home() {
  return <BlogList />;
}
