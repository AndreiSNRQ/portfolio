/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './app/**/*.{js,ts,jsx,tsx}',
    './pages/**/*.{js,ts,jsx,tsx}',
    './components/**/*.{js,ts,jsx,tsx}',
  ],
  theme: {
    extend: {
      colors: {
        background: '#0a0a0a',
        foreground: '#ededed',
        accent: '#22d3ee',
        primary: '#9333ea',
        secondary: '#10b981',
      },
      fontFamily: {
        sans: ['Geist', 'Arial', 'sans-serif'],
      },
    },
  },
  plugins: [],
};