import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import { viteStaticCopy } from 'vite-plugin-static-copy';
import vue from '@vitejs/plugin-vue';

export default defineConfig({
    plugins: [
        vue(),
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),

        viteStaticCopy({
            targets: [
                {
                    src: 'resources/assets/admin/css',
                    dest: 'admin'
                },
                {
                    src: 'resources/assets/admin/data',
                    dest: 'admin'
                },
                {
                    src: 'resources/assets/admin/fonts',
                    dest: 'admin'
                },
                {
                    src: 'resources/assets/admin/images',
                    dest: 'admin'
                },
                {
                    src: 'resources/assets/admin/js',
                    dest: 'admin'
                },
                {
                    src: 'resources/assets/client/images',
                    dest: 'client'
                },
            ]
        })
    ],
    resolve:{
        alias:{
            vue:'vue/dist/vue.esm-bundler.js',
        }
    },
    server: {
        host: '127.0.0.1',
        port: 5173,
        strictPort: true,
    },
});
