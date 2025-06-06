// Select2 JS

setTimeout(function () {
  (function ($) {
    "use strict";
    // Single Search Select
    $(".js-example-basic-single").select2();
    $(".js-example-disabled-results").select2();

    // Multi Select
    $(".js-example-basic-multiple").select2();

    // With Placeholder
    $(".js-example-placeholder-multiple").select2({
      placeholder: "Select Your Name",
    });

    // With Placeholder - category
    $(".js-category-placeholder-multiple").select2({
      placeholder: "Select Categories",
    });

    // With Placeholder - tag
    $(".js-tag-placeholder-multiple").select2({
      placeholder: "Select Tags",
    });
    
    //Limited Numbers
    $(".js-example-basic-multiple-limit").select2({
      maximumSelectionLength: 2,
    });

    //RTL Support
    $(".js-example-rtl").select2({
      dir: "rtl",
    });
    // Responsive width Search Select
    $(".js-example-basic-hide-search").select2({
      minimumResultsForSearch: Infinity,
    });
    $(".js-example-disabled").select2({
      disabled: true,
    });
    $(".js-programmatic-enable").on("click", function () {
      $(".js-example-disabled").prop("disabled", false);
    });
    $(".js-programmatic-disable").on("click", function () {
      $(".js-example-disabled").prop("disabled", true);
    });
  })(jQuery);
}, 350);
