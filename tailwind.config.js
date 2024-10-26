/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        'main-color': '#30533E',
        'second-color': '#9CDBA6',
      }
    },
  },
  plugins: [],
}