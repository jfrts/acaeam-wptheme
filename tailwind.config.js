/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.php"],
  theme: {
    container: {
      center: true
    },
    fontSize: {
      'xs': ['12px', '16px'],
      'sm': ['14px', '18px'],
      'base': ['16px', '24px'],
      'lg': ['20px', '28px'],
      'xl': ['24px', '32px'],
      '2xl': ['32px', '40px'],
      '3xl': ['48px', '56px'],
      '4xl': ['56px', '64px'],
    },
    extend: {
      colors: {
        'primary-color': '#307000',
        'primary-color-tint': '#86d5a1',
        'primary-color-shade': '#03220d',
        'primary-off-white': '#effbf3',
        'black': '#010a04',
        'white': '#f9fffb',
        'grey-1': '#696c74',         
        'grey-2': '#91949D',         
        'grey-3': '#B1B4BD',         
      }
    },
  },
  plugins: [
    require('@tailwindcss/line-clamp')
  ],
}
