import React, { useState, useEffect } from "react";
import { FaReact } from "react-icons/fa";
import { FaCss3Alt as CSS3, FaSquareJs as JS ,FaLaravel as Laravel, FaPhp as PHP, FaBootstrap as Bootstrap, FaNodeJs as NodeJS } from "react-icons/fa6";
import { TiHtml5 as HTML5 } from "react-icons/ti";
import { RiNextjsFill as NextJS, RiTailwindCssFill as TailwindCSS } from "react-icons/ri";
import { BiLogoTypescript as Typescript, BiLogoPostgresql as Postgresql } from "react-icons/bi";
import { SiMysql as MySQL } from "react-icons/si";

const projstack = {
  portfolio: [NextJS, CSS3, HTML5, JS, TailwindCSS],
  HR3: [FaReact, CSS3, HTML5, JS, TailwindCSS, MySQL],
  inventory: [Laravel, PHP, CSS3, HTML5, JS, Bootstrap, MySQL],
  training: [Typescript, PHP, CSS3, TailwindCSS, HTML5, NodeJS, Postgresql],
};

const projects = [
  {
    title: "Portfolio Website",
    description: "A modern portfolio built with Next.js and Tailwind CSS.",
    link: "https://portfolio.andreisnrq.workers.dev/",
    target: "_self",
    stack: projstack.portfolio,
  },
  {
    title: "Joli Travel and Tours: Human Resource WorkforceOps",
    description: "Corporate website with custom CMS and SEO optimization.",
    link: "https://portfolio.andreisnrq.workers.dev/",
    target: "_blank",
    stack: projstack.HR3,
  },
  {
    title: "Inventory Management System",
    description: "Corporate website with custom CMS and SEO optimization.",
    link: "https://portfolio.andreisnrq.workers.dev/",
    target: "_blank",
    stack: projstack.inventory,
  },
  {
    title: "Training Management System",
    description: "Corporate website with custom CMS and SEO optimization.",
    link: "https://portfolio.andreisnrq.workers.dev/",
    target: "_blank",
    stack: projstack.training,
  },
  // Add more projects here as needed
];

export default function Project() {
  const [index, setIndex] = useState(0);
  const [visibleCount, setVisibleCount] = useState(1); // Default to 1 for SSR

  useEffect(() => {
    const getVisibleCount = () => {
      if (window.innerWidth >= 1024) return 3; // lg
      if (window.innerWidth >= 768) return 2; // md
      return 1; // sm
    };
    setVisibleCount(getVisibleCount());
    const handleResize = () => setVisibleCount(getVisibleCount());
    window.addEventListener("resize", handleResize);
    return () => window.removeEventListener("resize", handleResize);
  }, []);

  const maxIndex = Math.max(0, projects.length - visibleCount);

  const handlePrev = () => setIndex((i) => Math.max(0, i - 1));
  const handleNext = () => setIndex((i) => Math.min(maxIndex, i + 1));

  return (
    <div className="max-w-7xl mx-auto min-h-full flex flex-col items-center justify-center gap-4 px-2 sm:px-4 md:px-8 xl:px-16">
      <div className="text-4xl font-extrabold text-red-600 mb-8 text-center"><h1 className="flex items-center">Projects <span className="ml-3 text-lg font-light text-white bg-accent/60 px-2 rounded-full">{projects.length}</span></h1></div>
      <div className="relative min-w-full">
        <button
          className="absolute -left-10 top-1/2 -translate-y-1/2 bg-red-600 text-white rounded-full p-2 z-10 disabled:opacity-50"
          onClick={handlePrev}
          disabled={index === 0}
        >
          &#8592;
        </button>
        <div className="grid max-w-6xl grid-cols-3 max-w-8xl justify-center gap-4 overflow-hidden">
          {projects.slice(index, index + visibleCount).map((project, idx) => (
            <div
              key={project.title}
              className="bg-gradient-to-br from-red-500 via-red-400 to-red-600 p-8 rounded-2xl shadow-xl text-white flex-1 mx-2 min-w-0"
              style={{ minWidth: 0 }}
            >
              <div className="font-semibold text-2xl mb-2">{project.title}</div>
              <div className="text-md text-white/80 font-arial">{project.description}</div>
              <a
                href={project.link}
                target={project.target}
                rel="noopener noreferrer"
                className="mt-4 inline-block bg-accent text-white px-6 py-2 rounded-full font-bold hover:bg-accent-500 transition"
              >
                View Project
              </a>
              <div className="mt-4">
                <h2 className="text-lg font-bold text-white/80 pb-3">TechStack and Tools:</h2>
                {project.stack.map((IconComponent, idx) => (
                  <div key={idx} className="inline-block text-2xl w-auto h-auto mr-2 text-black">
                    <IconComponent />
                  </div>
                ))}
              </div>
            </div>
          ))}
        </div>
        <button
          className="absolute -right-10 top-1/2 -translate-y-1/2 bg-red-600 text-white rounded-full p-2 z-10 disabled:opacity-50"
          onClick={handleNext}
          disabled={index === maxIndex}
        >
          &#8594;
        </button>
      </div>
    </div>
  );
}