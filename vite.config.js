import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ["resources/css/app.css", "resources/js/app.js"],
            refresh: true,
        }),
    ],
    build: {
        cssCodeSplit: false,
        minify: false,
        target: "esnext", // or 'modules' or 'es2015'
    },
});
