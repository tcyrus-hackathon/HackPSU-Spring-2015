$(function() {
  if ("account" in sessionStorage) {
    $('.navbar-form').toggleClass("hidden");
    $('#logged-in').toggleClass("hidden");
  }
  $('.navbar-form').submit(function() {
    var input = document.getElementsByName("account")[0];
    sessionStorage.setItem("account", input.value);
    return true;
  });
  $('#logout').click(function() {
    sessionStorage.clear();
    window.location.replace("index.html");
  });
});
