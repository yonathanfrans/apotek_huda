import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
    build: {
        outDir: 'public/build',  // Menetapkan output folder ke public/build
        assetsDir: '',  // Menyimpan semua assets di direktori root public/build
    },
});