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
  let padding_body = 64;
  if($('#footer').outerHeight(true)){
    padding_body =parseInt(($('#footer').outerHeight(true))) + 64;
  }
  $('#body').css('padding-bottom',`${padding_body}px`);
});
