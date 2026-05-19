/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./index.html",
    "./src/**/*.{js,ts,jsx,tsx}",
  ],
  theme: {
    extend: {
      colors: {
        bella: {
          nude: '#F5F0EB',
          rose: '#E3C0B7',
          terracotta: '#D48C70',
          white: '#FAFAF9',
          text: '#292524',
          subtext: '#57534E'
        }
      },
      fontFamily: {
        serif: ['Playfair Display', 'serif'],
        sans: ['Inter', 'sans-serif'],
      }
    },
  },
  plugins: [],
}
