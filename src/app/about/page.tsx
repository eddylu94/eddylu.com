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
    <div className="mt-10">
      <h2 className="text-xl font-semibold text-[#333]">{title}</h2>
      <div className="mt-4 flex flex-col gap-5">
        {entries.map((entry) => (
          <div key={`${entry.org}-${entry.title}`} className="flex items-center gap-4">
            <Image
              src={entry.logo}
              alt={`${entry.org} logo`}
              width={56}
              height={56}
              className="shrink-0 rounded object-contain"
            />
            <div>
              <h3 className="font-semibold text-[#333]">{entry.title}</h3>
              <h4 className="text-[#555]">{entry.org}</h4>
              {entry.meta.map((line) => (
                <p key={line} className="text-sm text-[#888]">
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
      <h1 className="text-3xl font-bold text-[#333]">Hello! I&apos;m Eddy</h1>

      <div className="mt-8">
        <h2 className="text-xl font-semibold text-[#333]">About Me</h2>
        <p className="mt-3 text-[#333]">
          I am a Software Engineer based in the San Francisco Bay Area.
        </p>
        <p className="mt-3 text-[#333]">
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
