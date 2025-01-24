import path from 'path'

import { defineConfig } from "vite"

const ROOT = path.resolve('../../../');
const BASE = __dirname.replace(ROOT, '');

export default defineConfig({
    base: process.env.NODE_ENV === 'production' ? BASE + '/dist/' : BASE,
    build: {
        manifest: true,
        sourcemap: true,
        emptyOutDir: true,
        assetsDir: '.',
        outDir: 'dist/',
        rollupOptions: {
            input: [
                'src/js/main.js',
                'src/sass/main.scss'
            ],
            output: {
                entryFileNames: '[hash].js',
                assetFileNames: '[hash].[ext]'
            }
        },
        watch: {

        }
    },
    plugins: [
        {
            name: 'php',
            handleHotUpdate(){
                if ( file.endsWith('.php') ){
                    server.ws.send({ type: 'full-reload'});
                }
            }
        }
    ]
})