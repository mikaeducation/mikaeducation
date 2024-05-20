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
        'greyd9' : '#D9D9D9',
        'blue6a' : '#6AA4D9'
      },
      fontFamily: {
        'futura': ['Futura', 'sans-serif'],
      }
    },
  },
  plugins: [],
}

