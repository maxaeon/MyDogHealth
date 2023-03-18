const colors = require('tailwindcss/colors')

module.exports = {
  purge: [],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      colors: {
        'lime': colors.blue,
        'green': colors.red
      }
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
