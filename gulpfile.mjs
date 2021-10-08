// gulpfile.js for October CMS Mockup Starter Template by pasmurno
// repositary: https://github.com/llcawc/starter-october.git

// VARIABLES & PATHS

let localhost = 'starter-october', // Local domen
  theme = 'starter', // Theme folder name
  fileswatch = 'html,htm,php,txt,json,md,woff2' // List of files extensions for watching & hard reload (comma separated)

let paths = {
  scripts: {
    src: `themes/${theme}/app/js/app.js`,
    dest: `themes/${theme}/assets/js`,
  },

  styles: {
    src: `themes/${theme}/app/sass/main.*`,
    dest: `themes/${theme}/assets/css`,
  },

  images: {
    src: `themes/${theme}/app/src/**/*`,
    dest: `themes/${theme}/assets/images`,
  },

  purge: {
    content: [
      `plugins/**/*.htm`,
      `themes/${theme}/**/*.htm`,
      `themes/${theme}/app/js/**/*.js`,
      // `themes/${theme}/app/vendor/**/*.*`,
      'node_modules/photoswipe/dist/photoswipe.css',
      'node_modules/bootstrap/scss/_reboot.scss',
      'node_modules/bootstrap/js/dist/dom/*.js',
      'node_modules/bootstrap/js/dist/{base-component,alert,button,carousel,modal,tooltip,popover}.js',
    ],
    safelist: {
      // standart: ["selectorname"],
      deep: [/scrolltotop$/],
      greedy: [/on$/, /down$/, /is-hidden$/, /success$/, /danger$/, /warning$/],
    },
    keyframes: true,
  },

  deploy: {
    hostname: 'host.ru', // Deploy hostname
    destination: 'domen.ru/www/', // Deploy destination
    include: ['*.htaccess'], // Included files to deploy
    exclude: [
      // Excluded files from deploy
      '.git',
      'bootstrap',
      'config',
      'modules',
      'mysql',
      'node_modules',
      'plugins',
      'storage',
      'vendor',
      // `themes/${theme}/app`,
      // 'storage/*.sqlite',
      // 'gulpfile.js',
      // 'package.json',
      // '*.editorconfig',
      // '*.gitignore',
      'package-lock.json',
      'npm-debug.log',
      'debug.log',
      '**/Thumbs.db',
      '**/*.DS_Store',
    ],
  },

  cssOutputName: 'main.min.css',
  jsOutputName: 'app.min.js',
}

// LOGIC
import gulp from 'gulp'
const { src, dest, parallel, series, watch } = gulp
import brSync from 'browser-sync'
const browserSync = brSync.create()
import webpack from 'webpack'
import webpackStream from 'webpack-stream'
import TerserPlugin from 'terser-webpack-plugin'
import sassDark from 'sass'
import sassGulp from 'gulp-sass'
import sassglob from 'gulp-sass-glob'
import sourcemaps from 'gulp-sourcemaps'
const sass = sassGulp(sassDark)
import purgecss from 'gulp-purgecss'
import postCss from 'gulp-postcss'
import cssnano from 'cssnano'
import autoprefixer from 'autoprefixer'
import imagemin from 'gulp-imagemin'
import newer from 'gulp-newer'
import rsync from 'gulp-rsync'
import rename from 'gulp-rename'
import del from 'del'

function browsersync() {
  browserSync.init({
    files: [`themes/${theme}/**/*`],
    watch: true,
    notify: false,
    proxy: { target: `http://${localhost}` },
    online: true, // If «false» - Browsersync will work offline without internet connection
    browser: ['firefox'], // open in firefox
  })
}

function js() {
  return src(paths.scripts.src)
    .pipe(
      webpackStream(
        {
          mode: 'production',
          performance: { hints: false },
          plugins: [
            new webpack.ProvidePlugin({
              $: 'jquery',
              jQuery: 'jquery',
              'window.jQuery': 'jquery',
            }), // jQuery (npm i jquery)
          ],
          module: {
            rules: [
              {
                test: /\.m?js$/,
                exclude: /(node_modules)/,
                use: {
                  loader: 'babel-loader',
                  options: {
                    presets: ['@babel/preset-env'],
                    plugins: ['babel-plugin-root-import'],
                  },
                },
              },
            ],
          },
          optimization: {
            minimize: false,
            minimizer: [
              new TerserPlugin({
                terserOptions: { format: { comments: true } },
                extractComments: false,
              }),
            ],
          },
        },
        webpack
      )
    )
    .on('error', function handleError() {
      this.emit('end')
    })
    .pipe(rename(paths.jsOutputName))
    .pipe(dest(paths.scripts.dest))
    .pipe(browserSync.stream())
}

function scripts() {
  return src(paths.scripts.src)
    .pipe(
      webpackStream(
        {
          mode: 'production',
          performance: { hints: false },
          plugins: [
            new webpack.ProvidePlugin({
              $: 'jquery',
              jQuery: 'jquery',
              'window.jQuery': 'jquery',
            }), // jQuery (npm i jquery)
          ],
          module: {
            rules: [
              {
                test: /\.m?js$/,
                exclude: /(node_modules)/,
                use: {
                  loader: 'babel-loader',
                  options: {
                    presets: ['@babel/preset-env'],
                    plugins: ['babel-plugin-root-import'],
                  },
                },
              },
            ],
          },
          optimization: {
            minimize: true,
            minimizer: [
              new TerserPlugin({
                terserOptions: { format: { comments: false } },
                extractComments: false,
              }),
            ],
          },
        },
        webpack
      )
    )
    .on('error', function handleError() {
      this.emit('end')
    })
    .pipe(rename(paths.jsOutputName))
    .pipe(dest(paths.scripts.dest))
    .pipe(browserSync.stream())
}

function css() {
  return src(paths.styles.src)
    .pipe(sourcemaps.init())
    .pipe(sassglob())
    .pipe(sass({ 'include css': true }))
    .pipe(
      postCss([
        autoprefixer({ grid: 'autoplace' }),
        cssnano({
          preset: ['default', { discardComments: { removeAll: true } }],
        }),
      ])
    )
    .pipe(rename(paths.cssOutputName))
    .pipe(sourcemaps.write('.'))
    .pipe(dest(paths.styles.dest))
    .pipe(browserSync.stream())
}

function styles() {
  return src(paths.styles.src)
    .pipe(sassglob())
    .pipe(sass({ 'include css': true }))
    .pipe(purgecss(paths.purge))
    .pipe(
      postCss([
        autoprefixer({ grid: 'autoplace' }),
        cssnano({
          preset: ['default', { discardComments: { removeAll: true } }],
        }),
      ])
    )
    .pipe(rename(paths.cssOutputName))
    .pipe(dest(paths.styles.dest))
    .pipe(browserSync.stream())
}

function images() {
  return src(paths.images.src)
    .pipe(newer(paths.images.dest))
    .pipe(imagemin({ verbose: 'true' }))
    .pipe(dest(paths.images.dest))
}

function deploy() {
  return src('./').pipe(
    rsync({
      root: './',
      hostname: paths.deploy.hostname,
      destination: paths.deploy.destination,
      clean: true, // Mirror copy with file deletion
      include: paths.deploy.include,
      exclude: paths.deploy.exclude,
      recursive: true,
      archive: true,
      silent: false,
      compress: true,
    })
  )
}

function clean() {
  return del([`themes/${theme}/assets/css/*.map`], { force: true })
}

function startwatch() {
  watch(`themes/${theme}/assets/sass/**/*`, { usePolling: true }, css)
  watch(`themes/${theme}/assets/js/**/*.js`, { usePolling: true }, js)
  watch(`themes/${theme}/**/*.{${fileswatch}}`, { usePolling: true }).on('change', browserSync.reload)
}

export { clean, js, scripts, css, styles, images, deploy }
export let build = series(clean, images, scripts, styles)
export let serve = parallel(browsersync, startwatch)
export default series(clean, images, js, css, serve)
