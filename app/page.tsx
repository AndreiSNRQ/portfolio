import React from 'react';

export default function Home() {
  return (
    <main className="flex flex-col items-center justify-center min-h-screen px-4 py-8 bg-background text-foreground">
      {/* Header Section */}
      <section className="w-full max-w-4xl text-center mb-12">
        <div className="text-4xl md:text-6xl font-bold mb-4">
          Hi, I'm <span className="text-accent">Djembar</span>.
        </div>
        <div className="text-lg md:text-xl mb-6">
          A <span className="text-primary font-semibold">Fullstack Web Developer</span> based in Indonesia. I craft accessible, pixel-perfect, and performant web experiences using modern technologies.
        </div>
        <div className="flex justify-center gap-4 mb-6">
          <button className="bg-accent text-background px-6 py-2 rounded font-semibold hover:bg-secondary transition">Contact Me</button>
          <a href="/cv.pdf" download className="border border-accent text-accent px-6 py-2 rounded font-semibold hover:bg-accent hover:text-background transition">Download CV</a>
        </div>
      </section>

      {/* Tech Stack Section */}
      <section className="w-full max-w-4xl mb-12">
        <div className="text-2xl font-bold mb-4">Technological Foundation</div>
        <div className="mb-2 text-sm text-foreground/70">The modern tools I use to bring products to life.</div>
        <div className="flex flex-wrap gap-3 justify-center mt-4">
          {/* Example tech icons, replace with actual icons as needed */}
          <span className="bg-foreground/10 px-4 py-2 rounded">React</span>
          <span className="bg-foreground/10 px-4 py-2 rounded">VueJS</span>
          <span className="bg-foreground/10 px-4 py-2 rounded">NextJS</span>
          <span className="bg-foreground/10 px-4 py-2 rounded">TypeScript</span>
          <span className="bg-foreground/10 px-4 py-2 rounded">Tailwind CSS</span>
          <span className="bg-foreground/10 px-4 py-2 rounded">NodeJS</span>
          <span className="bg-foreground/10 px-4 py-2 rounded">Express</span>
          <span className="bg-foreground/10 px-4 py-2 rounded">Golang</span>
          <span className="bg-foreground/10 px-4 py-2 rounded">PHP</span>
          <span className="bg-foreground/10 px-4 py-2 rounded">Laravel</span>
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