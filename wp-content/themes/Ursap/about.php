<?php
/* template name: about
*/
get_header();
the_title(); // Le titre du livre cette fois
?>
<?php //ouverture d'une nouvelle boucle qui va chercher nos livres
$books_loop = new WP_Query( 'post_type=membres'); if( $books_loop->have_posts() ): while( $books_loop->have_posts() ): $books_loop->the_post();?>
     <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <?php the_field('nom'); ?>
        <?php edit_post_link(); // le boutons d'edition admin?>
    </article>
    <?php endwhile; endif; wp_reset_postdata(); ?>
<?php
get_footer();