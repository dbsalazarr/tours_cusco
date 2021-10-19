<?php get_header(); ?>

<?php 
    $args = array(
        'post_type' => 'historia',
        'orderby' => 'date'
    );

    $blogs = new WP_Query($args);
?>
<section class="centrar-contenedor" style="margin-top: 10rem;">
    <h2 class="titulo-seccion text-center">
        Que nuestras historias hablen por nosotros
    </h2>
    <div class="content-sidebar">

        <div class="contenido-historia">
            <?php while($blogs->have_posts()) : $blogs->the_post(); ?>
                <article class="list-historia">
                    <div class="imagen-historia">
                        <?php the_post_thumbnail(); ?>
                    </div>
                    <div class="descripcion-historia">
                        <h4 class="titulo-historia"> <?php the_title(); ?> </h4>
                        <?php 
                            $resumen = get_the_excerpt();
                            $resumen = substr($resumen, 0, 180);
                        ?>
                        <p class="resumen-historia"> <?php    echo $resumen . ' ...'; ?></p>
                        <a href="<?php the_permalink(); ?>" target="_blank" class="leer-mas-historia">Leer más</a>
                    </div>

                </article>
            <?php endwhile; wp_reset_postdata(); ?>
        </div>

        <?php get_sidebar(); ?>
    </div>

    
</section>

<?php get_footer(); ?>