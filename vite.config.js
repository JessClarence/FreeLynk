import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
  plugins: [
    laravel({
      input: [
        'resources/sass/app.scss',
        'resources/js/app.js',
      ],
      refresh: true,
    }),
  ],
  build: {
    assetsDir: 'assets',  // Specify where to place assets like images, fonts, etc.
  },
  publicDir: 'resources/img',  // Include your images directory here for static files
});
