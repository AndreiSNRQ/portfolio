export default function Home() {

    
  return (
    <div className="max-w-3xl mx-auto flex flex-col items-center gap-6">
        <div className="text-xl md:text-9xl font-extrabold tracking-tight text-center leading-tight text-black">
            <h1>AndreiSNRQ.</h1>
        </div>
        <div className="text-xl md:text-xl mb-4 text-center">
            <p>
                I am a Entry Level <b>Fullstack Developer</b> fresh graduate in <br /> <b>BS Information Technology</b> with a focus on building modern web experiences, performance, and usability.
            </p>
        </div>
        <button onClick={() => scrollToSection('contact')} className="px-8 py-3 bg-red-600 text-black font-bold rounded-full shadow-black shadow-md hover:bg-gradient-to-br from-red-600 via-red-500 to-red-500 transition text-lg md:text-xl">Let's Connect</button>
    </div>
  );

  function scrollToSection(sectionId: string) {
        const section = document.getElementById(sectionId);
        if (section) {
        section.scrollIntoView({ behavior: "smooth" });
        }
    }
}