const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        fontFamily: {
            'sans' : ['Roboto', 'sans-serif']
        },
        extend: {
            backgroundColor: {
                'primary': '#your-primary-color',
                'secondary': '#75A8A5',
                'orange': '#F77B6E',
                'light': '#FDF7E9'
              },
              textColor: {
                'primary': '#000',
                'secondary': '#75A8A5',
                'light': '#FDF7E9',
                'orange': '#F77B6E',
              },
              borderColor: {
                'primary': '#your-primary-color',
                'secondary': '#your-secondary-color',
              },
            fontFamily: {
                'amatic': ['"Amatic SC"', 'cursive']
            },
            backgroundImage: {
                'home-image': "url(../../public/images/hero-image.png)"
            }
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
