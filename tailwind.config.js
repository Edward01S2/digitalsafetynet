const { colors } = require('tailwindcss/defaultTheme')

module.exports = {
  purge: {
    content: [
    './resources/**/**/*.php',
    './resources/**/*.php',
    './resources/**/**/*.js',
    './resources/**/*.js',
    ],
    options: {
      whitelist: ['italic', 'text-c-blue-300', 'md:hidden'],
    }
  },
  theme: {
    colors: {
      black: colors.black,
      white: colors.white,
      gray: colors.gray,
      red: colors.red,
      transparent: colors.transparent,
      current: colors.current,
    },
    extend: {
      colors: {
        'c-blue': {
          50: '#F4FAFA',
          100: '#0079A1',
          200: '#294071'
        },
        'c-orange' : {
          100: '#F6A75D',
        },
        'c-teal' : {
          100: '#00ABC0'
        }
      },
      fontFamily: {
        'open' : [
          'Open Sans', 
          'system-ui',
          '-apple-system',
          'BlinkMacSystemFont',
          '"Segoe UI"',
          'Roboto'
        ]
      },
      borderWidth: {
        '3': '3px'
      },
      fontSize: {
        '6.5xl': '5rem',
        '7xl': '6rem',
        '8xl': '7rem',
        '9xl': '10rem',
      },
      maxWidth: {
        '384': '384px',
        '426': '426.667px',
        '512': '512px',
        '533': '533.333px',
        '2/3': '682.67px',
        '720': '720px',
      },
      spacing: {
        '2px': '2px',
        '3px': '3px',
        '18': '4.5rem',
        '44' : '11rem',
        '80' : '22rem',
        '84': '26rem',
        '100': '28rem',
        '104': '30rem',
        '108' : '32rem',
        '112' : '36rem',
        '116' : '38rem',
        '120' : '42rem',
      },
      opacity: {
        '31': '0.31',
        '90': '0.9',
      },
      screens: {
        // '2xl' : '1450px',
        // '3xl' : '1625px'
      },
      boxShadow: {
      },
      transformOrigin: {
        '100' : '100% 0',
      }
    },
    typography: (theme) => ({
      default: {
        css: {
          color: theme('colors.c-blue.200'),
          strong: {
            color: theme('colors.c-blue.200'),
          },
          'ul > li:before': {
            backgroundColor: theme('colors.c-orange.100'),
          },
          'h1, h2, h3, h4, h5' : {
            color: theme('colors.c-blue.200'),
          }
        }
      }
    })
  },
  variants: {
    scale: ['responsive', 'hover', 'focus', 'group-hover'],
    display: ['responsive', 'hover', 'group-hover'],
  },
  plugins: [
    require('@tailwindcss/ui'),
    require('@tailwindcss/typography'),
  ],
  experimental: 'all',
}
