$(document).ready(function () {
  //  Desplegar sublista al hacer click
  $("#menu > li").click(function () {
    console.log("Hi");
    var sublist = $(this).find(".sublist");
    if (sublist.length) {
      if (sublist.is(":visible")) {
        sublist.hide();
      } else {
        sublist.show();
      }
    }
  });
});
