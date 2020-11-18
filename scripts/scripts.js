

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

$( "#programmingDropdown" ).mouseenter(function() {

  $(".dropdownmenu").delay(50).show(100);
  event.stopPropagation();
});

$( "#programmingDropdown" ).mouseleave(function() {

  $(".dropdownmenu").delay(50).hide(100);
  event.stopPropagation();
});

$(".dropdownmenu").hide();
