jQuery(document).ready(function ($) {
  // Upload category image
  $(document).on("click", "#searchToggle", function (e) {
    $(".top-menu-items").addClass("open");
  });
  $(document).on("click", ".btn-reset", function (e) {
    $(".top-menu-items").removeClass("open");
  });
  $(document).on("click", "#sMobileMenuButton", function (e) {
    e.preventDefault();
    $("#header").toggleClass("open");
  });
});
