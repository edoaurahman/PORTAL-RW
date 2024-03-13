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
      'sans': ['Poppins','open Sans', 'ui-sans-serif', 'system-ui', '-apple-system', 'BlinkMacSystemFont', 'Segoe UI', 'Roboto', 'Helvetica Neue', 'Arial', 'Noto Sans', 'sans-serif'],
      'serif': ['Noto Serif', 'ui-serif'],
    },
    colors: {
      'ungu':'#640EF1',
      'black1':'#080C2E',
      'black2':'#5D5D7C',
    },
  },
  plugins: [
    require('flowbite/plugin')
  ],
}