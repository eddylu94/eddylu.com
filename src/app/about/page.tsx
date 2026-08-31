import type { Metadata } from "next";
import Image from "next/image";
import { workExperience, education, type CvEntry } from "@/lib/about-data";
import { buildMetadata } from "@/lib/metadata";

export const metadata: Metadata = buildMetadata({
  title: "About",
  description: "Software Engineer based in the San Francisco Bay Area.",
  path: "/about",
});

function CvSection({ title, entries }: { title: string; entries: CvEntry[] }) {
  return (
    <div className="mt-12">
      <span className="text-xs font-medium uppercase tracking-widest text-muted">{title}</span>
      <div className="mt-4 flex flex-col">
        {entries.map((entry) => (
          <div
            key={`${entry.org}-${entry.title}`}
            className="flex items-center gap-4 border-t border-border py-5 first:border-none first:pt-0"
          >
            <div className="flex h-14 w-14 shrink-0 items-center justify-center rounded-lg border border-border bg-surface p-2">
              <Image
                src={entry.logo}
                alt={`${entry.org} logo`}
                width={40}
                height={40}
                className="object-contain"
              />
            </div>
            <div>
              <h3 className="font-semibold tracking-tight text-foreground">{entry.title}</h3>
              <h4 className="text-muted">{entry.org}</h4>
              {entry.meta.map((line) => (
                <p key={line} className="text-xs text-muted">
                  {line}
                </p>
              ))}
            </div>
          </div>
        ))}
      </div>
    </div>
  );
}

export default function AboutPage() {
  return (
    <div className="mx-auto max-w-3xl px-4 py-10">
      <Image
        src="/images/propic.jpg"
        alt="A robot I built, wired up on a breadboard"
        width={1200}
        height={600}
        priority
        className="h-auto w-full rounded-lg border border-border object-cover"
      />

      <h1 className="mt-6 text-3xl font-semibold tracking-tight text-foreground">
        Hello! I&apos;m Eddy
      </h1>

      <div className="mt-8">
        <p className="text-foreground">
          I am a Software Engineer based in the San Francisco Bay Area.
        </p>
        <p className="mt-3 text-foreground">
          Outside of work, I enjoy building side projects and exploring new
          technologies. I also enjoy playing soccer and basketball, and going
          snowboarding.
        </p>
      </div>

      <CvSection title="Work Experience" entries={workExperience} />
      <CvSection title="Education" entries={education} />
    </div>
  );
}
