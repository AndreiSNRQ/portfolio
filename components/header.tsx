"use client"

import Link from "next/link"
import { Button } from "@/components/ui/button"
import { Download, Menu, X } from "lucide-react"
import { useState } from "react"
import { navItems, siteConfig } from "@/config/navigation"
import logo from "@/public/images/favicon.ico"

export function Header() {
  const [mobileMenuOpen, setMobileMenuOpen] = useState(false)
  const downloadResume = () => {
    // Replace with your actual resume URL
    const resumeUrl =  "/document/AndreiSNRQ.pdf";
    window.open(resumeUrl, "_blank")
  }
  return (
    <header className="fixed top-0 left-0 right-0 z-50 bg-background/30 backdrop-blur-md border-b border-border">
      <div className="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div className="flex h-16 items-center justify-between">
          {/* Logo */}
          <Link href="/" className="flex items-center gap-2">
            <img src="/images/favicon.ico" alt="Logo" className="h-6 w-6" />
            <span className="text-lg font-semibold text-foreground hidden sm:block">{siteConfig.logoLetter}</span>
          </Link>

          {/* Desktop Navigation - Center */}
          <nav className="hidden md:flex items-center gap-8">
            {navItems.map((item) => (
              <Link
                key={item.href}
                href={item.href}
                className="text-sm font-medium text-muted-foreground transition-colors hover:text-primary"
              >
                {item.label}
              </Link>
            ))}
          </nav>

          {/* Download Resume Button - Right */}
          <div className="flex items-center gap-4">
            <Button className="hidden sm:inline-flex" onClick={downloadResume}>
              <Download className="mr-2 h-4 w-4" />
              Download Resume
            </Button>
            <Button size="sm" className="sm:hidden">
              <Download className="h-4 w-4" />
            </Button>

            {/* Mobile Menu Button */}
            <Button
              variant="ghost"
              size="icon"
              className="md:hidden"
              onClick={() => setMobileMenuOpen(!mobileMenuOpen)}
            >
              {mobileMenuOpen ? <X className="h-5 w-5" /> : <Menu className="h-5 w-5" />}
            </Button>
          </div>
        </div>

        {/* Mobile Navigation */}
        {mobileMenuOpen && (
          <nav className="md:hidden py-4 border-t border-border">
            <div className="flex flex-col gap-4">
              {navItems.map((item) => (
                <Link
                  key={item.href}
                  href={item.href}
                  className="text-sm font-medium text-muted-foreground transition-colors hover:text-primary"
                  onClick={() => setMobileMenuOpen(false)}
                >
                  {item.label}
                </Link>
              ))}
            </div>
          </nav>
        )}
      </div>
    </header>
  )
}
