module.exports = {
  purge: [],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      fontFamily:{
        body:['Nerko One']
      }
    },
  },
  variants: {
    extend: {

      animation: ['hover'],
      display: ['responsive', 'group-hover', 'group-focus']
    },
  },
  plugins: [],
}
