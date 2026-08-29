import Link from "next/link";

export default function Footer() {
  return (
    <footer className="mt-auto py-10 text-center text-sm text-[#333]">
      &copy; {new Date().getFullYear()} Eddy Lu |{" "}
      <Link href="/stats" className="font-bold">
        Statistics
      </Link>
    </footer>
  );
}
