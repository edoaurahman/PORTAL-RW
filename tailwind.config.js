/** @type {import('tailwindcss').Config} */
export default {
  darkMode: 'class',
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {
    },
    fontFamily: {
      'sans': ['ui-serif', 'Georgia'],
      'serif': ['Noto Serif', 'poppins'],
    },
    colors: {
      'chocolate': '#e6bc73',
      'black': '#222222',
    },
  },
  plugins: [
    require('flowbite/plugin')
  ],
}