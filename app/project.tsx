import React, { useState, useEffect } from "react";

const projects = [
  {
    title: "Portfolio",
    description: "A modern portfolio built with Next.js and Tailwind CSS.",
    link: "https://portfolio.sanroqueandrei.workers.dev/",
    target: "_self",
  },
  {
    title: "Company Profile Website",
    description: "Corporate website with custom CMS and SEO optimization.",
    link: "https://portfolio.sanroqueandrei.workers.dev/",
    target: "_blank",
  },
  {
    title: "sdf",
    description: "Corporate website with custom CMS and SEO optimization.",
    link: "https://portfolio.sanroqueandrei.workers.dev/",
    target: "_blank",
  },
  {
    title: "Company Website",
    description: "Corporate website with custom CMS and SEO optimization.",
    link: "https://portfolio.sanroqueandrei.workers.dev/",
    target: "_blank",
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
      <div className="text-4xl font-extrabold text-red-600 mb-8 text-center">Featured Projects</div>
      <div className="relative min-w-full">
        <button
          className="absolute -left-10 top-1/2 -translate-y-1/2 bg-red-600 text-white rounded-full p-2 z-10 disabled:opacity-50"
          onClick={handlePrev}
          disabled={index === 0}
        >
          &#8592;
        </button>
        <div className="grid max-w-6xl grid-cols-3 max-w-6xl justify-center gap-4 overflow-hidden">
          {projects.slice(index, index + visibleCount).map((project, idx) => (
            <div
              key={project.title}
              className="bg-gradient-to-br from-red-500 via-red-400 to-red-600 p-8 rounded-2xl shadow-xl text-white flex-1 mx-2 min-w-0"
              style={{ minWidth: 0 }}
            >
              <div className="font-semibold text-2xl mb-2">{project.title}</div>
              <div className="text-lg">{project.description}</div>
              <a
                href={project.link}
                target={project.target}
                rel="noopener noreferrer"
                className="mt-4 inline-block bg-white text-red-600 px-6 py-2 rounded-full font-bold hover:bg-gray-200 transition"
              >
                Test Project
              </a>
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