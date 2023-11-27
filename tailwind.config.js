/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    container : {
      center: true,
      padding : 'auto',
    },
    extend: {
      colors: {
        'primary': '#FF9826',
        'secondary': '#212529',
        'login-color': '#B8B8B8',
      },
      backgroundImage: { 'my-img': "url('img/imghome.png')"},
    },
  },
  plugins: [
    require('flowbite/plugin')
  ],
}

