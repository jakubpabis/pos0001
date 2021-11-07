//
// modal.js
//

"use strict";

(function () {
  var modal = document.querySelectorAll(".modal");

  function overflowHide() {
    var scrollbarWidth = getScrollbarWidth();

    document.documentElement.style.overflow = "hidden";
    document.body.style.paddingRight = scrollbarWidth + "px";
  }

  function overflowShow() {
    document.documentElement.style.overflow = "";
    document.body.style.paddingRight = "";
  }

  function getScrollbarWidth() {
    return window.innerWidth - document.documentElement.clientWidth;
  }

  $(modal).on({
    "show.bs.modal": function () {
      overflowHide();
    },
    "hidden.bs.modal": function () {
      overflowShow();
    },
  });
})();

jQuery(document).ready(function () {
  $(document)
    .find(".woocommerce-mini-cart-item")
    .each(function () {
      $(this)
        .find("span.quantity")
        .appendTo($(this).find(".remove_from_cart_button").next("a"));
    });
});
