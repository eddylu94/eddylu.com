import type { Metadata } from "next";
import Image from "next/image";
import { projects } from "@/lib/projects-data";
import { buildMetadata } from "@/lib/metadata";

export const metadata: Metadata = buildMetadata({
  title: "Projects",
  description: "Some recent side projects",
  path: "/projects",
  image: "/images/projects/sleeping-with-friends-dashboard.png",
});

export default function ProjectsPage() {
  return (
    <div className="mx-auto max-w-5xl px-4 py-10">
      <h1 className="text-3xl font-bold text-[#333]">Projects</h1>
      <p className="mt-1 text-[#888]">Some recent side projects</p>

      <div className="mt-8 flex flex-col gap-12">
        {projects.map((project) => (
          <div key={project.title} className="flex flex-col gap-8 md:flex-row">
            <div className="flex-1">
              <h2 className="text-2xl font-bold text-[#333]">{project.title}</h2>
              <h3 className="text-[#888]">{project.dates}</h3>

              <a
                href={project.url}
                target="_blank"
                rel="noreferrer"
                className="mt-4 block font-bold text-[#333]"
              >
                {project.url}
              </a>

              <p className="mt-4 text-[#333]">{project.description}</p>

              {project.groups.map((group) => (
                <div key={group.label} className="mt-4">
                  <strong className="text-[#333]">{group.label}:</strong>
                  {group.items.map((item) => (
                    <div key={item} className="text-[#333]">
                      • {item}
                    </div>
                  ))}
                </div>
              ))}

              <div className="mt-4 flex flex-wrap gap-2">
                {project.tags.map((tag) => (
                  <span
                    key={tag}
                    className="rounded-full bg-black/[.06] px-3 py-1 text-sm text-[#333]"
                  >
                    {tag}
                  </span>
                ))}
              </div>
            </div>

            <div className="flex w-full shrink-0 flex-col gap-4 md:w-1/2">
              <Image
                src={project.image}
                alt={project.title}
                width={879}
                height={522}
                className="w-full rounded-lg object-contain"
              />
              <Image
                src={project.largeImage}
                alt={`${project.title} dashboard`}
                width={800}
                height={600}
                className="w-full rounded-lg object-contain"
              />
            </div>
          </div>
        ))}
      </div>
    </div>
  );
}
