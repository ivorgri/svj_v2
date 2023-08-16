/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./packages/svj/svj_theme/**/*.{php,html,js}"],
  theme: {
    extend: {
      fontFamily: {
        'revicons': ['revicons'],
        'lato': ['Lato'],
        'logo': ['"Oooh Baby"'],
      },
      colors: {
        'svj-green': '#37b048',
        'svj-yellow': '#edeae1',
        'svj-primary': '#6096B4',
        'svj-secondary': '#93BFCF',
        'svj-tertiary': '#BDCDD6',
        'svj-quaternary': '#EEE9DA'
      },
      boxShadow: {
        '3xl': '0 8px 6px -6px rgba(0, 0, 0, 0.1)',
      },
      maxWidth: {
        '3/4': '75%',
      },
      spacing: {
        '128': '32rem',
        '30': '7.5rem',
        'header': '7.5rem',
        'slider': 'calc(100vh - 7.5rem)',
        'mobile-header': '5rem',
        'mobile-slider': 'calc(100vh - 5rem)'
      },
      scrollMargin: {
        '30': '7.5rem',
        'header': '10rem',
        'mobile-header': '5.5rem'
      },
      gridTemplateRows: {
        '12': 'repeat(12, minmax(0, 1fr))',
      },
      gridRowEnd: {
        '11': '11',
        '13': '13',
      },
      rotate: {
        '270': '270deg'
      }
    }
  },
  plugins: [require("daisyui")],
}
