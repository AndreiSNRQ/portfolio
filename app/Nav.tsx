import { usePathname } from "next/navigation";
import Link from "next/link";
import { useState, useEffect } from "react";

function ThemeToggler() {
  const [dark, setDark] = useState(false);

  useEffect(() => {
    const html = document.documentElement;
    if (dark) {
      html.classList.add("dark");
    } else {
      html.classList.remove("dark");
    }
  }, [dark]);

  return (
    <button
      className="ml-auto flex items-center gap-2 px-2 py-2 bg-accent text-background rounded-full shadow hover:bg-primary transition"
      onClick={() => setDark((prev) => !prev)}
      aria-label="Toggle theme"
    >
      {dark ? (
        <svg width="24" height="24" fill="none" stroke="currentColor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round" className="feather feather-sun"><circle cx="12" cy="12" r="5"></circle><line x1="12" y1="1" x2="12" y2="3"></line><line x1="12" y1="21" x2="12" y2="23"></line><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line><line x1="1" y1="12" x2="3" y2="12"></line><line x1="21" y1="12" x2="23" y2="12"></line><line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line><line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line></svg>
      ) : (
        <svg width="24" height="24" fill="none" stroke="currentColor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round" className="feather feather-moon"><path d="M21 12.79A9 9 0 0112.21 3c-4.97 0-9 4.03-9 9s4.03 9 9 9c4.97 0 9-4.03 9-9z"></path></svg>
      )}
    </button>
  );
}

export default function Nav() {
  const NAV_ITEMS = [
    { id: 'header', label: 'Home' },
    { id: 'projects', label: 'Projects' },
    { id: 'services', label: 'Services' },
    { id: 'experience', label: 'Experience' },
    { id: 'about', label: 'About' },
    { id: 'contact', label: 'Contact' },
  ];

  // Track scroll position to highlight active section
  const [activeSection, setActiveSection] = useState(NAV_ITEMS[0].id);

  useEffect(() => {
    const handleScroll = () => {
      let current = NAV_ITEMS[0].id;
      for (const item of NAV_ITEMS) {
        const section = document.getElementById(item.id);
        if (section) {
          const rect = section.getBoundingClientRect();
          if (rect.top <= 80 && rect.bottom > 80) {
            current = item.id;
            break;
          }
        }
      }
      setActiveSection(current);
    };
    window.addEventListener("scroll", handleScroll);
    handleScroll();
    return () => window.removeEventListener("scroll", handleScroll);
  }, []);

  function scrollToSection(sectionId: string) {
    const section = document.getElementById(sectionId);
    if (section) {
      section.scrollIntoView({ behavior: "smooth" });
    }
  }

  return (
    <nav className="w-full flex items-center justify-between px-4 py-4 md:px-12 md:py-6 bg-red-300/10 backdrop-blur-md rounded-2xl shadow-xl mb-8 sticky top-4 z-50">
      <div className="flex items-center gap-3">
        <span className="text-3xl md:text-4xl font-extrabold text-white tracking-tight">AndreiSNRQ</span>
      </div>
      <div className="flex gap-3">
        {NAV_ITEMS.map(item => (
          <button
            key={item.id}
            onClick={() => scrollToSection(item.id)}
            className={`px-1 font-semibold transition text-sm md:text-base ${activeSection === item.id ? "border-b-2" : "text-white hover:border-red-400 hover:border-b-2 hover:text-red-700"}`}
          >
            {item.label}
          </button>
        ))}
      </div>
      <div></div>
    </nav>
  );
}