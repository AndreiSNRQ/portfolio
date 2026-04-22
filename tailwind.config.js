/** @type {import('tailwindcss').Config} */
module.exports = {
  darkMode: 'class',
  content: [
    './app/**/*.{js,ts,jsx,tsx}',
    './pages/**/*.{js,ts,jsx,tsx}',
    './components/**/*.{js,ts,jsx,tsx}',
  ],
  theme: {
    extend: {
      colors: {
        background: '#fff1f1',      // light red background
        foreground: '#2d0a0a',     // dark red text
        accent: '#e53935',         // red accent
        primary: '#b71c1c',        // deep red
        secondary: '#ff5252',      // lighter red
      },
      fontFamily: {
        sans: ['Geist', 'Arial', 'sans-serif'],
      },
    },
  },
  plugins: [],
};