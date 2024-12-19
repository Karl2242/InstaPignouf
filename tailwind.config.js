/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["index.php", "./front/**/*.php", "./front/*.php"],
  theme: {
    extend: {
      backgroundColor: {
        "noir-bleu": "#14151D",
        "couleur-input": "#202131",
      },
      fontFamily: {
        jaro: ["Jaro", "serif"],
      },
    },
    screens: {
      sm: "400px",

      md: "640px",

      lg: "900px",

      xl: "1200px",

      "2xl": "1500px",
    },
  },
  plugins: [],
};
