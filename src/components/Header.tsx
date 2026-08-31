"use client";

import { useState } from "react";
import Link from "next/link";
import Image from "next/image";
import { usePathname } from "next/navigation";
import ThemeToggle from "./ThemeToggle";

const navLinks = [
  { href: "/blog", label: "Blog" },
  { href: "/projects", label: "Projects" },
  { href: "/notion", label: "Notion" },
  { href: "/readings", label: "Readings" },
  { href: "/about", label: "CV" },
];

const socialLinks = [
  { href: "https://github.com/eddylu94", label: "GitHub", icon: "/images/icons/gh-icon_round.png" },
  { href: "https://x.com/eddylu88", label: "X", icon: "/images/icons/x-icon.png" },
  { href: "https://linkedin.com/in/lueddy", label: "LinkedIn", icon: "/images/icons/in-icon_round.png" },
];

export default function Header() {
  const [menuOpen, setMenuOpen] = useState(false);
  const pathname = usePathname();

  const isActive = (href: string) =>
    href === "/blog" ? pathname === "/" || pathname.startsWith("/blog") : pathname.startsWith(href);

  return (
    <header className="sticky top-0 z-50 border-b border-border bg-background">
      <div className="mx-auto flex h-16 max-w-5xl items-center justify-between px-4">
        <Link href="/" className="text-base font-semibold tracking-tight">
          <span className="text-foreground">Eddy </span>
          <span className="text-accent">Lu</span>
        </Link>

        <nav className="hidden items-center gap-1 sm:flex">
          {navLinks.map((link) => (
            <Link
              key={link.href}
              href={link.href}
              className={`border-b-2 px-3 py-1.5 text-xs uppercase tracking-widest transition-colors ${
                isActive(link.href)
                  ? "border-accent text-foreground"
                  : "border-transparent text-muted hover:border-border hover:text-foreground"
              }`}
            >
              {link.label}
            </Link>
          ))}
        </nav>

        <div className="flex items-center gap-4">
          <div className="hidden items-center gap-3 sm:flex">
            {socialLinks.map((social) => (
              <a key={social.href} href={social.href} target="_blank" rel="noreferrer">
                <Image
                  src={social.icon}
                  alt={social.label}
                  width={22}
                  height={22}
                  className="rounded-full opacity-70 transition-opacity hover:opacity-100"
                />
              </a>
            ))}
          </div>

          <ThemeToggle />

          <button
            aria-label="Toggle menu"
            aria-expanded={menuOpen}
            onClick={() => setMenuOpen((open) => !open)}
            className="flex h-8 w-8 flex-col items-center justify-center gap-[5px] sm:hidden"
          >
            <span
              className={`block h-px w-5 bg-foreground transition-transform duration-200 ${
                menuOpen ? "translate-y-[3px] rotate-45" : ""
              }`}
            />
            <span
              className={`block h-px w-5 bg-foreground transition-transform duration-200 ${
                menuOpen ? "-translate-y-[3px] -rotate-45" : ""
              }`}
            />
          </button>
        </div>
      </div>

      <nav
        className={`grid transition-all duration-200 ease-out sm:hidden ${
          menuOpen ? "grid-rows-[1fr] opacity-100" : "grid-rows-[0fr] opacity-0"
        }`}
      >
        <div className="overflow-hidden border-t border-border">
          <div className="flex flex-col px-4 py-2">
            {navLinks.map((link) => (
              <Link
                key={link.href}
                href={link.href}
                onClick={() => setMenuOpen(false)}
                className={`border-b border-border py-3 text-sm uppercase tracking-widest last:border-none ${
                  isActive(link.href) ? "text-accent" : "text-foreground"
                }`}
              >
                {link.label}
              </Link>
            ))}
            <div className="flex items-center gap-4 py-4">
              {socialLinks.map((social) => (
                <a key={social.href} href={social.href} target="_blank" rel="noreferrer">
                  <Image
                    src={social.icon}
                    alt={social.label}
                    width={24}
                    height={24}
                    className="rounded-full opacity-80"
                  />
                </a>
              ))}
            </div>
          </div>
        </div>
      </nav>
    </header>
  );
}
