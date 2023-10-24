import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue'

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/scss/style_front.scss',
                'resources/scss/style_manager.scss',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
        vue(),
    ],
});
