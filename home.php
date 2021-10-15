<?php get_header(); ?>

<?php 
    $args = array(
        'post_type' => 'blog',
        'orderby' => 'date'
    );

    $blogs = new WP_Query($args);
?>
<?php while($blogs->have_posts()) : $blogs->the_post(); ?>
    <h3><?php the_title(); ?> </h3>
<?php endwhile; wp_reset_postdata(); ?>

<?php get_footer(); ?>