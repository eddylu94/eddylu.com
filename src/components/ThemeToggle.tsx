"use client";

import { useEffect, useState } from "react";

export default function ThemeToggle() {
  const [mounted, setMounted] = useState(false);
  const [isDark, setIsDark] = useState(false);

  useEffect(() => {
    setIsDark(document.documentElement.classList.contains("dark"));
    setMounted(true);
  }, []);

  const toggle = () => {
    const next = !isDark;
    setIsDark(next);
    document.documentElement.classList.toggle("dark", next);
    localStorage.setItem("theme", next ? "dark" : "light");
  };

  const checked = mounted && isDark;

  return (
    <button
      type="button"
      role="switch"
      aria-checked={checked}
      aria-label={checked ? "Switch to light mode" : "Switch to dark mode"}
      onClick={toggle}
      className={`relative inline-flex h-6 w-11 flex-shrink-0 items-center rounded-full border border-border transition-colors ${
        checked ? "bg-accent" : "bg-surface-hover"
      }`}
    >
      <span
        className={`inline-flex h-4 w-4 items-center justify-center rounded-full bg-background shadow-sm transition-transform ${
          checked ? "translate-x-[22px]" : "translate-x-[3px]"
        }`}
      >
        {checked ? (
          <svg viewBox="0 0 24 24" width="10" height="10" fill="none" stroke="currentColor" strokeWidth="2.5" strokeLinecap="round" strokeLinejoin="round" className="text-accent-contrast">
            <circle cx="12" cy="12" r="4" />
            <path d="M12 2v2M12 20v2M4.93 4.93l1.41 1.41M17.66 17.66l1.41 1.41M2 12h2M20 12h2M6.34 17.66l-1.41 1.41M19.07 4.93l-1.41 1.41" />
          </svg>
        ) : (
          <svg viewBox="0 0 24 24" width="10" height="10" fill="none" stroke="currentColor" strokeWidth="2.5" strokeLinecap="round" strokeLinejoin="round" className="text-muted">
            <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79Z" />
          </svg>
        )}
      </span>
    </button>
  );
}
