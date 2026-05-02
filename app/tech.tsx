
export default function Tech() {

const frontendSkills = [
    {
        name: 'React',
        level: 'Expert',
    },
    {
        name: 'VueJS',
        level: 'Advanced',
    },
    {
        name: 'NextJS',
        level: 'Advanced',
    },
    {
        name: 'TypeScript',
        level: 'Advanced',
    },
    {
        name: 'Tailwind CSS',
        level: 'Advanced',
    },
    {
        name: 'Bootstrap',
        level: 'Intermediate',
    },
];

const backendSkills = [
    {
        name: 'NodeJS',
        level: 'Advanced',
    },
    {
        name: 'Express',
        level: 'Advanced',
    },
    {
        name: 'MongoDB',
        level: 'Advanced',
    },
    {
        name: 'JWT',
        level: 'Advanced',
    },
];

const toolsSkills = [
    {
        name: 'Git',
        level: 'Advanced',
    },
    {
        name: 'Docker',
        level: 'Intermediate',
    },
    {
        name: 'Figma',
        level: 'Intermediate',
    },
];

const levelStars: { [key: string]: number } = {
    Expert: 5,
    Advanced: 4,
    Intermediate: 3,
    Basic: 2,
    Beginner: 1,
    Novice: 1,
};
function renderStars(count: number) {
    return (
        <span>
        {Array.from({ length: 5 }).map((_, i) => (
            <span key={i}>{i < count ? '★' : '☆'}</span>
        ))}
        </span>
    );
}


  return (
    <div className="w-full flex flex-col items-center justify-center min-h-screen bg-background text-foreground px-4 py-12">
      <div className="text-4xl font-extrabold text-red-600 mb-8 text-center">
        <h2>Technological Foundation</h2>
      </div>
      <div className="grid grid-cols-1 md:grid-cols-3 gap-8">
        <div className="bg-gradient-to-br from-red-500 via-red-400 to-red-600 rounded-2xl shadow-lg p-8 flex flex-col items-center w-full max-w-xs mx-auto md:max-w-none md:w-auto transition-all">
          <div className="text-2xl font-bold text-white mb-4">
            <p>Frontend</p>
          </div>
          <table className="w-full text-left border-collapse">
            <thead>
              <tr>
                <th className="text-yellow-300">Tech</th>
                <th className="text-yellow-300">Level</th>
              </tr>
            </thead>
            <tbody>
              {frontendSkills.map((skill) => (
                <tr key={skill.name}>
                  <td className="font-semibold text-white">{skill.name}</td>
                  <td>{renderStars(levelStars[skill.level])}</td>
                </tr>
              ))}
            </tbody>
          </table>
        </div>
        <div className="bg-gradient-to-br from-red-500 via-red-400 to-red-600 rounded-2xl shadow-lg p-8 flex flex-col items-center w-full max-w-xs mx-auto md:max-w-none md:w-auto transition-all">
          <div className="text-2xl font-bold text-white mb-4">
            <p>Backend</p>
          </div>
          <table className="w-full text-left border-collapse">
            <thead>
              <tr>
                <th className="text-yellow-300">Tech</th>
                <th className="text-yellow-300">Level</th>
              </tr>
            </thead>
            <tbody>
              {backendSkills.map((skill) => (
                <tr key={skill.name}>
                  <td className="font-semibold text-white">{skill.name}</td>
                  <td>{renderStars(levelStars[skill.level])}</td>
                </tr>
              ))}
            </tbody>
          </table>
        </div>
        <div className="bg-gradient-to-br from-red-500 via-red-400 to-red-600 rounded-2xl shadow-lg p-8 flex flex-col items-center w-full max-w-xs mx-auto md:max-w-none md:w-auto transition-all">
          <div className="text-2xl font-bold text-white mb-4">
            <p>Tools</p>
          </div>
          <table className="w-full text-left border-collapse">
            <thead>
              <tr>
                <th className="text-yellow-300">Tool</th>
                <th className="text-yellow-300">Level</th>
              </tr>
            </thead>
            <tbody>
              {toolsSkills.map((skill) => (
                <tr key={skill.name}>
                  <td className="font-semibold text-white">{skill.name}</td>
                  <td>{renderStars(levelStars[skill.level])}</td>
                </tr>
              ))}
            </tbody>
          </table>
        </div>
      </div>
    </div>
  );
}