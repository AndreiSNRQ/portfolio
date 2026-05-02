
import { ChevronsDown } from "lucide-react";

export default function Home() {
    
  return (
    <div className="max-w-5xl mx-auto min-h-full flex flex-col items-center justify-center gap-4 px-2 sm:px-4 md:px-8 xl:px-16">
        <div className="text-xl md:text-9xl font-extrabold tracking-tight text-center leading-tight text-black">
            <h1>AndreiSNRQ.</h1>
        </div>
        <div className="text-xl md:text-xl mb-4 text-center">
            <p>
                I am a Entry Level <b>Fullstack Developer</b> fresh graduate in <br /> <b>BS Information Technology</b> with a focus on building modern web experiences, performance, and usability.
            </p>
        </div>
        <div className="flex flex-col justify-between items-center gap-4 w-full h-full">
            <button onClick={() => scrollToSection('contact')} className="px-8 py-3 bg-red-600 text-black font-bold rounded-full shadow-black shadow-md hover:bg-gradient-to-br from-red-600 via-red-500 to-red-500 transition text-lg md:text-xl">Let's Connect</button>
            <button onClick={() => scrollToSection('tech')} className="sticky bottom-0 px-8 py-3 text-accent font-bold text-lg md:text-xl flex flex-col justify-between items-center hover:text-black/50 transition">Scroll
                <ChevronsDown className="animate-bounce mt-1 transition transform" />
            </button>
        </div>
    </div>
  );

  function scrollToSection(sectionId: string) {
        const section = document.getElementById(sectionId);
        if (section) {
        section.scrollIntoView({ behavior: "smooth" });
        }
    }
}