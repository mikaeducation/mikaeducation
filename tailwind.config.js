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
        'bluee3' : '#E3F5FF',
        'blue6a' : '#6AA4D9',
        'blue31' : '#31587C',
        'pinkee' : '#EE97C0'
      },
      fontFamily: {
        'futura': ['Futura', 'sans-serif'],
      }
    },
  },
  plugins: [],
}

