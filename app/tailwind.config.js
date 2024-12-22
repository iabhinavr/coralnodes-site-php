/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./public/**/*.{php, js}"
  ],
  theme: {
    extend: {
      colors: {
        brand: {
          coral: "#f84537",
          lightcoral: "#F66750",
          yellow: "#ffc46b"
        }
      },
      fontFamily: {
        inter: ['inter', 'sans-serif'],
        ubuntumono: ['ubuntu-mono', 'mono']
      }
    },
  },
  plugins: [],
}

