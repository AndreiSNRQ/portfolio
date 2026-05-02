import React, { useState, useEffect } from "react";

  const NAV_ITEMS = [
    { id: 'header', label: 'Home' },
    { id: 'tech', label: 'Tech Stack' },
    { id: 'skills', label: 'Skills' },
    { id: 'portfolio', label: 'Projects' },
    { id: 'experience', label: 'Experience' },
    { id: 'certifications', label: 'Certifications' },
    { id: 'contact', label: 'Contact' },
  ];

    function scrollToSection(sectionId: string) {
        const section = document.getElementById(sectionId);
        if (section) {
        section.scrollIntoView({ behavior: "smooth" });
        }
    }

const Nav = () => {
  return (
          <nav className="w-full flex items-center justify-between px-4 py-4 md:px-12 md:py-6 bg-white/60 backdrop-blur-lg rounded-2xl shadow-xl mb-8 sticky top-4 z-50 border border-red-200">
            <div className="flex items-center gap-3">
              <span className="text-3xl md:text-4xl font-extrabold text-red-600 tracking-tight">AndreiSNRQ</span>
            </div>
            <div className="flex gap-2">
              {NAV_ITEMS.map(item => (
                <button
                  key={item.id}
                  onClick={() => scrollToSection(item.id)}
                  className="px-4 py-2 rounded-full font-semibold text-red-600 bg-white/60 hover:bg-red-600 hover:text-white transition shadow text-sm md:text-base"
                >
                  {item.label}
                </button>
              ))}
            </div>
            <div>
              <ThemeToggler />
            </div>
          </nav>
  );

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
};

export default Nav;