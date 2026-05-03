import React, { useEffect, useState } from "react";
import { ChevronsDown } from "lucide-react";

const typewriterTexts = [
  "Welcome to my portfolio!",
  "I'm a Full Stack Developer.",
  "Explore my projects and skills."
];

export default function Home() {
  const [displayedLines, setDisplayedLines] = useState<string[]>([]);
  const [textIndex, setTextIndex] = useState(0);
  const [charIndex, setCharIndex] = useState(0);

  useEffect(() => {
    if (charIndex < typewriterTexts[textIndex].length) {
      const timeout = setTimeout(() => {
        setDisplayedLines((prev) => {
          const newLines = [...prev];
          if (!newLines[textIndex]) newLines[textIndex] = "";
          newLines[textIndex] += typewriterTexts[textIndex][charIndex];
          return newLines;
        });
        setCharIndex((prev) => prev + 1);
      }, 80);
      return () => clearTimeout(timeout);
    } else {
      // Pause before next text
      if (textIndex < typewriterTexts.length - 1) {
        const pauseTimeout = setTimeout(() => {
          setTextIndex((prev) => prev + 1);
          setCharIndex(0);
        }, 1200);
        return () => clearTimeout(pauseTimeout);
      }
    }
  }, [charIndex, textIndex]);

  return (
    <div className="max-w-5xl mx-auto min-h-full flex flex-col items-center justify-center gap-4 px-2 sm:px-4 md:px-8 xl:px-16">
      <div className="text-4xl font-extrabold text-red-600 mb-8 text-center">
        <h1 className="text-8xl mb-5 text-black">AndreiSNRQ</h1>
        <div className="text-black/60 font-semibold text-md">
          {typewriterTexts.map((_, idx) => (
            <div key={idx}>
              {displayedLines[idx] || ""}
              {idx === textIndex && <span className="animate-blink text-accent">|</span>}
            </div>
          ))}
        </div>
      </div>
      <div className="top-1/2 transform translate-y-50 flex flex-col justify-center items-center text-red-600 animate-pulse font-semibold text-xl hover:animate-none hover:text-black/100 cursor-pointer" onClick={() => scrollToSection('tech')}>
        Scroll
        <ChevronsDown className="animate-bounce " size={32} />
      </div>
    </div>
  );

    function scrollToSection(sectionId: string) {
        const section = document.getElementById(sectionId);
        if (section) {
        section.scrollIntoView({ behavior: "smooth" });
        }
    }
}

// Add blinking cursor animation to globals.css