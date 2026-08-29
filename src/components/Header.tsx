"use client";

import { useState } from "react";
import Link from "next/link";
import Image from "next/image";

const navLinks = [
  { href: "/blog", label: "Blog" },
  { href: "/projects", label: "Projects" },
  { href: "https://www.notion.so/Random-Notes-b91efbf129b64a83b12c893211b4ef8c", label: "Notion", external: true },
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

  return (
    <header className="sticky top-0 z-50 bg-[#262626] text-[#D9D9D9] shadow-[0_0_20px_#1a1a1a]">
      <div className="flex h-[50px] items-center justify-between px-4">
        <button
          aria-label="Toggle menu"
          onClick={() => setMenuOpen((open) => !open)}
          className="flex flex-col gap-1 p-2 sm:hidden"
        >
          <span className="block h-0.5 w-5 bg-[#D9D9D9]" />
          <span className="block h-0.5 w-5 bg-[#D9D9D9]" />
          <span className="block h-0.5 w-5 bg-[#D9D9D9]" />
        </button>

        <Link href="/" className="font-bold">
          <span className="text-white">Eddy </span>
          <span className="text-[#FFCC00]">Lu</span>
        </Link>

        <nav className="hidden items-center gap-1 sm:flex">
          {navLinks.map((link) => (
            <Link
              key={link.href}
              href={link.href}
              target={link.external ? "_blank" : undefined}
              rel={link.external ? "noreferrer" : undefined}
              className="px-2.5 py-1 hover:bg-black/40 hover:text-white"
            >
              {link.label}
            </Link>
          ))}
        </nav>

        <div className="flex items-center gap-2.5">
          {socialLinks.map((social) => (
            <a key={social.href} href={social.href} target="_blank" rel="noreferrer">
              <Image
                src={social.icon}
                alt={social.label}
                width={28}
                height={28}
                className="rounded-full opacity-80 hover:opacity-100"
              />
            </a>
          ))}
        </div>
      </div>

      {menuOpen && (
        <nav className="flex flex-col gap-1 bg-[#1a1a1a] px-4 py-3 text-lg sm:hidden">
          {navLinks.map((link) => (
            <Link
              key={link.href}
              href={link.href}
              target={link.external ? "_blank" : undefined}
              rel={link.external ? "noreferrer" : undefined}
              onClick={() => setMenuOpen(false)}
              className="py-2"
            >
              {link.label}
            </Link>
          ))}
        </nav>
      )}
    </header>
  );
}
