export type Project = {
  title: string;
  dates: string;
  url: string;
  description: string;
  image: string;
  largeImage: string;
  groups: { label: string; items: string[] }[];
  tags: string[];
};

export const projects: Project[] = [
  {
    title: "Sleeping with Friends",
    dates: "Apr. 2025 - Present",
    url: "https://sleepingwithfriends.com",
    description:
      "A few friends and I built a website, Sleeping with Friends, that gamifies sleep tracking by allowing users to compare their sleep statistics with friends through leaderboards and data visualization. Users can link their existing health devices and compete on metrics like total sleep hours and deep sleep.",
    image: "/images/projects/sleeping-with-friends.png",
    largeImage: "/images/projects/sleeping-with-friends-dashboard.png",
    groups: [
      { label: "Frontend", items: ["Next.js, React, TypeScript, Tailwind"] },
      { label: "Backend", items: ["FastAPI, Python, SQLAlchemy", "PostgreSQL, Pydantic"] },
      { label: "Authentication", items: ["Clerk, JWT", "Health device integrations (ex. Garmin, Oura, Fitbit, etc.)"] },
      { label: "Deployment", items: ["Vercel"] },
    ],
    tags: ["Next.js", "React", "TypeScript", "FastAPI", "PostgreSQL", "Tailwind CSS"],
  },
];
