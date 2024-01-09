<!DOCTYPE html>
<html lang="en"> 
<head>
    
    <?php wp_head(); ?>

</head>
<body class="dark-mode">
    <header>

        <?php
        
        if(function_exists('the_custom_logo')){

            $custom_logo_id = get_theme_mod('custom_logo');
            $logo = wp_get_attachment_image_src($custom_logo_id);

        }
        
        ?>

        <img src="<?php echo $logo[0]; ?>" alt="" class="logo">
        <a href="/"><?php echo get_bloginfo('name');?></a>

        <nav>
            <?php
                wp_nav_menu(
                    array(
                        'menu' => 'primary',
                        'container' => '',
                        'theme_location' => 'primary',
                        'items_wrap' => '<ul id="" class="">%3$s</ul>'
                    )
                );
            ?>
        </nav>
        
    </header>