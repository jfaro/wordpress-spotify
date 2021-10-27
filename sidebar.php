<div id="sidebar">

    <!-- Logo -->
    <img id="logo" src="<?php echo get_template_directory_uri(); ?>/images/spotify-logo.svg" />

    <!-- Navigation -->
    <?php
    $args = array(
        "theme_location" => "primary",
        "menu" => "Navigation",         // Same name as menu we registered in register-settings.php
        "menu_class" => "nav"
    );
    wp_nav_menu($args);
    ?>
</div>