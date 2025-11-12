import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import { globSync } from 'glob';

export default defineConfig({
    plugins: [
        laravel({
            input: ['public/assets/css/style.css', ...globSync('resources/js/**/*.js')],
            refresh: true,
        }),
    ],
});
