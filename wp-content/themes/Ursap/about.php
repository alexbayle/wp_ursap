<?php
/* template name: about
*/
get_header();
the_title(); // Le titre du livre cette fois
?>
<div class="container">
    <div class="row">
    <?php //ouverture d'une nouvelle boucle qui va chercher nos livres
    $books_loop = new WP_Query( 'post_type=membres'); if( $books_loop->have_posts() ): while( $books_loop->have_posts() ): $books_loop->the_post();?>
         <article class="team-member col-md-3" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
             <?php
             $image = get_field('image');?>
             <img src="<?php echo $image['url']; ?>" alt="membre ursap" class="member-pict"/>
             <hr/>
            <h3><?php the_field('nom'); ?></h3>
            <p><?php the_field('prenom'); ?></p>
             <p>Birthday : <?php the_field('date_de_naissance'); ?></p>
             <p>Role : <?php the_field('role'); ?></p>
             <hr/>
            <?php edit_post_link(); // le boutons d'edition admin?>
        </article>
        <?php endwhile; endif; wp_reset_postdata(); ?>
    </div>
</div>
<?php
get_footer();