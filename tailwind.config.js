/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "index.php",
    "./front/**/*.php",
    "./front/*.php",
  ],
  theme: {
    extend: {
      backgroundColor: {
        "noir-bleu": "#14151D",
      },
    },
  },
  plugins: [],
}

