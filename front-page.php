<?php
    get_header();
?>

<section class="cover">
    <h1 class="title-1 align-center">Upscale your Business<br>with our Proven Formula</h1>
    <p class="align-center">We've helped Y Combinator start-ups<br>launch with amazing success.</p>
    <a class="button">Learn More</a>
</section>

<hr class="secondary-separator">

<article>
<?php

    if( have_posts()){
        while( have_posts()){
            the_post();
            the_content();
        }
    
    }

?>
</article>

<?php
    get_footer();
?>