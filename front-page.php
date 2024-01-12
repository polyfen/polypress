<?php
    get_header();
?>

<section class="cover">
    <h1 class="title-1 align-center">Upscale your Business<br>with our Proven Formula</h1>
    <p class="align-center">We've helped Y Combinator start-ups<br>launch with amazing success.</p>
    <a class="button">Learn More</a>
</section>

<hr class="secondary-separator">

<section class="container">
    <?php
    if (have_posts()) {
        while (have_posts()) {
            the_post();
    ?>
            <article>
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <?php the_excerpt(); ?>
            </article>
            <hr class="secondary-separator">
    <?php
        }
    }
    ?>
</section>

<?php
    get_footer();
?>