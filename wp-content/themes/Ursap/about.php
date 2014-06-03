<?php
/* template name: about
*/
get_header();
?>
<?php $posts = get_posts(array(
    'numberposts' => -1,
    'post_type' => 'membres'
    ));

    if($posts)
    {
    echo '<ul>';

    foreach($posts as $post)
    {
    echo '<li><a href="' . get_permalink($post->ID) . '">' . get_the_title($post->ID) . '</a></li>';
    }

    echo '</ul>';
    }

    ?>
<?php
get_footer();