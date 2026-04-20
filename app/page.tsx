import React from 'react';

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

  return (
    <main className="flex flex-col items-center justify-center min-h-screen px-4 py-8 bg-background text-foreground">
      {/* Header Section */}
      <section className="w-full max-w-4xl mb-12">
        <div className='grid grid-cols-5'>
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
      <section className="w-full max-w-4xl mb-12">
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
      <section className="w-full max-w-4xl mb-12">
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
      <section className="w-full max-w-4xl mb-12">
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
      <section className="w-full max-w-4xl mb-12">
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
      <section className="w-full max-w-4xl mb-12">
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
      <section className="w-full max-w-4xl mb-12">
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