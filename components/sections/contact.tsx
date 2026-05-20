import { Button } from "@/components/ui/button"
import { Input } from "@/components/ui/input"
import { Textarea } from "@/components/ui/textarea"
import { Label } from "@/components/ui/label"
import { Mail, MapPin, Phone } from "lucide-react"

const contactInfo = [
  {
    icon: Mail,
    title: "Email",
    value: "sanroque.andrei.cambi@gmail.com",
    href: "mailto:sanroque.andrei.cambi@gmail.com",
  },
  {
    icon: Phone,
    title: "Phone",
    value: "+63 920 822 0625",
    href: "tel:+639208220625",
  },
  {
    icon: MapPin,
    title: "Location",
    value: "Valenzuela, Philippines",
    href: null,
  },
]

export function ContactSection() {

  return (
    <section id="contact" className="py-24">
      <div className="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div className="text-center mb-16">
          <h2 className="text-3xl sm:text-4xl font-bold text-foreground">Get In Touch</h2>
          <div className="mt-4 h-1 w-20 bg-primary mx-auto rounded-full" />
          <p className="mt-4 text-lg text-muted-foreground max-w-2xl mx-auto">
            Have a project in mind? Let's work together to create something amazing.
          </p>
        </div>

        <div className="grid grid-cols-1 lg:grid-cols-2 gap-12">
          {/* Contact Form */}
          <div className="bg-card border border-border rounded-2xl p-8">
            <form className="space-y-6">
              <div className="grid sm:grid-cols-2 gap-4">
                <div className="space-y-2">
                  <Label htmlFor="name">Name</Label>
                  <Input id="name" placeholder="Your name" />
                </div>
                <div className="space-y-2">
                  <Label htmlFor="email">Email</Label>
                  <Input id="email" type="email" placeholder="your@email.com" />
                </div>
              </div>
              <div className="space-y-2">
                <Label htmlFor="subject">Subject</Label>
                <Input id="subject" placeholder="What is this about?" />
              </div>
              <div className="space-y-2">
                <Label htmlFor="message">Message</Label>
                <Textarea
                  id="message"
                  placeholder="Tell me about your project..."
                  className="min-h-[150px] resize-none"
                />
              </div>
              <Button type="submit" className="w-full">
                Send Message
              </Button>
            </form>
          </div>

          {/* Contact Info */}
          <div className="flex flex-col justify-center">
            <div className="space-y-8">
              {contactInfo.map((item) => (
                <div key={item.title} className="flex items-start gap-4">
                  <div className="flex-shrink-0 w-12 h-12 rounded-xl bg-primary/10 flex items-center justify-center">
                    <item.icon className="h-6 w-6 text-primary" />
                  </div>
                  <div>
                    <h3 className="font-medium text-muted-foreground">{item.title}</h3>
                    {item.href ? (
                      <a
                        href={item.href}
                        className="text-lg font-semibold text-foreground hover:text-primary transition-colors"
                      >
                        {item.value}
                      </a>
                    ) : (
                      <p className="text-lg font-semibold text-foreground">{item.value}</p>
                    )}
                  </div>
                </div>
              ))}
            </div>

            {/* Additional CTA */}
            <div className="mt-12 p-6 rounded-2xl bg-primary/5 border border-primary/10">
              <h3 className="text-lg font-semibold text-foreground">Ready to start a project?</h3>
              <p className="mt-2 text-muted-foreground">
                I&apos;m currently available for freelance work. If you have a project that you want to get
                started, think you need my help with something, or just want to say hello, then get in touch.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
  )
}