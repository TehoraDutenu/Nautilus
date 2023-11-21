<?php

// -- NAVIGATION

// - Enregistrer
function register_menu() 
{
    register_nav_menus(
        array(
            'menu-sup' => __('Menu sup'),
            'footer-menu' => __('Footer menu'),
        )
    );
}
add_action('init', 'register_menu');

// - Design du menu
class Simple_menu extends Walker_Nav_Menu
{
    public function start_el(&$output, $data_object, $depth = 0, $args = null, $current_object_id = 0)
    {
        $title = $data_object->title;
        $permalink = $data_object->url;

        $output .= "<div class='nav-item d-flex flex-row'>";
        $output .= "<a class='nav-link m-1 custom_a' href='$permalink'>$title</a>";
    }
    public function end_el(&$output, $data_object, $depth = 0, $args = null)
    {
        $output .= "</div>";
    }
}