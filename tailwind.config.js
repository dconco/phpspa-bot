/** @type {import('tailwindcss').Config} */
module.exports = {
   content: [
      "./src/**/*.php",
      "./public/**/*.{php,html,js}",
      "./**/*.php",
      "./src/components/*.php",
      "./src/pages/*.php",
      "./src/layout/*.php",
   ],
   theme: {
      extend: {},
   },
   plugins: [
      require('@tailwindcss/typography'),
   ],
}
