// Файл пользовательских скриптовъ

// import jQuery module  (npm i jquery)
import $ from "jquery";
window.jQuery = $;
window.$ = $;

// Importing bootstrap plugins that I need
// import "bootstrap/js/dist/alert";
// import "bootstrap/js/dist/carousel";
// import "bootstrap/js/dist/modal";
import "bootstrap/js/dist/button";
import "bootstrap/js/dist/collapse";
import "bootstrap/js/dist/dropdown";
// import 'bootstrap/js/dist/offcanvas';
// import 'bootstrap/js/dist/scrollspy';
// import 'bootstrap/js/dist/tab';
// import "bootstrap/js/dist/popover"; // require from popper (npm install @popperjs/core)
// import 'bootstrap/js/dist/toast';  // require from popper
// import "bootstrap/js/dist/tooltip"; // require from popper

// Require October CMS System Framework (requires jQuery)
require("~/modules/system/assets/js/framework.js");
require("~/modules/system/assets/js/framework.extras.js");

// Import vendor jQuery plugin
// require('~/node_modules/bootstrap/dist/js/bootstrap.bundle.js'); // Require Bootstrap as not module if needed
require("../vendor/photoswipe/pswpinit");

// imports js partials
import "./blocks/menu";
import "./blocks/totop";
import "./blocks/psw";

// end of file
