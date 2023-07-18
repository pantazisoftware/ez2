/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        body: "#334",
        accent: "#f96156",
        primary: "#082471",
      },
      dropShadow: {
        "3xl": "0 0 7px rgba(0, 0, 0, 0.10)",
      },
    },
  },
  plugins: [require("@tailwindcss/typography")],
};
