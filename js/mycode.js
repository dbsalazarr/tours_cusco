// document.addEventListener('DOMContentLoaded', () => {

// 	console.log("El documento esta listo para ejecutar código Js");

// })

$ = jQuery.noConflict();

$(document).ready(function(){
      $('.slider-main').bxSlider({
      	mode:"fade",
      	speed: 1000,
      	pager:false,
      	auto: true,
      	pause: 5000
      });
});