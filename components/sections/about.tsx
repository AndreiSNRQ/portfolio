import { Code2, Palette, Rocket } from "lucide-react"
import { start } from "node:repl"
import me from "@/public/images/me.jpeg"
import Image from "next/image"

const yearsOfExperience = new Date().getFullYear() - new Date("2024-06-01").getFullYear()

const highlights = [
  {
    icon: Code2,
    title: "Clean Code",
    description: "Writing maintainable, scalable code that stands the test of time.",
  },
  {
    icon: Palette,
    title: "Design Focused",
    description: "Creating visually appealing interfaces with great user experience.",
  },
  {
    icon: Rocket,
    title: "Performance",
    description: "Building fast, optimized applications that users love.",
  },
]

export function AboutSection() {
  return (
    <section id="about" className="py-24 bg-secondary/30 h-screen">
      <div className="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div className="text-center mb-16">
          <h2 className="text-3xl sm:text-4xl font-bold text-foreground">About Me</h2>
          <div className="mt-4 h-1 w-20 bg-primary mx-auto rounded-full" />
        </div>

        <div className="grid lg:grid-cols-2 gap-12 items-center">
          {/* Image/Avatar side */}
          <div className="relative">
            <div className="aspect-square max-w-md mx-auto  p-1 flex items-center justify-center p-6">
              <div className=" bg-card flex items-center justify-center">
                <Image className="object-cover border border-4 rounded-xl border-foreground hover:border-primary" src={me} alt="Andrei SNRQ" />
              </div>
            </div>
            {/* Experience badge */}
            <div className="absolute top-133 -right-4 lg:right-8 bg-primary text-primary-foreground px-3 py-1 rounded-xl shadow-lg">
              <span className="text-xl font-bold">{yearsOfExperience}</span>
              <span className="text-sm ml-1">Years Exp.</span>
            </div>
          </div>

          {/* Content side */}
          <div>
            <p className="text-lg text-muted-foreground leading-relaxed mb-6">
              I&apos;m a full-stack developer with a passion for creating elegant solutions to complex problems.
              With over {yearsOfExperience} years of experience, I specialize in building modern web applications using
              cutting-edge technologies.
            </p>
            <p className="text-lg text-muted-foreground leading-relaxed mb-8">
              When I&apos;m not coding, you can find me exploring new technologies, contributing to open-source
              projects, or sharing my knowledge through technical writing and mentoring.
            </p>

            {/* Highlights */}
            <div className="grid gap-4">
              {highlights.map((item) => (
                <div
                  key={item.title}
                  className="flex items-start gap-4 p-4 rounded-xl bg-card border border-border hover:bg-secondary/50 transition-colors"
                >
                  <div className="flex-shrink-0 w-12 h-12 rounded-lg bg-primary/10 flex items-center justify-center">
                    <item.icon className="h-6 w-6 text-primary" />
                  </div>
                  <div>
                    <h3 className="font-semibold text-foreground">{item.title}</h3>
                    <p className="text-sm text-muted-foreground">{item.description}</p>
                  </div>
                </div>
              ))}
            </div>
          </div>
        </div>
      </div>
    </section>
  )
}
