"use client";
import React, { useState, useEffect } from 'react';
import Home from './home';
import Tech from './tech';
import Project from './project';
import Nav from './Nav';

export default function MainPage() {

// const levels: { [key: string]: string } = {
//   Expert: '100%',
//   Advanced: '90%',
//   Intermediate: '75%',
//   Basic: '50%',
//   Beginner: '30%',
//   Novice: '10%',
// };

const scrollToSection = (sectionId: string) => {
  const section = document.getElementById(sectionId);
  if (section) {
    section.scrollIntoView({ behavior: "smooth" });
  }
};



  return (
    <main className="w-full flex flex-col items-center justify-center min-h-screen bg-background text-foreground">
      
      {/* Home Section */}
      <section id="header" className="w-full min-h-screen flex items-center justify-center bg-gradient-to-br from-red-500 via-red-400 to-red-600 text-white shadow-xl ">
        <Home />
      </section>
      
      {/* Navigation Bar */}
      <Nav />

      {/* Tech Stack Section */}
      <section id="tech" className="w-full flex flex-col h-screen items-center justify-center max-w-5xl mx-auto">
        <Tech />
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
      <section id="projects" className="w-full h-screen">
        <Project />
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