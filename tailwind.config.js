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
      'sans': ['open Sans', 'ui-sans-serif', 'system-ui', '-apple-system', 'BlinkMacSystemFont', 'Segoe UI', 'Roboto', 'Helvetica Neue', 'Arial', 'Noto Sans', 'sans-serif'],
      'serif': ['Noto Serif', 'ui-serif'],
    },
    colors: {
      'chocolate': '#e6bc73',
      'chocolate-light': '#ffc801',
      'black1': '#222222',
      'black2': '#666666',
    },
  },
  plugins: [
    require('flowbite/plugin')
  ],
}