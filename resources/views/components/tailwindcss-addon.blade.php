<script>
        tailwind.config = {
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
                        secondary: '#002c8f',
                        'gray-350': '#C6C6C7',
                        'gray-150': '#e9ecee',
                        'sky-150': '#EBF0FF'
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
        }
    </script>
    <style type="text/tailwindcss">
        @layer utilities {
            * {
                padding: 0;
                margin: 0;
                box-sizing: border-box;
                font-family: "GeneralSans-Variable", sans-serif;
            }

            .dropdownmenu li {
                position: relative;
                height: 100%;
                display: flex;
                align-items: center;
                padding: 0 20px;
            }

            .dropdownmenu a {
                display: block;
                text-align: center;
                text-decoration: none;
                transition: all 0.25s ease;
            }

            #submenu {
                /* border: 1px solid #e9ecee; */
                background-color: #fff;
                border-radius: 4px;
                left: 0;
                opacity: 0;
                position: absolute;
                top: 42px;
                visibility: hidden;
                z-index: 9999;
            }

            li:hover ul#submenu {
                opacity: 1;
                top: 35px;
                visibility: visible;
            }

            #submenu li {
                padding: 10px 20px;
            }

            #submenu li:hover {
                background-color: #f8f8f8;
            }

        }
    </style>
