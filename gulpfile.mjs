// gulpfile.js

// VARIABLES & PATHS
const localhost = 'starter-october' // Local domen
const theme = 'starter' // Theme folder name
const fileswatch = 'html,htm,php,txt,js,mjs,jpg,png,svg,json,md,woff2' // List of files extensions for watching & hard reload (comma separated)

// LOGIC
import gulp from 'gulp'
const { src, dest, parallel, series, watch } = gulp
import browsersync from 'browser-sync'
import { deploy } from './gulp/deploy.mjs'
import { images } from './gulp/images.mjs'
import { cssDev, cssBuild } from './gulp/css.mjs'
import { jsDev, jsBuild, jsLibDev, jsLibBuild } from './gulp/js.mjs'
import { clean, assetscopy } from './gulp/assets.mjs'

function browserSync() {
  browsersync.init({
    files: [`themes/${theme}/**/*`],
    watch: true,
    notify: false,
    proxy: { target: `http://${localhost}` },
    online: true, // If «false» - Browsersync will work offline without internet connection
    browser: ['firefox'], // open in firefox
  })
}

function watchDev() {
  watch(`themes/${theme}/app/img/**/*.{jpg,png,svg}`, { usePolling: true }, images)
  watch(`themes/${theme}/app/js/**/*.{js,mjs,cjs}`, { usePolling: true }, series(jsDev, jsLibDev))
  watch(`themes/${theme}/app/scss/**/*.{scss,sass,css}`, { usePolling: true }, cssDev)
  watch(`themes/${theme}/**/*.{${fileswatch}}`, { usePolling: true }).on('change', browsersync.reload)
}

export { jsDev, jsBuild, cssDev, cssBuild, images, deploy }
export let serve = parallel(browserSync, watchDev)
export let dev = series(clean, assetscopy, images, cssDev, jsDev, jsLibDev)
export let build = series(clean, assetscopy, images, cssBuild, jsBuild, jsLibBuild)
