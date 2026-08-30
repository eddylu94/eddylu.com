import Link from "next/link";

export default function Footer() {
  return (
    <footer className="mt-auto border-t border-border">
      <div className="mx-auto flex max-w-5xl flex-col items-center gap-2 px-4 py-8 text-xs uppercase tracking-widest text-muted sm:flex-row sm:justify-between">
        <span>&copy; {new Date().getFullYear()} Eddy Lu</span>
        <Link href="/stats" className="transition-colors hover:text-foreground">
          Statistics
        </Link>
      </div>
    </footer>
  );
}
