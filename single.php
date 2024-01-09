<?php
/*
Template Name: Blog Posts
*/

    get_header();
?>

<article class="container">

<?php
    if ( have_posts() ) {
        while ( have_posts() ) {
            the_post();
            get_template_part( 'template-parts/content', 'blog' );
        }
    }
?>

</article>

<?php
    get_footer();
?>