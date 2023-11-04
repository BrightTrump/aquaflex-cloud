import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['GeneralSans-Variable', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                primary: '#00ccff',
                secondary: '#ecc94b',
                'gray-350': '#C6C6C7',
                'sky-150':'#EBF0FF'
                // ...
            }
        },
    },

    plugins: [forms],
};
