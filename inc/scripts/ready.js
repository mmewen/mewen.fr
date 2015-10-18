// window.onload(function(){
// 	alert('ok');
// })
var MAXBLUR = 100;

var canvas = document.getElementById("background");
var canvasContext = canvas.getContext("2d");
var canvasBackground = new Image();
canvasBackground.src = "../inc/img/backgroundtest.png";
var canvasReady = false;
var canvasEntirelyBlurred = false;

canvasBackground.onload = function() {
	// Store the width and height of the canvas for below

	canvasContext.canvas.width  = window.innerWidth;
	canvasContext.canvas.height = window.innerHeight;
	var w = canvas.width;
	var h = canvas.height;
	// This draws the image we just loaded to our canvas
	canvasContext.drawImage(canvasBackground, 0, 0, w, h);
	// This blurs the contents of the entire canvas
	blurCanvas(100);
	canvasReady = true;
}

function blurCanvas(percent) {
	stackBlurCanvasRGB("background", 0, 0, canvas.width, canvas.height, percent/100*MAXBLUR);
}

var previous_scroll;

$(window).on('scroll', function() {
	// if (canvasReady) {
	//     var scroll = $(window).scrollTop();
	//     var wHeight = $(window).innerHeight();

	//     if (scroll > wHeight && !canvasEntirelyBlurred) {
	//     	canvasEntirelyBlurred = true;
	// 		blurCanvas(100);
	//     } else if (scroll < wHeight){
	//     	canvasEntirelyBlurred = false;
	// 		blurCanvas(scroll / wHeight);
	//     }	  
	// }
});