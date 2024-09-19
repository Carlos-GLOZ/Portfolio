import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css', 
                'resources/js/app.js',  
                'resources/js/bootstrap.js',
                'resources/js/language_selection.js',
                'resources/js/projects_menu.js',
            ],
            refresh: true,
        }),
    ],
});
