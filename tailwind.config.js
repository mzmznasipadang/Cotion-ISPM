/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{html,js}"],
  theme: {
    extend: {
      colors: {
        'cobalt-blue': '#0047AB',
        'crimson-red': '#DC143C',
        'chrome-yellow': '#FFA700',
        'forest-green': '#228B22',
        'royal-purple': '#7851A9',
        'off-white': '#FAFAFA',
        'light-grey': '#D3D3D3',
        'medium-grey': '#A9A9A9',
        'charcoal': '#282828',
        'black': '#000000',
        'firebrick-red': '#B22222',
        'dark-orange': '#FF8C00',
        'dark-violet': '#9400D3',
      },
      backgroundImage: {
        'sky-gradient': 'linear-gradient(to right, #87CEEB, #87CEFA)',
        'sunset-gradient': 'linear-gradient(to right, #FF7F50, #FF6347)',
        'forest-gradient': 'linear-gradient(to right, #3CB371, #9ACD32)',
        'dusk-gradient': 'linear-gradient(to right, #9370DB, #D8BFD8)',
        'dawn-gradient': 'linear-gradient(to right, #FFD700, #FFDEAD)',
      }
    },
  },
  plugins: [],
}

