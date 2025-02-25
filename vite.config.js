import { defineConfig } from 'vite';
import path from 'path';
import autoprefixer from 'autoprefixer';
import stylelint from 'vite-plugin-stylelint';
import postcssImport from 'postcss-import';
import { viteStaticCopy } from 'vite-plugin-static-copy';

export default defineConfig({
  root: path.resolve(__dirname, 'source'), // Source files for developing
  plugins: [
    stylelint({ fix: true }), // Add stylelint: autocorrect errors
    viteStaticCopy({
      targets: [
        {
          src: path.resolve(__dirname, 'source/favicon'),
          dest: path.resolve(__dirname, 'wordpress/wp-content/themes/setplex'),
        },
        {
          src: path.resolve(__dirname, 'source/img/*'),
          dest: path.resolve(__dirname, 'wordpress/wp-content/themes/setplex/img'),
        },
      ]
    })
  ],
  css: {
    postcss: {
      plugins: [
        postcssImport(),
        autoprefixer(),
      ],
    },
  },
  build: {
    outDir: path.resolve(__dirname, 'wordpress/wp-content/themes/setplex'), // Path to WordPress for files
    emptyOutDir: false, // Don't delete old files before build
    rollupOptions: {
      input: {
        basejs: path.resolve(__dirname, 'source/js/base.js'),
        basecss: path.resolve(__dirname, 'source/scss/set-base.scss'),
        'legal-docs': path.resolve(__dirname, 'source/scss/legal-docs.scss'),
        '404': path.resolve(__dirname, 'source/scss/404.scss'),
        'thank-you': path.resolve(__dirname, 'source/scss/thank-you.scss'),
        'front-page': path.resolve(__dirname, 'source/scss/front-page.scss'),
        'our-solutions': path.resolve(__dirname, 'source/scss/our-solutions.scss'),
        'solution': path.resolve(__dirname, 'source/scss/solution.scss'),
        'book-a-demo': path.resolve(__dirname, 'source/scss/book-a-demo.scss'),
        'contact-us': path.resolve(__dirname, 'source/scss/contact-us.scss'),
        'about': path.resolve(__dirname, 'source/scss/about.scss'),
        'partners': path.resolve(__dirname, 'source/scss/partners.scss'),
        'support': path.resolve(__dirname, 'source/scss/support.scss'),
        'leadership': path.resolve(__dirname, 'source/scss/leadership.scss'),
        'careers': path.resolve(__dirname, 'source/scss/careers.scss'),
        'careers-inner': path.resolve(__dirname, 'source/scss/careers-inner.scss'),
        'careers-vacancy': path.resolve(__dirname, 'source/scss/careers-vacancy.scss'),
      },
      output: {
        entryFileNames: 'js/[name].min.js', // for JS-files
        assetFileNames: (assetInfo) => {
          // For CSS
          if (assetInfo.name.endsWith('.css')) {
            return 'css/[name].min.[ext]';
          }
          // For other assets
          return '[name].[ext]';
        },
      },
    },
  },
});