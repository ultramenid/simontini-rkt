/** @type {import('tailwindcss').Config} */
const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
      ],
  theme: {
    extend: {
        fontFamily: {
          'sans': ['Source Sans Pro', ...defaultTheme.fontFamily.sans],
          'notoserif' : ['Noto Serif']
        },
    },
  },
  plugins: [
    require('@tailwindcss/aspect-ratio'),
  ],
}
