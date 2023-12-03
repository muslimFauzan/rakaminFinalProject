/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./application/views/*.{html,js,php},",
    "./application/views/**/*.{html,js,php}"
],
  theme: {
    extend: {
      width: {
        '95': '380px',
      },
      fontSize : {
        'nr' : '24px',
      },
      height : {
        '78vh' : '78vh',
        '81' : '21rem'
      },
      colors : {
        'semiPurple' : '#d53668',
        'brown' : '#d99555'
      },
      boxShadow: {
        '3xl': '0 35px 60px -15px rgba(255, 255, 255, 0.7)',
      }
    },
  },
  plugins: [],
}

