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
      }
    },
  },
  plugins: [],
}