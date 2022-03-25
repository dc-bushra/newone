module.exports = {
    content: ["./src/**/*.{html,js}" ,  "./resources/**/*.blade.php"],

    theme: {
      extend: {
        backgroundImage: theme => ({
          'hero-pattern': "url('../../imgs/topimg.jpg')",
          'red-circle': "url('../../imgs/redcircle.png')",
          'green-circle': "url('../../imgs/greencircle.png')",
          'yellow-circle': "url('../../imgs/yellowcircle.png')",
          'blackimg': "url('../../imgs/blackbg.png')",
          'blackbg': "url('../../imgs/sec2bg.png')",
          'footer-bg': "url('../../imgs/footerbg.png')",
      }),
      colors: {
          'primary-one': '#ea1d36', //red
          'primary-two': '#5aba47', //green
          'primary-three': '#f3cc1a', //yellow
      },
      keyframes: {
          wiggle: {
              '0%, 100%': { transform: 'rotate(-5deg)' },
              '50%': { transform: 'rotate(5deg)' },
          }
      },
      animation: {
          'bounce': 'bounce 1s infinite',
          'spin-slow': 'spin 7s linear infinite',
          'wiggle': 'wiggle 3s ease-in-out infinite',
          'wiggle-slow': 'wiggle 1s ease-in-out infinite',
      }

    },
    plugins: [],
  }
  }
