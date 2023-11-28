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
            backgroundImage: {
                'login': "url({{ asset('/assets/images/login-background.jpg') }})",
            },
            fontFamily: {
                sans: ['GeneralSans-Variable', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                //primary: '#00ccff',
                primary: {
                    "50": "#eff6ff", "100": "#dbeafe", "200": "#bfdbfe", "300": "#93c5fd", "400": "#60a5fa", "500": "#3b82f6", "600": "#2563eb", "700": "#1d4ed8", "800": "#1e40af", "900": "#1e3a8a", "950": "#172554"
                },
                secondary: '#002c8f',
                'gray-350': '#C6C6C7',
                'gray-150': '#e9ecee',
                'sky-150':'#EBF0FF'
                // ...
            },
            screens: {
                xs: "280px",
                xm: "570px",
                lx: "912px",
                xml: "420px",
            }
        },
    },

    plugins: [forms],
};
