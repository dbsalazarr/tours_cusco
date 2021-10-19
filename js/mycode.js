// document.addEventListener('DOMContentLoaded', () => {

// 	console.log("El documento esta listo para ejecutar código Js");

// })

$ = jQuery.noConflict();

$(document).ready(function(){

	if( $('.slider-main')){
		try{
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
		}catch(error){
			// console.log(error) // este console muestra el error detectado en la web
		}
		
	}else{
		console.log("No estas en el home")
	}

	menu_responsive();

      
});

function menu_responsive(){
	let barMenu, navPrincipal;

	barMenu = document.querySelector('.bar-menu')
	navPrincipal = document.getElementById("nav-principal")

	barMenu.addEventListener("click", () => {
		if( navPrincipal.classList.contains('active') ){
			navPrincipal.classList.remove('active')
		}else{
			navPrincipal.classList.add('active')
		}
	})
}

console.log("Esta que nos lleva la chingada amigos");