import type { Metadata } from "next";

const SITE_URL = "https://eddylu.com";
const DEFAULT_IMAGE = "/images/propic.jpg";

// Next.js does not deep-merge openGraph/twitter objects between a layout
// and a page - a page that defines its own fully replaces the parent's,
// dropping any fields (image, siteName, card type) it didn't repeat. This
// keeps every page's metadata self-contained instead of relying on
// inheritance that doesn't actually happen.
export function buildMetadata({
  title,
  description,
  path,
  image = DEFAULT_IMAGE,
  type = "website",
  publishedTime,
}: {
  title?: string;
  description: string;
  path: string;
  image?: string;
  type?: "website" | "article";
  publishedTime?: string;
}): Metadata {
  const url = `${SITE_URL}${path}`;
  // An explicitly-present `title: undefined` key erases the inherited
  // default/template instead of falling through to it, unlike an omitted
  // key - so only include it at all when a real title was given.
  const titleField = title ? { title } : {};

  return {
    ...titleField,
    description,
    alternates: { canonical: path },
    openGraph: {
      ...titleField,
      description,
      url,
      siteName: "Eddy Lu",
      type,
      images: [image],
      ...(type === "article" && publishedTime ? { publishedTime } : {}),
    },
    twitter: {
      card: "summary_large_image",
      ...titleField,
      description,
      images: [image],
    },
  };
}
