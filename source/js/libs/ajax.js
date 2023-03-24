$("#form-contato").submit(function (event) {
  event.preventDefault();
  let formData = new FormData(this);
  formData.action = "vg_theme_contato";

  jQuery.ajax({
    type: "post",
    dataType: "json",
    url: my_ajax_object.ajax_url,
    data: formData,
    success: function (msg) {
      console.log(msg);
    },
    error: function (msg) {
      console.log(msg);
    },
  });
});
