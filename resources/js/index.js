$(window).on("load", function(){
  $(".content").hide();
  $(".loader-wrapper").fadeOut(3000, "swing", function() {
    $(".content").fadeIn();
  });
})