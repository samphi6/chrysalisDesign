// SCRIPTS FOR CHRYSALIS D&D //

var image = new Image();

// IMAGE FOR TRNASITION

image.src = "/chrysalisDesign/img/phase3.png";

image.onload = function () {

$(".element").css("background-image",

    "url('" + image.src + "')");

}; 