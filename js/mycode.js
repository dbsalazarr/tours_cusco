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

	if(validarExistenciaComponente("searchform")){
		realizarBusqueda("searchsubmit")
		console.log("Se puede realizar la busqueda")
	}
	else{
		console.log("Ups!")
	}
      
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

// Función para poder los campos de un formulario
function validarFormulario( idFormulario ){
	/*
		Si existe el componente (formulario) solo ahí realizamos la verificación de las 
		datos de entrada
	*/
	let formulario, inputs, query, contador;
	contador = 0
	formulario = document.getElementById( idFormulario )


	// Validar 3 inputs
	query = "#"+idFormulario + " .datos-busqueda input"
	inputs = document.querySelectorAll(query)

	inputs.forEach( (valor) => {
		// Solo validar los inputs de tipo texto y número
		if( valor.type == "text" || valor.type == "number"){
			if(valor.value == ""){
				valor.classList.add('error')
				contador -= 1
			}else{
				valor.classList.remove('error')
				contador += 1
			}
		}
	})
	if(contador == 3){
		formulario.submit()
	}
}

function realizarBusqueda( idBotonBusqueda ){
	let botonBusqueda
	botonBusqueda = document.getElementById( idBotonBusqueda )
	botonBusqueda.addEventListener('click', (e) => {
		e.preventDefault()
		validarFormulario("searchform")
	})
}

// Función para validar la existencia de un elemento
function validarExistenciaComponente( idComponente ){
	let visible = false
	// la función document.body.contains(elemento_html) retorna un valor boleeano
	componente = document.getElementById(idComponente)
	visible = document.body.contains( componente )
	if(visible){
		return true
	}else{
		return false
	}
}