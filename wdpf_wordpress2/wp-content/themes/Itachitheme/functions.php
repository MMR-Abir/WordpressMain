<?php

function register_MMR_menu() {
  register_nav_menu( 'primary', __( 'Main location', 'Itachitheme' ) );
}

add_action( 'after_setup_theme', 'register_MMR_menu' );
?>