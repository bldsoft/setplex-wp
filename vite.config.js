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
          src: path.resolve(__dirname, 'source/img/**/*'), // img
          dest: path.resolve(__dirname, 'wordpress/wp-content/themes/setplex/img'), // Путь относительно outDir
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
        // mainjs: path.resolve(__dirname, 'source/js/main.js'),
        // maincss: path.resolve(__dirname, 'source/scss/main.scss'),
        basecss: path.resolve(__dirname, 'source/scss/set-base.scss'),
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