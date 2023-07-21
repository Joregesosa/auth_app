/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./public/**/*.{html,js,php}",
    "./components/**/*.{html,js,php}"],
  theme: {
    extend: {
      gridTemplateColumns: {
        // Simple 16 column grid
        '1/3': '1fr 3fr',

      }
    },
  },
  plugins: [],
}

