export type Book = {
  title: string;
  author: string;
  description: string;
  cover: string;
  link: string;
};

export const technicalBooks: Book[] = [
  {
    title: "Designing Data-Intensive Applications",
    author: "Martin Kleppmann",
    description:
      "An essential guide to building reliable, scalable, and maintainable data systems. Covers the principles behind modern data storage and processing systems used by internet-scale applications.",
    cover: "/images/books/designing-data-intensive-applications.jpg",
    link: "https://www.amazon.com/dp/1491973897/",
  },
  {
    title: "The Manager's Path",
    author: "Camille Fournier",
    description:
      "A practical guide for engineering managers and technical leaders navigating career growth. Covers the journey from individual contributor to CTO, with actionable advice for each stage of management.",
    cover: "/images/books/the-managers-path.jpg",
    link: "https://www.amazon.com/Managers-Path-Leaders-Navigating-Growth/dp/1491973897/",
  },
  {
    title: "Staff Engineer: Leadership beyond the management track",
    author: "Will Larson",
    description:
      "A comprehensive guide for senior engineers looking to advance their careers through technical leadership rather than management. Covers archetypes, scope, and real-world experiences from staff engineers across different companies.",
    cover: "/images/books/staff-engineer.jpg",
    link: "https://www.amazon.com/dp/1736417916/",
  },
  {
    title: "The Lean Startup",
    author: "Eric Ries",
    description:
      "A methodology for developing businesses and products that aims to shorten product development cycles and rapidly discover if a proposed business model is viable. Focuses on validated learning, experimentation, and iterative product releases.",
    cover: "/images/books/the-lean-startup.jpg",
    link: "https://www.amazon.com/Lean-Startup-Entrepreneurs-Continuous-Innovation/dp/0307887898/",
  },
];

export const leisureBooks: Book[] = [
  {
    title: "The Three-Body Problem",
    author: "Cixin Liu",
    description:
      "The first book in the Remembrance of Earth's Past trilogy, this Hugo Award-winning novel explores humanity's first contact with an alien civilization and the complex consequences that follow.",
    cover: "/images/books/three-body-problem.jpg",
    link: "https://www.amazon.com/Three-Body-Problem-Cixin-Liu/dp/0765382032/",
  },
  {
    title: "Project Hail Mary",
    author: "Andy Weir",
    description:
      "A thrilling science fiction novel about a lone astronaut who must save humanity from extinction. Filled with scientific accuracy, humor, and an unforgettable alien friendship.",
    cover: "/images/books/project-hail-mary.jpg",
    link: "https://www.amazon.com/Project-Hail-Mary-Andy-Weir/dp/0593135229/",
  },
];
