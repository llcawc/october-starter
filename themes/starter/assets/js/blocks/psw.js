// psw.js
// open one image

require([
  "/themes/starter/assets/vendor/photoswipe/photoswipe",
  "/themes/starter/assets/vendor/photoswipe/photoswipe-ui",
], function (PhotoSwipe, PhotoSwipeUI) {
  // suface page - SAMPLE PHOTO SURFACE
  let openPhotoSwipe = function (sel) {
    let pswpElement = document.querySelectorAll(".pswp")[0];

    // build items array
    let items = [
      {
        src: `${sel.target.src}`,
        w: sel.target.naturalWidth,
        h: sel.target.naturalHeight,
        title: `${sel.target.alt}`,
      },
    ];

    // define options (if needed)
    let options = {
      history: false,
      focus: false,
      showAnimationDuration: 0,
      hideAnimationDuration: 0,
      shareEl: false,
      // index: 0 // start at first slide
    };

    let gallery = new PhotoSwipe(pswpElement, PhotoSwipeUI, items, options);
    gallery.init();
  };

  let elements = document.querySelectorAll(".pswinit");
  for (let elem of elements) {
    if (elem != null) elem.addEventListener("click", openPhotoSwipe);
  }
});
