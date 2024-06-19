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
        'primary': '#FFCE76',
        'btncolor': '#16697A',
        'color': '#FB8500',
        'secondary': '#212529',
        'login-color': '#B8B8B8',
      }
    },
  },
  plugins: [
    require('flowbite/plugin')
  ]
}

