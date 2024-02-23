/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.css",
  ],
  theme: {
    extend: {},
    fontFamily: {
      'Montserrat': ['Montserrat', 'sans-serif']
    },
    backgroundColor: {
      'Default': '#1d1d20'
    }
  },
  plugins: [],
}

