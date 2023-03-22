jQuery(document).ready(function ($) {
  // Upload category image
  $(document).on("click", ".category-image-upload", function (e) {
    e.preventDefault();
    var button = $(this);
    var custom_uploader = wp
      .media({
        title: "Insert image",
        button: {
          text: "Use this image",
        },
        multiple: false,
      })
      .on("select", function () {
        var attachment = custom_uploader
          .state()
          .get("selection")
          .first()
          .toJSON();
        var url = attachment["url"];
        button.siblings(".category-image").val(url);
        button.siblings(".category-image-preview").attr("src", url).show();
      })
      .open();
  });
});
