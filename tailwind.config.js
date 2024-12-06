/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    './node_modules/taos/**/*.js',
  ],
  // safelist: [
  //   '!duration-[0ms]',
  //   '!delay-[0ms]',
  //   'html.js :where([class*="taos:"]:not(.taos-init))',
  // ],
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
      },
      keyframes: {
        slideInFromLeft: {
            '0%': { transform: 'translateX(-100%)', opacity: '0' },
            '100%': { transform: 'translateX(0)', opacity: '1' },
        },
        slideOutToLeft: {
            '0%': { transform: 'translateX(0)', opacity: '1' },
            '100%': { transform: 'translateX(-100%)', opacity: '0' },
        },
    },
    animation: {
        slideIn: 'slideInFromLeft 0.2s ease-out forwards',
        slideOut: 'slideOutToLeft 0.2s ease-out forwards',
    },
    },
  },
  plugins: [
    require('taos/plugin'),
    require('tailwind-scrollbar'),
  ],
}

