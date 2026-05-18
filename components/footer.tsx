import Link from "next/link"
import { GithubIcon, LinkedinIcon, FacebookIcon } from "@/components/icons"
import { siteConfig } from "@/config/navigation"

export function Footer() {
  return (
    <footer className="py-12 bg-card border-t border-border">
      <div className="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div className="flex flex-col md:flex-row items-center justify-between gap-6">
          {/* Logo */}
          <div className="flex items-center gap-2">
            <span className="text-lg font-semibold text-foreground">{siteConfig.logoLetter}</span>
          </div>

          {/* Copyright */}
          <p className="text-sm text-muted-foreground">
            &copy; {new Date().getFullYear()} {siteConfig.name}. All rights reserved.
          </p>

          {/* Social Links */}
          <div className="flex items-center gap-4">
            <Link
              href={siteConfig.github}
              target="_blank"
              className="text-muted-foreground hover:text-primary transition-colors"
            >
              <GithubIcon className="h-5 w-5" />
            </Link>
            <Link
              href={siteConfig.linkedin}
              target="_blank"
              className="text-muted-foreground hover:text-primary transition-colors"
            >
              <LinkedinIcon className="h-5 w-5" />
            </Link>
            <Link
              href={siteConfig.facebook}
              target="_blank"
              className="text-muted-foreground hover:text-primary transition-colors"
            >
              <FacebookIcon className="h-5 w-5" />
            </Link>
          </div>
        </div>
      </div>
    </footer>
  )
}
