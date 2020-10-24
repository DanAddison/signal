jQuery(function($) {
  $(".menu-button").click(function(event) {
    event.preventDefault();
    $(".sidenav").toggleClass("menushow");
    $(".menu-button").toggleClass("is-active");
    $("body").toggleClass("is-visible-sidenav");
  });
});