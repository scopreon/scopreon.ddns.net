$( "#buttonnav" ).click(function() {
  $("nav").toggle("slow");
});


if($(window).width() <= 1090){
  $("nav").toggle("slow");
}
$( window ).resize(function() {
  if($(window).width() >= 1090){
    $("nav").show("slow");
  }
});
