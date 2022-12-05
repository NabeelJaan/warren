const theme = require('./theme.json');
const tailpress = require("@jeffreyvr/tailwindcss-tailpress");

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './*.php',
        './**/*.php',
        './resources/css/*.css',
        './resources/js/*.js',
        './safelist.txt'
    ],

    theme: {

        container: {
            padding: {
                DEFAULT: '1rem',
                sm: '2rem',
                lg: '0rem'
            },
        },
        
        extend: {
            textColor: {
                'orangeCrayola'   : '#ff6e33',
                'darkGrey'      : '#ff6d33',
                'isabelline'     : '#f0ebe5'
              },
              
              backgroundColor: {
                'orangeCrayola'   : '#ff6e33',
                'darkGrey'      : '#ff6d33',
                'isabelline'     : '#f0ebe5'
              },

              fontFamily: {
                'anekLatin': ['Anek Latin', 'sans-serif']
              },
        },

        screens: {
            'xxs' : '320px',
            'xs'  : '480px',
            'sm'  : '575px',
            'md'  : '768px',
            'lg'  : tailpress.theme('settings.layout.contentSize', theme),
            'xl'  : tailpress.theme('settings.layout.wideSize', theme),
            '2xl' : '1440px'
        }
    },

    plugins: [
        tailpress.tailwind
    ]
};
