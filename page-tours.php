
<?php get_header(); ?>
	
	<div class="centrar-contenedor-90">
		<section class="tours">
			<h1 class="titulo-seccion text-center">Conozca nuestra mágica tierra con nuestros más emblematicos paquetes turísticos</h1>

			<p class="centrar-contenedor-60">Excursiones, actividades y paquetes turísticos creados para viajeros que desean explorar lo mejor del Cusco en pocas horas o simplemente disfrutar de sus vacaciones de la mano de nuestro equipo de expertos profesionales locales.</p>


		</section>
		<!-- Lista de todos los tours -->
		<?php get_template_part('templates/list', 'tours'); ?>
	</div>

<?php get_footer(); ?>