/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {
      colors: {
        'primary': '#DA8C00',
        'secondary': '#1B1B1B',
        'login-color': '#B8B8B8',
      },
    },
  },
  plugins: [
    require('flowbite/plugin')
  ],
}

