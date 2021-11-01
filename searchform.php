<!--   Este es la plantilla de nuestros formularios de busqueda    -->

<section class="centrar-contenedor-60">
    <form role="search" method="get" class="content-busqueda blanco" id="searchform" action="<?php esc_url( home_url('/') ) ?>">
        <input type="hidden" value="<?php get_search_query() ?>" name="s" id="s" >
        <div class="datos-busqueda">
            <div>
                <span>Destino</span>
                <input type="text" placeholder="Cusco, Machu Picchu, Valle Sagrado" id="destino" name="destino">
            </div>
            <div>
                <span>Presupuesto Max</span>
                <input type="number" placeholder="1000 USD" id="precio" name="precio" id="precio">
            </div>
            <div>
                <span>Cantidad Días</span>
                <input type="number" placeholder="3" id="dias" name="dias" id="dias">
            </div>
            <div>
                <input type="submit" class="buscar-precios" value="Buscar" id="searchsubmit">
            </div>
        </div>
    </form><!-- END FORM FOR SEARCH -->
</section>