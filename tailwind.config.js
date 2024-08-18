/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.css",
  ],
  theme: {
    extend: {
      colors: {
        'Card': '#393E46',
        'Card-50': 'rgba(57, 62, 70, 0.50)'
      }
    },
    fontFamily: {
      'Montserrat': ['Montserrat', 'sans-serif'],
      'Roboto-Mono': ['Roboto mono', 'monospace']
    },
    // backgroundColor: {
    //   // 'Default': '#1d1d20',
    //   'Default': '#09080d',
    //   'Card': '#3d3e42',
    //   'CardHighlight': '#f0bf6c',
    // },
    backgroundColor: {
      'Default': '#222831',
      'Card': '#393E46',
      'CardHighlight': '#f0bf6c',
    },
  },
  plugins: [],
}

