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
        'primary': '#DA8C00',
        'secondary': '#1B1B1B',
        'login-color': '#B8B8B8',
      },
      screens : {
      'sm': '640px',
      'md': '768px',
      'lg': '1024px',
      'xl': '1280px',
      '2xl' : '1536px'
      }
    },
  },
  plugins: [
    require('flowbite/plugin')
  ],
}

