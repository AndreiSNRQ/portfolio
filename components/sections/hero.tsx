"use client"
import { Button } from "@/components/ui/button"
import { ChevronsDown } from "lucide-react"
import { GithubIcon, LinkedinIcon, FacebookIcon } from "@/components/icons"
import Link from "next/link"
import { siteConfig } from "@/config/navigation"

export function HeroSection() {

  const scrollToAbout = () => {
    const aboutSection = document.getElementById("about")
    if (aboutSection) {
      aboutSection.scrollIntoView({ behavior: "smooth" })
    }
  }

  return (
    <section id="home" className="relative min-h-screen flex items-center justify-center pt-16">
      {/* Decorative background */}
      <div className="absolute inset-0 overflow-hidden">
        <div className="absolute top-1/4 right-1/4 w-96 h-96 bg-primary/5 rounded-full blur-3xl" />
        <div className="absolute bottom-1/4 left-1/4 w-96 h-96 bg-primary/10 rounded-full blur-3xl" />
      </div>

      <div className="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 text-center">
        <div className="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-primary/10 text-primary text-sm font-medium mb-6">
          <span className="relative flex h-2 w-2">
            <span className="animate-ping absolute inline-flex h-full w-full rounded-full bg-primary opacity-75"></span>
            <span className="relative inline-flex rounded-full h-2 w-2 bg-primary"></span>
          </span>
          Available for freelance and full-time work
        </div>

        <h1 className="text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-bold text-foreground tracking-tight text-balance">
          Hi, I&apos;m{" "}
          <span className="text-primary">{siteConfig.name}</span>
        </h1>

        <p className="mt-6 text-lg sm:text-xl text-muted-foreground max-w-2xl mx-auto text-pretty">
          A passionate full-stack developer crafting beautiful, functional, and user-centered digital experiences.
        </p>

        <div className="mt-10 flex flex-col sm:flex-row items-center justify-center gap-4">
          <Button size="lg" asChild>
            <Link href="#projects">View My Work</Link>
          </Button>
          <Button size="lg" variant="outline" asChild>
            <Link href="#contact">Get In Touch</Link>
          </Button>
        </div>

        {/* Social Links */}
        <div className="mt-12 flex items-center justify-center gap-4">
          <Link
            href={siteConfig.github}
            target="_blank"
            className="p-3 rounded-full bg-secondary text-secondary-foreground hover:bg-primary hover:text-primary-foreground transition-colors"
          >
            <GithubIcon className="h-5 w-5" />
          </Link>
          <Link
            href={siteConfig.linkedin}
            target="_blank"
            className="p-3 rounded-full bg-secondary text-secondary-foreground hover:bg-primary hover:text-primary-foreground transition-colors"
          >
            <LinkedinIcon className="h-5 w-5" />
          </Link>
          <Link
            href={siteConfig.facebook}
            target="_blank"
            className="p-3 rounded-full bg-secondary text-secondary-foreground hover:bg-primary hover:text-primary-foreground transition-colors"
          >
            <FacebookIcon className="h-5 w-5" />
          </Link>
        </div>

        {/* Scroll indicator */}
        <div className="absolute -bottom-40 left-1/2 -translate-x-1/2 animate-bounce text-muted-foreground bg-secondary/30 p-3 rounded-full hover:bg-secondary transition-colors cursor-pointer" onClick={scrollToAbout}>
          <ChevronsDown className="h-6 w-6 text-muted-foreground" />
        </div>
      </div>
    </section>
  )
}