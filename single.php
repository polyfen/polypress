<?php
    get_header();
?>

<section class="container">
    <?php
    if (have_posts()) {
        while (have_posts()) {
            the_post();

            get_template_part('template-parts/content', 'article');
        }
    }
    ?>
            <article>
                <h2 class="heading-1"><?php the_title(); ?></h2>
            </article>
            <hr class="secondary-separator">
</section>

<?php
    get_footer();
?>