<?php
/* template name: about
*/
get_header();
?>
<?php
$membres = new WP_query(array( 'post_type' => 'membres', 'posts_per_page' => 10, ));?>
<?php if($membres->have_posts()): while($membres->have_posts()): $membres->the_post(); ?>
    <li> <div class="projectlist-thumb"> <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a> <div> <h3><?php the_title(); ?></h3> </div> </div> </li>
<?php endwhile; endif; ?>
<?php
get_footer();