//
// dropdown.js
//

"use strict";

(function () {
  //
  // Variables
  //

  // Selectors
  var drops = document.querySelectorAll(
    ".navbar-nav .dropdown, .navbar-nav .dropright"
  );

  // Events
  var showEvents = ["mouseenter"];
  var hideEvents = ["mouseleave", "click"];

  // Transition
  var transitionDuration = 200;

  // Breakpoint
  var desktopSize = 992;

  //
  // Functions
  //

  // Show drop
  function showDrop(menu) {
    if (window.innerWidth < desktopSize) {
      return;
    }

    menu.classList.add("showing");

    setTimeout(function () {
      menu.classList.remove("showing");
      menu.classList.add("show");
    }, 1);
  }

  // Hide drop
  function hideDrop(e, menu) {
    setTimeout(function () {
      if (window.innerWidth < desktopSize) {
        return;
      }

      if (!menu.classList.contains("show")) {
        return;
      }

      if (e.type === "click" && e.target.closest(".dropdown-menu form")) {
        return;
      }

      menu.classList.add("showing");
      menu.classList.remove("show");

      setTimeout(function () {
        menu.classList.remove("showing");
      }, transitionDuration);
    }, 2);
  }

  //
  // Listeners
  //

  [].forEach.call(drops, function (dropdown) {
    var menu = dropdown.querySelector(".dropdown-menu");

    // Show drop
    showEvents.forEach(function (event) {
      dropdown.addEventListener(event, function () {
        showDrop(menu);
      });
    });

    // Hide drop
    hideEvents.forEach(function (event) {
      dropdown.addEventListener(event, function (e) {
        hideDrop(e, menu);
      });
    });
  });
})();

jQuery(document).ready(function () {
  var $iTV = 1;
  var $tableBody = $("table.variations").find("tbody");
  var $tableValues = $("table.variations").find("td.value");
  var $addToCart = $(".single_add_to_cart_button.button.alt");

  $addToCart.addClass("d-none");
  $(".addToCartContainer").appendTo(".woocommerce-variation-add-to-cart");

  $tableBody.addClass("list-group list-group-flush mt-6 mb-8");
  $tableBody.find("tr").each(function () {
    $(this).addClass("list-group-item py-4");
  });
  $tableBody.append(
    '<tr class="list-group-item py-4"><td class="label d-flex align-items-center"><h6 class="mb-0 text-uppercase">Left in stock</h6></td><td class="value"><span class="leftInStockTableRow"></span></td></tr>'
  );
  $tableBody.find(".leftInStockTableRow").text($(".leftInStockAmount").text());
  $tableBody.append(
    '<tr class="list-group-item py-4 priceTableRow d-none"><td class="label d-flex align-items-center"><h6 class="mb-0 text-uppercase">Price</h6></td><td class="value"></td></tr>'
  );
  $(".woocommerce-variation.single_variation").appendTo(
    $(".priceTableRow").find("td.value")
  );
  $tableValues.each(function () {
    console.log($(this));
    $(this).wrapInner(
      '<div class="dropdown-menu dropdown-menu-xs dropdown-menu-right text-right" aria-labelledby="dropdownMenuLink' +
        $iTV +
        '"></div>'
    );
    $(this).prepend(
      '<a class="btn btn-xs btn-link dropdown-toggle pr-0" href="#" role="button" id="dropdownMenuLink' +
        $iTV +
        '" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Choose the size</a>'
    );
    $(this).wrapInner('<div class="dropdown show ml-auto mt-n1"></div>');
    $iTV++;
    var $link = $(this).find(".dropdown-toggle");
    $(this)
      .find("input")
      .each(function () {
        $(this).on("change", function () {
          if (this.checked) {
            $link.text($(this).next("label").text());
          }
          $(".priceTableRow").removeClass("d-none");
        });
      });
  });
});
