"use client"

import { Button } from "@/components/ui/button"
import { Card, CardContent } from "@/components/ui/card"
import { Badge } from "@/components/ui/badge"
import { ExternalLink } from "lucide-react"
import { GithubIcon } from "@/components/icons"
import Link from "next/link"
import { projects } from "@/config/navigation"
import { Carousel, CarouselContent, CarouselItem, CarouselNext, CarouselPrevious, } from "@/components/ui/carousel"
import Image from "next/image"
import Autoplay from "embla-carousel-autoplay"


export function ProjectsSection() {
  return (
    <section id="projects" className="py-24 lg:py-48 md:py-150 sm:py-150">
      <div className="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div className="text-center mb-16">
          <h2 className="text-3xl sm:text-4xl font-bold text-foreground">Featured Projects</h2>
          <div className="mt-4 h-1 w-20 bg-primary mx-auto rounded-full" />
          <p className="mt-4 text-lg text-muted-foreground max-w-2xl mx-auto">
            Here are some of my recent projects that showcase my skills and experience.
          </p>
        </div>

        <div className="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 gap-6">
          {projects.map((project) => (
            <Card
              key={project.title}
              className="group overflow-hidden border border-border hover:shadow-md shadow-primary/50 transition-colors"
            >
              {/* Project Image Placeholder */}
              {project.images && project.images.length > 0 ? (
                <Carousel
                  opts={{
                    loop: true,
                  }}
                  plugins={[
                    Autoplay({
                      delay: 3000, // 3 seconds
                    }),
                  ]}
                  className="w-full px-5"
                >
                  <CarouselContent>
                    {project.images.map((image, imgIndex) => (
                      <CarouselItem key={imgIndex}>
                        <div className="aspect-video flex items-center justify-center">
                          <Image
                            src={image}
                            alt={`${project.title} image ${imgIndex + 1}`}
                            width={500} // Adjust width as needed
                            height={300} // Adjust height as needed
                            className="object-cover w-full h-full rounded-md"
                          />
                        </div>
                      </CarouselItem>
                    ))}
                  </CarouselContent>
                  <CarouselPrevious />
                  <CarouselNext />
                </Carousel>
              ) : (
                <div className="aspect-video bg-gradient-to-br from-primary/10 to-primary/5 flex items-center justify-center ">
                  <span className="text-4xl font-bold text-primary/20">
                    {project.title.charAt(0)}
                  </span>
                </div>
              )}
              <CardContent className="p-6">
                <h3 className="text-xl font-semibold text-foreground group-hover:text-primary transition-colors">
                  {project.title}
                </h3>
                <p className="mt-2 text-muted-foreground">{project.description}</p>

                {/* Tags */}
                <div className="mt-4 flex flex-wrap gap-2">
                  {project.tags.map((tag) => (
                    <Badge key={tag} variant="secondary" className="text-xs">
                      {tag}
                    </Badge>
                  ))}
                </div>

                {/* Links */}
                <div className="mt-6 flex gap-3">
                  <Button variant="outline" size="sm" asChild>
                    <Link href={project.github} target="_blank">
                      <GithubIcon className="mr-2 h-4 w-4" />
                      Code
                    </Link>
                  </Button>
                  <Button size="sm" asChild>
                    <Link href={project.live} target="_blank">
                      <ExternalLink className="mr-2 h-4 w-4" />
                      Live Demo
                    </Link>
                  </Button>
                </div>
              </CardContent>
            </Card>
          ))}
        </div>
      </div>
    </section>
  )
}