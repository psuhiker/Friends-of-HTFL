<?php

// Adds CSS to Customizer Page

function my_customizer_styles() { ?>
    <style>

       li#accordion-panel-widgets {
       	display: none !important;
       }

    </style>
    <?php

}
add_action( 'customize_controls_print_styles', 'my_customizer_styles', 999 );

// Removes Static Front Page

add_action('customize_register', 'themename_customize_register');
function themename_customize_register($wp_customize) {
  $wp_customize->remove_section( 'static_front_page' );
}
