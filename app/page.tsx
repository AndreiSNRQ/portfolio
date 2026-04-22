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

  function scrollToSection(id: string) {
    const section = document.getElementById(id);
    if (section) {
      section.scrollIntoView({ behavior: 'smooth' });
    }
  }

  return (
    <main className="w-full flex flex-col items-center justify-center min-h-screen bg-background text-foreground">
      {/* Navigation Bar */}
      <nav className="w-full flex items-center justify-between py-4 px-8 mb-8 bg-red-500/10 backdrop-blur sticky top-0 z-50 border-b border-foreground/10">
        {/* Logo */}
        <div className="flex items-center gap-5">
          <img src="/assets/favicon.ico" alt="Logo" className="w-8 h-8" />
          <span className="font-bold text-xl">Portfolio</span>
        </div>
        {/* Navigation Links */}
        <div className="flex">
          {NAV_ITEMS.map(item => (
            <button
              key={item.id}
              onClick={() => scrollToSection(item.id)}
              className="px-3 py-2 rounded font-semibold text-foreground hover:bg-background hover:text-red-500 transition"
            >
              {item.label}
            </button>
          ))}
        </div>
        {/* Theme Toggler */}
        <div>
          <ThemeToggler />
        </div>
      </nav>
      {/* Header Section */}
      <section className="w-full h-screen pb-5 px-7" id="header">
        <div className='grid grid-cols-5 bg-red-500/10 p-6 h-full rounded shadow shadow-md gap-6 items-center'>
          <div className='flex flex-col col-span-3 gap-4 justify-center'>
            <div className='text-5xl font-bold mb-4' >
              Hi, I'm <br />
              <span>AndreiSNRQ.</span>
            </div>
            <div>
              <p>I'm a passionate <b>fullstack web developer</b> with a keen eye for design and a love for creating seamless user experiences.</p>
            </div>
          </div>
          <div className='col-start-4 col-span-2 flex items-center justify-center'>
            <div>
              <img src="/assets/me.jpeg" alt="Andrei San Roque" className='w-64 h-64 rounded-md border-2 border-red-500' />
            </div>
          </div>
        </div>
      </section>

      {/* Tech Stack Section */}
      <section id="tech" className="w-full h-screen pt-20 max-w-4xl mb-12">
        <div className="text-2xl font-bold mb-4">Technological Foundation</div>
        <div className='grid grid-cols-3 gap-3'>
          <div>
            <table className="w-full text-left border-collapse">
              <thead>
                <tr>
                  <th>Frontend</th>
                  <th>Level</th>
                </tr>
              </thead>
              <tbody>
                {frontendSkills.map((skill) => (
                  <tr key={skill.name}>
                    <td>{skill.name}</td>
                    <td>{renderStars(levelStars[skill.level])}</td>
                  </tr>
                ))}
              </tbody>
            </table>
          </div>
          <div>
            <table className='w-full text-center'>
              <thead>
                <tr>
                  <th>Backend</th>
                  <th>Level</th>
                </tr>
              </thead>
              <tbody>
                {backendSkills.map((skill) => (
                  <tr key={skill.name}>
                    <td>{skill.name}</td>
                    <td>{renderStars(levelStars[skill.level])}</td>
                  </tr>
                ))}
              </tbody>
            </table>
          </div>
          <div>
            <table className='w-full text-center'>
              <thead>
                <tr>
                  <th>Tools</th>
                  <th>Level</th>
                </tr>
              </thead>
              <tbody>
                {toolsSkills.map((skill) => (
                  <tr key={skill.name}>
                    <td>{skill.name}</td>
                    <td>{renderStars(levelStars[skill.level])}</td>
                  </tr>
                ))}
              </tbody>
            </table>
          </div>
        </div>
      </section>

      {/* Skills Section */}
      <section id="skills" className="w-full h-screen pt-20 max-w-4xl mb-12">
        <div className="text-2xl font-bold mb-4">Beyond Just Coding</div>
        <div className="mb-2 text-sm text-foreground/70">I provide holistic web solutions, applying detail principles to both design and code architecture.</div>
        <div className="grid grid-cols-1 md:grid-cols-2 gap-6 mt-4">
          <div className="bg-foreground/10 p-6 rounded shadow">
            <div className="font-semibold text-lg mb-2">Fullstack Web Development</div>
            <div className="text-sm">Building comprehensive web solutions. I handle everything from the database architecture to the pixel perfect frontend interface using the latest ecosystem.</div>
          </div>
          <div className="bg-foreground/10 p-6 rounded shadow">
            <div className="font-semibold text-lg mb-2">UI Implementation</div>
            <div className="text-sm">Translating Figma designs into responsive, interactive code with Tailwind CSS.</div>
          </div>
          <div className="bg-foreground/10 p-6 rounded shadow">
            <div className="font-semibold text-lg mb-2">Backend Engineering</div>
            <div className="text-sm">Robust API design, database modeling, SQL & NoSQL, and secure authentication systems.</div>
          </div>
          <div className="bg-foreground/10 p-6 rounded shadow">
            <div className="font-semibold text-lg mb-2">Performance & SEO</div>
            <div className="text-sm">Optimizing Core Web Vitals, server-side caching, and technical SEO structure.</div>
          </div>
        </div>
      </section>

      {/* Portfolio/Projects Section */}
      <section id="portfolio" className="w-full h-screen pt-20 max-w-4xl mb-12">
        <div className="text-2xl font-bold mb-4">Featured Projects</div>
        <div className="grid grid-cols-1 md:grid-cols-2 gap-6 mt-4">
          {/* Example project cards */}
          <div className="bg-foreground/10 p-6 rounded shadow">
            <div className="font-semibold text-lg mb-2">NFT Marketplace</div>
            <div className="text-sm">A modern NFT marketplace built with Next.js and Tailwind CSS.</div>
          </div>
          <div className="bg-foreground/10 p-6 rounded shadow">
            <div className="font-semibold text-lg mb-2">Company Profile Website</div>
            <div className="text-sm">Corporate website with custom CMS and SEO optimization.</div>
          </div>
        </div>
      </section>

      {/* Experience Section */}
      <section id="experience" className="w-full h-screen pt-20 max-w-4xl mb-12">
        <div className="text-2xl font-bold mb-4">Professional Experience</div>
        <div className="grid grid-cols-1 md:grid-cols-2 gap-6 mt-4">
          <div className="bg-foreground/10 p-6 rounded shadow">
            <div className="font-semibold text-lg mb-2">Freelance Web Developer</div>
            <div className="text-sm">2020 - Present</div>
            <div className="text-sm">Building web solutions for clients in Indonesia and abroad.</div>
          </div>
          <div className="bg-foreground/10 p-6 rounded shadow">
            <div className="font-semibold text-lg mb-2">Digital Marketing Agency</div>
            <div className="text-sm">2018 - 2020</div>
            <div className="text-sm">Developed marketing platforms and analytics dashboards.</div>
          </div>
        </div>
      </section>

      {/* Certifications Section */}
      <section id="certifications" className="w-full h-screen pt-20 max-w-4xl mb-12">
        <div className="text-2xl font-bold mb-4">My Certifications</div>
        <div className="grid grid-cols-1 md:grid-cols-2 gap-6 mt-4">
          <div className="bg-foreground/10 p-6 rounded shadow">
            <div className="font-semibold text-lg mb-2">Certified Web Developer</div>
            <div className="text-sm">Issued by XYZ Institute</div>
          </div>
          <div className="bg-foreground/10 p-6 rounded shadow">
            <div className="font-semibold text-lg mb-2">SEO Specialist</div>
            <div className="text-sm">Issued by ABC Academy</div>
          </div>
        </div>
      </section>

      {/* Contact Section */}
      <section id="contact" className="w-full h-screen pt-20 max-w-4xl mb-12">
        <div className="text-2xl font-bold mb-4">Let's Work Together</div>
        <form className="bg-foreground/10 p-6 rounded shadow flex flex-col gap-4 max-w-md mx-auto">
          <input type="text" placeholder="Your Name" className="px-4 py-2 rounded bg-background border border-foreground/20 focus:border-accent" />
          <input type="email" placeholder="Your Email" className="px-4 py-2 rounded bg-background border border-foreground/20 focus:border-accent" />
          <textarea placeholder="Your Message" className="px-4 py-2 rounded bg-background border border-foreground/20 focus:border-accent" rows={4}></textarea>
          <button type="submit" className="bg-accent text-background px-6 py-2 rounded font-semibold hover:bg-secondary transition">Send Message</button>
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
      className="ml-auto flex items-center gap-2 px-4 py-2 bg-accent text-foreground rounded-lg shadow hover:bg-primary transition"
      onClick={() => setDark((prev) => !prev)}
      aria-label="Toggle theme"
    >
      {dark ? (
        <svg width="24" height="24" fill="none" stroke="currentColor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round" className="feather feather-sun"><circle cx="12" cy="12" r="5"></circle><line x1="12" y1="1" x2="12" y2="3"></line><line x1="12" y1="21" x2="12" y2="23"></line><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line><line x1="1" y1="12" x2="3" y2="12"></line><line x1="21" y1="12" x2="23" y2="12"></line><line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line><line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line></svg>
      ) : (
        <svg width="24" height="24" fill="none" stroke="currentColor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round" className="feather feather-moon"><path d="M21 12.79A9 9 0 0112.21 3c-4.97 0-9 4.03-9 9s4.03 9 9 9c4.97 0 9-4.03 9-9z"></path></svg>
        
      )}
      <span>{dark ? "Light" : "Dark"}</span>
    </button>
  );
}