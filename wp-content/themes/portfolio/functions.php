<?php
define('portfolio_version', '1.0.0');
//***chargement des styles et scripts */
function portfolio_register_assets()
{
    //wp_enqueue_style('theme-style', get_template_directory_uri() . '/style.css', [], filemtime(get_stylesheet_directory() . '/style.css'), 'all');
    wp_enqueue_style('theme-style', get_template_directory_uri() . '/style.css', [], false, 'all');
    wp_enqueue_style('portfolio-style', get_template_directory_uri() . '/assets/css/portfolio.css', [], portfolio_version, 'all');
}
add_action('wp_enqueue_scripts', 'portfolio_register_assets'); // chargement des styles et scripts

//=========chargement des styles en admin
function portfolio_admin_assets()
{
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', [], '5.3.2', 'all');
}
add_action('admin_init', 'portfolio_admin_assets');

//**supports theme */

function portfolio_supports() // fonction du theme supports
{
    add_theme_support('title-tag'); // affichage de la balise titre
    add_theme_support('menus'); // support des menus
    register_nav_menus(['header' => 'menu en-tete', 'footer' => 'menu pied de page']); // enregistrement des menus en-tete et pied de page
} // fin de la fonction du theme supports

add_action('after_setup_theme', 'portfolio_supports'); // supports du theme

function administration_add_admin_page()
{
    add_submenu_page(
        'options-general.php',
        'Mes options',
        'Mes réglages',
        'manage_options',
        'administration',
        'administration_page'
    );
}

function administration_page()
{
}

add_action('admin_menu', 'administration_add_admin_page');
