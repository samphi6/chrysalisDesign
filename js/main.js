// SCRIPTS FOR CHRYSALIS D&D //

var image = new Image();

image.onload = function () {

$(".logo").css("background-image",

    "url('" + image.src + "')");

image.src = "/chrysalisDesign/img/phase3.png";

};