/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./*.php",        // Escanea archivos PHP en la raíz
    "./**/*.php",     // Escanea archivos PHP en subdirectorios
    "./*.html",       // Escanea archivos HTML en la raíz
    "./*.js",         // Escanea archivos JS en la raíz
    "./src/**/*.js",  // Escanea archivos JS en la carpeta src
    "!./node_modules", // Excluye node_modules
  ],
  theme: {
    extend: {
      fontFamily: {
        sans: ['Montserrat', 'sans-serif'],
      },
      screens: {
        'tablet': '640px',
        'laptop': '1024px',
        'desktop': '1280px',
        'extra-large': '1536px', // Pantallas extra grandes
      },
      backgroundImage: {
        'hero-pattern': "url('/img/hero-pattern.svg')",
        'footer-texture': "url('/img/footer-texture.png')",
      },
      


    },
  },
  plugins: [],
}
