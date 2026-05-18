import { Header } from "@/components/header"
import { HeroSection } from "@/components/sections/hero"
import { ProjectsSection } from "@/components/sections/projects"
import { ServicesSection } from "@/components/sections/services"
import { ExperienceSection } from "@/components/sections/experience"
import { AboutSection } from "@/components/sections/about"
import { ContactSection } from "@/components/sections/contact"
import { Footer } from "@/components/footer"

export default function Page() {
  return (
    <div className="min-h-screen">
      <Header />
      <main>
        <HeroSection />
        <AboutSection />
        <ProjectsSection />
        <ServicesSection />
        <ExperienceSection />
        <ContactSection />
      </main>
      <Footer />
    </div>
  )
}
