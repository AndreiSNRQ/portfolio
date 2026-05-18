import { Card, CardContent, CardDescription, CardHeader, CardTitle } from "@/components/ui/card"
import { Badge } from "@/components/ui/badge"
import { Briefcase, GraduationCap } from "lucide-react"
import { de } from "date-fns/locale"

const experiences = [
  {
    type: "Internship",
    title: "Fullstack Web Developer",
    company: "Massive Integrated Tech Solutions Inc.",
    period: "2025 - 2026",
    description: "Built responsive websites and collaborated with design teams to create engaging user experiences.",
    develop: [
      {
        title: "Inventory Management System",
        skills: ["JavaScript", "HTML/CSS", "Laravel", "PHP", "MySQL", "Bootstrap"],
        description: "Developed a web-based inventory management system to streamline stock tracking and reporting for a retail client.",
      },
      {
        title: "Training Management System",
        skills: ["JavaScript", "HTML/CSS", "React", "PostgreSQL", "TypeScript", "Node.js", "Tailwind CSS"],
        description: "Developed a web-based training management system to manage and track training programs for a retail client.",
      }
    ],
  },
  {
    type: "education",
    title: "Bachelor of Science in Information Technology",
    company: "Bestlink College of the Philippines",
    period: "2022 - 2026",
    description: "Graduated focusing on information management and web development.",
    develop: [
      {
        title: "Capstone Project: Travel and Tours: Human Resource WorkforceOps",
        duration: "2025 - 2026",

        description: "Developed a full-stack web application to manage human resources for a travel and tour company, including attendance tracking, timesheet management, shift and schedule management, claims and reimbursement and leave management.",
      },
      {
        title: "Capstone Project: Travel and Tours: Human Resource WorkforceOps (Attendance Biometric Software)",
        duration: "2025 - 2026", 
        technology: "ZKTECO Biometric Device",
        description: "Developed a integrated attendance biometric software to track employee attendance and time for a travel and tour company.",
      },
      {
        title: "Hospital Management System: Human Resources",
        duration: "2025",
        description: "Developed a full-stack web application to manage human resources for a hospital.",
      },
    ],
  },
]

export function ExperienceSection() {
  return (
    <section id="experience" className="py-20 bg-background">
      <div className="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div className="text-center mb-16">
          <h2 className="text-3xl font-bold tracking-tight text-foreground sm:text-4xl">
            My <span className="text-primary">Experience</span>
          </h2>
          <p className="mt-4 text-lg text-muted-foreground max-w-2xl mx-auto">
            A timeline of my professional journey and educational background
          </p>
        </div>

        <div className="relative">
          {/* Timeline line */}
          <div className="absolute left-4 md:left-1/2 top-0 bottom-0 w-0.5 bg-border md:-translate-x-0.5" />

          <div className="space-y-8">
            {experiences.map((exp, index) => (
              <div
                key={index}
                className={`relative flex flex-col md:flex-row gap-4 md:gap-8 ${
                  index % 2 === 0 ? "md:flex-row-reverse" : ""
                }`}
              >
                {/* Timeline dot */}
                <div className="absolute left-4 md:left-1/2 w-3 h-3 bg-primary rounded-full md:-translate-x-1.5 translate-y-6 ring-4 ring-background" />

                {/* Content */}
                <div className={`flex-1 ml-10 md:ml-0 ${index % 2 === 0 ? "md:pr-12" : "md:pl-12"}`}>
                  <Card className="hover:border-primary/50 transition-colors">
                    <CardHeader className="">
                      <div className="flex items-center gap-2 mb-2">
                        <div className="p-2 rounded-lg bg-primary/10 text-primary">
                          {exp.type === "Internship" ? (
                            <Briefcase className="h-4 w-4" />
                          ) : (
                            <GraduationCap className="h-4 w-4" />
                          )}
                        </div>
                        <span className="text-sm font-medium text-primary">{exp.period}</span>
                      </div>
                      <CardTitle className="text-xl">{exp.title}</CardTitle>
                      <CardDescription className="text-base font-medium">
                        {exp.company}
                        <p className="text-muted-foreground text-sm font-medium mt-2">{exp.description}</p>
                      </CardDescription>
                    </CardHeader>
                    <CardContent>
                      <h1 className="text-lg font-medium mb-2">Projects:</h1>
                      <div className="flex flex-wrap gap-2">
                        {exp.develop?.map((item) => (
                          <div key={item.title} className="flex flex-col gap-2">
                            <CardTitle className="text-md font-medium">{item.title} <br /><span className="text-sm font-medium text-primary bg-primary/10 px-2 rounded-full"> {item.duration}</span></CardTitle>
                            <CardDescription className="text-muted-foreground">
                              {item.description}
                              <br />
                            </CardDescription>
                            <br />
                          </div>
                        ))}
                      </div>
                    </CardContent>
                  </Card>
                </div>

                {/* Spacer for alternating layout */}
                <div className="hidden md:block flex-1" />
              </div>
            ))}
          </div>
        </div>
      </div>
    </section>
  )
}
