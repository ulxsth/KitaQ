import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/user/reset.css',
                'resources/css/user/style_header.css',
                'resources/css/user/register.blade.css',
                'resources/js/user/header.js',
                'resources/js/user/register.js',
            ],
            refresh: true,
        }),
    ],
});
