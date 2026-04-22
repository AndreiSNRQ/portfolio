"use client";
import React, { useState, useEffect } from 'react';

export default function Home() {

  const frontendSkills = [
    {
      name: 'React',
      level: 'Expert',
    },
    {
      name: 'VueJS',
      level: 'Advanced',
    },
    {
      name: 'NextJS',
      level: 'Advanced',
    },
    {
      name: 'TypeScript',
      level: 'Advanced',
    },
    {
      name: 'Tailwind CSS',
      level: 'Advanced',
    },
    {
      name: 'Bootstrap',
      level: 'Intermediate',
    },
  ];

  const backendSkills = [
    {
      name: 'NodeJS',
      level: 'Advanced',
    },
    {
      name: 'Express',
      level: 'Advanced',
    },
    {
      name: 'MongoDB',
      level: 'Advanced',
    },
    {
      name: 'JWT',
      level: 'Advanced',
    },
  ];

  const toolsSkills = [
    {
      name: 'Git',
      level: 'Advanced',
    },
    {
      name: 'Docker',
      level: 'Intermediate',
    },
    {
      name: 'Figma',
      level: 'Intermediate',
    },
  ];

// const levels: { [key: string]: string } = {
//   Expert: '100%',
//   Advanced: '90%',
//   Intermediate: '75%',
//   Basic: '50%',
//   Beginner: '30%',
//   Novice: '10%',
// };
const levelStars: { [key: string]: number } = {
  Expert: 5,
  Advanced: 4,
  Intermediate: 3,
  Basic: 2,
  Beginner: 1,
  Novice: 1,
};

function renderStars(count: number) {
  return (
    <span>
      {Array.from({ length: 5 }).map((_, i) => (
        <span key={i}>{i < count ? '★' : '☆'}</span>
      ))}
    </span>
  );
}

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

  return (
    <main className="w-full flex flex-col items-center justify-center min-h-screen bg-background text-foreground">
      {/* Header Section */}
      <section id="header" className="w-full min-h-screen flex items-center justify-center bg-gradient-to-br from-red-500 via-red-400 to-red-600 text-white shadow-xl ">
        <div className="max-w-3xl mx-auto flex flex-col items-center gap-6">
          <div className="text-xl md:text-9xl font-extrabold tracking-tight text-center leading-tight text-black">
            AndreiSNRQ<span>.</span>
          </div>
          <div className="text-xl md:text-xl mb-4 text-center">I am a Entry Level <b>Fullstack Developer</b> fresh graduate in <br /> <b>BS Information Technology</b> with a focus on building modern web experiences, performance, and usability.</div>
          <button onClick={() => scrollToSection('contact')} className="px-8 py-3 bg-red-600 text-black font-bold rounded-full shadow-black shadow-md hover:bg-gradient-to-br from-red-600 via-red-500 to-red-500 transition text-lg md:text-xl">Let's Connect</button>
        </div>
      </section>
      
      {/* Navigation Bar */}
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

      {/* Tech Stack Section */}
      <section id="tech" className="w-full py-20 max-w-5xl mx-auto mb-12">
        <div className="text-4xl font-extrabold text-red-600 mb-8 text-center">Technological Foundation</div>
        <div className="grid grid-cols-1 md:grid-cols-3 gap-8">
          <div className="bg-gradient-to-br from-red-500 via-red-400 to-red-600 rounded-2xl shadow-lg p-8 flex flex-col items-center w-full max-w-xs mx-auto md:max-w-none md:w-auto transition-all">
            <div className="text-2xl font-bold text-white mb-4">Frontend</div>
            <table className="w-full text-left border-collapse">
              <thead>
                <tr>
                  <th className="text-yellow-300">Tech</th>
                  <th className="text-yellow-300">Level</th>
                </tr>
              </thead>
              <tbody>
                {frontendSkills.map((skill) => (
                  <tr key={skill.name}>
                    <td className="font-semibold text-white">{skill.name}</td>
                    <td>{renderStars(levelStars[skill.level])}</td>
                  </tr>
                ))}
              </tbody>
            </table>
          </div>
          <div className="bg-gradient-to-br from-red-500 via-red-400 to-red-600 rounded-2xl shadow-lg p-8 flex flex-col items-center w-full max-w-xs mx-auto md:max-w-none md:w-auto transition-all">
            <div className="text-2xl font-bold text-white mb-4">Backend</div>
            <table className="w-full text-left border-collapse">
              <thead>
                <tr>
                  <th className="text-yellow-300">Tech</th>
                  <th className="text-yellow-300">Level</th>
                </tr>
              </thead>
              <tbody>
                {backendSkills.map((skill) => (
                  <tr key={skill.name}>
                    <td className="font-semibold text-white">{skill.name}</td>
                    <td>{renderStars(levelStars[skill.level])}</td>
                  </tr>
                ))}
              </tbody>
            </table>
          </div>
          <div className="bg-gradient-to-br from-red-500 via-red-400 to-red-600 rounded-2xl shadow-lg p-8 flex flex-col items-center w-full max-w-xs mx-auto md:max-w-none md:w-auto transition-all">
            <div className="text-2xl font-bold text-white mb-4">Tools</div>
            <table className="w-full text-left border-collapse">
              <thead>
                <tr>
                  <th className="text-yellow-300">Tool</th>
                  <th className="text-yellow-300">Level</th>
                </tr>
              </thead>
              <tbody>
                {toolsSkills.map((skill) => (
                  <tr key={skill.name}>
                    <td className="font-semibold text-white">{skill.name}</td>
                    <td>{renderStars(levelStars[skill.level])}</td>
                  </tr>
                ))}
              </tbody>
            </table>
          </div>
        </div>
      </section>

      {/* Skills Section */}
      <section id="skills" className="w-full py-20 max-w-5xl mx-auto mb-12">
        <div className="text-4xl font-extrabold text-red-600 mb-8 text-center">Beyond Just Coding</div>
        <div className="mb-2 text-lg text-red-700/70 text-center">I provide holistic web solutions, applying detail principles to both design and code architecture.</div>
        <div className="grid grid-cols-1 md:grid-cols-2 gap-8 mt-8">
          <div className="bg-white/80 p-8 rounded-2xl shadow-lg">
            <div className="font-semibold text-xl text-red-500 mb-2">Fullstack Web Development</div>
            <div className="text-md text-red-900">Building comprehensive web solutions. I handle everything from the database architecture to the pixel perfect frontend interface using the latest ecosystem.</div>
          </div>
          <div className="bg-white/80 p-8 rounded-2xl shadow-lg">
            <div className="font-semibold text-xl text-red-500 mb-2">UI Implementation</div>
            <div className="text-md text-red-900">Translating Figma designs into responsive, interactive code with Tailwind CSS.</div>
          </div>
          <div className="bg-white/80 p-8 rounded-2xl shadow-lg">
            <div className="font-semibold text-xl text-red-500 mb-2">Backend Engineering</div>
            <div className="text-md text-red-900">Robust API design, database modeling, SQL & NoSQL, and secure authentication systems.</div>
          </div>
          <div className="bg-white/80 p-8 rounded-2xl shadow-lg">
            <div className="font-semibold text-xl text-red-500 mb-2">Performance & SEO</div>
            <div className="text-md text-red-900">Optimizing Core Web Vitals, server-side caching, and technical SEO structure.</div>
          </div>
        </div>
      </section>

      {/* Portfolio/Projects Section */}
      <section id="portfolio" className="w-full py-20 max-w-5xl mx-auto mb-12">
        <div className="text-4xl font-extrabold text-red-600 mb-8 text-center">Featured Projects</div>
        <div className="grid grid-cols-1 md:grid-cols-2 gap-8 mt-8">
          <div className="bg-gradient-to-br from-red-500 via-red-400 to-red-600 p-8 rounded-2xl shadow-xl text-white">
            <div className="font-semibold text-2xl mb-2">NFT Marketplace</div>
            <div className="text-lg">A modern NFT marketplace built with Next.js and Tailwind CSS.</div>
          </div>
          <div className="bg-gradient-to-br from-red-500 via-red-400 to-red-600 p-8 rounded-2xl shadow-xl text-white">
            <div className="font-semibold text-2xl mb-2">Company Profile Website</div>
            <div className="text-lg">Corporate website with custom CMS and SEO optimization.</div>
          </div>
        </div>
      </section>

      {/* Experience Section */}
      <section id="experience" className="w-full py-20 max-w-5xl mx-auto mb-12">
        <div className="text-4xl font-extrabold text-red-600 mb-8 text-center">Professional Experience</div>
        <div className="grid grid-cols-1 md:grid-cols-2 gap-8 mt-8">
          <div className="bg-white/80 p-8 rounded-2xl shadow-lg">
            <div className="font-semibold text-2xl text-red-500 mb-2">Freelance Web Developer</div>
            <div className="text-lg text-red-900 mb-1">2020 - Present</div>
            <div className="text-md text-red-900">Building web solutions for clients in Indonesia and abroad.</div>
          </div>
          <div className="bg-white/80 p-8 rounded-2xl shadow-lg">
            <div className="font-semibold text-2xl text-red-500 mb-2">Digital Marketing Agency</div>
            <div className="text-lg text-red-900 mb-1">2018 - 2020</div>
            <div className="text-md text-red-900">Developed marketing platforms and analytics dashboards.</div>
          </div>
        </div>
      </section>

      {/* Certifications Section */}
      <section id="certifications" className="w-full py-20 max-w-5xl mx-auto mb-12">
        <div className="text-4xl font-extrabold text-red-600 mb-8 text-center">My Certifications</div>
        <div className="grid grid-cols-1 md:grid-cols-2 gap-8 mt-8">
          <div className="bg-white/80 p-8 rounded-2xl shadow-lg">
            <div className="font-semibold text-2xl text-red-500 mb-2">Certified Web Developer</div>
            <div className="text-lg text-red-900">Issued by XYZ Institute</div>
          </div>
          <div className="bg-white/80 p-8 rounded-2xl shadow-lg">
            <div className="font-semibold text-2xl text-red-500 mb-2">SEO Specialist</div>
            <div className="text-lg text-red-900">Issued by ABC Academy</div>
          </div>
        </div>
      </section>

      {/* Contact Section */}
      <section id="contact" className="w-full py-20 max-w-5xl mx-auto mb-12">
        <div className="text-4xl font-extrabold text-red-600 mb-8 text-center">Let's Work Together</div>
        <form className="bg-white/80 p-8 rounded-2xl shadow-lg flex flex-col gap-6 max-w-md mx-auto">
          <input type="text" placeholder="Your Name" className="px-4 py-3 rounded-full bg-white border border-red-200 focus:border-red-500 text-red-900 font-semibold" />
          <input type="email" placeholder="Your Email" className="px-4 py-3 rounded-full bg-white border border-red-200 focus:border-red-500 text-red-900 font-semibold" />
          <textarea placeholder="Your Message" className="px-4 py-3 rounded-2xl bg-white border border-red-200 focus:border-red-500 text-red-900 font-semibold" rows={4}></textarea>
          <button type="submit" className="bg-red-600 text-white px-8 py-3 rounded-full font-bold hover:bg-red-700 transition text-lg shadow-lg">Send Message</button>
        </form>
      </section>
    </main>
  );
}

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