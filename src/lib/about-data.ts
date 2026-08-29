export type CvEntry = {
  logo: string;
  title: string;
  org: string;
  meta: string[];
};

export const workExperience: CvEntry[] = [
  { logo: "/images/logos/parafin-logo.png", title: "Engineering Manager", org: "Parafin", meta: ["2025 - Present", "San Francisco, California"] },
  { logo: "/images/logos/plaid-logo.png", title: "Senior Software Engineer", org: "Plaid", meta: ["2022 - 2025", "San Francisco, California"] },
  { logo: "/images/logos/discord-logo.png", title: "Senior Software Engineer", org: "Discord", meta: ["2021 - 2022", "San Francisco, California"] },
  { logo: "/images/logos/linkedin-logo.png", title: "Senior Software Engineer", org: "LinkedIn", meta: ["2019 - 2021", "Sunnyvale, California"] },
  { logo: "/images/logos/microsoft-logo.png", title: "Software Engineer", org: "Microsoft", meta: ["2016 - 2019", "Bellevue, Washington"] },
  { logo: "/images/logos/nokia-logo.png", title: "Software Engineer Intern", org: "Nokia", meta: ["2015", "Kanata, Ontario"] },
];

export const education: CvEntry[] = [
  { logo: "/images/logos/mcgill-logo.png", title: "Bachelor of Engineering", org: "McGill University", meta: ["Electrical Engineering", "Montreal, Quebec"] },
];
