//
// aos.js
// Theme module
//

"use strict";

(function () {
  //
  // Functions
  //

  function init() {
    var options = {
      duration: 700,
      easing: "ease-out-quad",

      startEvent: "load",
    };
    AOS.init(options);
  }

  //
  // Events
  //

  if (typeof AOS !== "undefined") {
    init();
  }
})();
