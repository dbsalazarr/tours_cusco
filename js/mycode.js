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

	  $('.content-testimonios').bxSlider({
		  mode: 'horizontal',
		  speed: 1000,
		  controls: false,
		  auto: true,
		  pause: 5000
	  });
});