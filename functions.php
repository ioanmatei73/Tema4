<?php

function wpr_add_style() {
    wp_enqueue_style('wpracademy-style', get_stylesheet_directory_uri() . '/style.css');
}

add_action('wp_enqueue_scripts', 'wpr_add_style');

function add_contact_top_sidebar() { ?>
    <div class="contact-header">
        <span>Contact</span>
    </div>
<?php 
}

add_action('astra_head_top', 'add_contact_top_sidebar');

?>