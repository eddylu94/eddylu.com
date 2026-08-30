import type { Metadata } from "next";
import { Geist, Geist_Mono } from "next/font/google";
import Header from "@/components/Header";
import Footer from "@/components/Footer";
import StatsRecorder from "@/components/StatsRecorder";
import "./globals.css";

const geistSans = Geist({
  variable: "--font-geist-sans",
  subsets: ["latin"],
});

const geistMono = Geist_Mono({
  variable: "--font-geist-mono",
  subsets: ["latin"],
});

const SITE_DESCRIPTION = "Eddy Lu's personal site and blog";

export const metadata: Metadata = {
  metadataBase: new URL("https://eddylu.com"),
  title: {
    default: "Eddy Lu",
    template: "%s | Eddy Lu",
  },
  description: SITE_DESCRIPTION,
  icons: { icon: "/images/icons/favicon.ico" },
  openGraph: {
    title: "Eddy Lu",
    description: SITE_DESCRIPTION,
    siteName: "Eddy Lu",
    type: "website",
    images: ["/images/propic.jpg"],
  },
  twitter: {
    card: "summary_large_image",
    title: "Eddy Lu",
    description: SITE_DESCRIPTION,
    images: ["/images/propic.jpg"],
  },
};

const THEME_INIT_SCRIPT = `
(function () {
  try {
    if (localStorage.getItem("theme") === "dark") {
      document.documentElement.classList.add("dark");
    }
  } catch (e) {}
})();
`;

export default function RootLayout({ children }: LayoutProps<"/">) {
  return (
    <html
      lang="en"
      className={`${geistSans.variable} ${geistMono.variable} h-full antialiased`}
      suppressHydrationWarning
    >
      <body className="min-h-full flex flex-col">
        <script dangerouslySetInnerHTML={{ __html: THEME_INIT_SCRIPT }} />
        <StatsRecorder />
        <Header />
        <main className="flex-1">{children}</main>
        <Footer />
      </body>
    </html>
  );
}
