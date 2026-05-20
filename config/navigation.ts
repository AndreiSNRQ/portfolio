import { title } from "node:process"

export const navItems = [
  { label: "Home", href: "#home" },
  { label: "About", href: "#about" },
  { label: "Projects", href: "#projects" },
  { label: "Services", href: "#services" },
  { label: "Experience", href: "#experience" },
  { label: "Contact", href: "#contact" },
]

export const siteConfig = {
  name: "Andrei San Roque",
  logo: "/logo.png",
  logoAlt: "Andrei San Roque Logo",
  logoLetter: "AndreiSNRQ",
  title: "Creative Developer",
  description: "A passionate full-stack developer crafting beautiful, functional, and user-centered digital experiences.",
  resumeUrl: "/resume.pdf",
  github: "https://github.com/AndreiSNRQ",
  linkedin: "https://linkedin.com/in/andreisnrq",
  facebook: "https://facebook.com/AndreiSNRQ",
}

export const socialLinks = [
  { label: "GitHub", href: siteConfig.github },
  { label: "LinkedIn", href: siteConfig.linkedin },
  { label: "Facebook", href: siteConfig.facebook },
]

export const projects = [
  {
    title: "Inventory Management System",
    description: "Developed a web-based inventory management system to streamline stock tracking and reporting for a retail client.",
    tags: ["JavaScript", "HTML/CSS", "Laravel", "PHP", "MySQL", "Bootstrap"],
    github: "https://github.com",
    live: "https://example.com",
  },
  {
    title: "Training Management System",
    description: "Developed a web-based training management system to manage and track training programs for a retail client.",
    tags: ["JavaScript", "HTML/CSS", "React", "PostgreSQL", "TypeScript", "Node.js", "Tailwind CSS"],
    github: "https://github.com",
    live: "https://example.com",
  },
  {
    title: "Travel and Tours: Human Resource WorkforceOps",
    description: "Developed a full-stack web application to manage human resources for a travel and tour company, including attendance tracking, timesheet management, shift and schedule management, claims and reimbursement and leave management.",
    tags: ["JavaScript", "HTML/CSS", "React", "PostgreSQL", "TypeScript", "Node.js", "Tailwind CSS"],
    github: "https://github.com",
    live: "not deployed",
  },
  {
    title: "Travel and Tours: Human Resource WorkforceOps (Attendance Biometric Software)",
    description: "Developed a integrated attendance biometric software to track employee attendance and time for a travel and tour company.",
    tags: ["ZKTECO Biometric Device", "Java","MySQL"],
    github: "https://github.com/AndreiSNRQ/fingerprint/",
    live: "Local Software",
  },
  {
    title: "Hospital Management System: Human Resources 3",
    description: "Developed a full-stack web application to manage human resources for a hospital.",
    tags: ["JavaScript", "HTML/CSS", "React", "PostgreSQL", "TypeScript", "Node.js", "Tailwind CSS"], 
    github: "https://github.com/AndreiSNRQ/HR3/",
    live: "not deployed",
  },
  {
    title: "Ireklamo+ : Barangay Complaint and Blotter Management System",
    description: "Developed a full-stack web application to manage complaints and blotters in a barangay level.",
    tags: ["JavaScript", "HTML/CSS", "PHP", "MySQL", "HTML", "CSS", "Tailwind CSS"], 
    github: "https://github.com/AndreiSNRQ/iREKLAMO",
    live: "Not Deployed",
  },
  {
    title: "Portfolio",
    description: "Developed a personal portfolio website to showcase my work and share my skills.",
    tags: ["JavaScript", "HTML/CSS", "Next.js", "TypeScript", "Tailwind CSS"], 
    github: "https://github.com",
    live: "https://portfolio.andreisnrq.workers.dev/",
  }
]
