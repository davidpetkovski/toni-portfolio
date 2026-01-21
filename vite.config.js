import { defineConfig } from 'vite';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        tailwindcss(),
    ],
    // config related to build
    build: {
        outDir: 'dist',
        manifest: true,
        rollupOptions: {
            input: './src/css/app.css',
        },
    },
    server: {
        // strictPort: true,
        // port: 5173 
    }
});
