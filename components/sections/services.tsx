import { Card, CardContent, CardDescription, CardHeader, CardTitle } from "@/components/ui/card"
import { Code2, Palette, Smartphone, Globe, Database, Zap } from "lucide-react"

const services = [
  {
    icon: Code2,
    title: "Web Development",
    description: "Building responsive and performant web applications using modern technologies like React, Next.js, and TypeScript.",
  },
  {
    icon: Palette,
    title: "UI/UX Design",
    description: "Creating intuitive and visually appealing user interfaces with a focus on user experience and accessibility.",
  },
  {
    icon: Smartphone,
    title: "Mobile Development",
    description: "Developing cross-platform mobile applications using React Native for iOS and Android platforms.",
  },
  {
    icon: Globe,
    title: "API Development",
    description: "Designing and implementing RESTful APIs and GraphQL endpoints for seamless data integration.",
  },
  {
    icon: Database,
    title: "Database Design",
    description: "Architecting efficient database schemas and optimizing queries for scalable applications.",
  },
  {
    icon: Zap,
    title: "Performance Optimization",
    description: "Improving application speed and efficiency through code optimization and best practices.",
  },
]

export function ServicesSection() {
  return (
    <section id="services" className="py-20 bg-secondary/30">
      <div className="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div className="text-center mb-16">
          <h2 className="text-3xl font-bold tracking-tight text-foreground sm:text-4xl">
            My <span className="text-primary">Services</span>
          </h2>
          <p className="mt-4 text-lg text-muted-foreground max-w-2xl mx-auto">
            I offer a wide range of services to help bring your ideas to life
          </p>
        </div>

        <div className="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
          {services.map((service, index) => {
            const Icon = service.icon
            return (
              <Card 
                key={index} 
                className="group hover:border-primary/50 transition-all duration-300 hover:shadow-lg hover:shadow-primary/5"
              >
                <CardHeader>
                  <div className="mb-4 inline-flex h-12 w-12 items-center justify-center rounded-lg bg-primary/10 text-primary group-hover:bg-primary group-hover:text-primary-foreground transition-colors">
                    <Icon className="h-6 w-6" />
                  </div>
                  <CardTitle className="text-xl">{service.title}</CardTitle>
                </CardHeader>
                <CardContent>
                  <CardDescription className="text-base">
                    {service.description}
                  </CardDescription>
                </CardContent>
              </Card>
            )
          })}
        </div>
      </div>
    </section>
  )
}
