<?php 
    the_post();
    get_header();
    ?>
    <h1>This is a page not a post</h1>
    <h2><?php the_title(); ?></h2>
    <?php the_content(); ?>
    <?php
    get_footer();
?>