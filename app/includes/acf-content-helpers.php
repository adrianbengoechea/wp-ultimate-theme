<?php

function acf_exist(){
    return class_exists('ACF');
}

function acf_button ( $link = false, $classes = '' ) {

    if( !$link || trim($link['title']) == '' ){ return; }

    return '<span class="btn--wrap"><a class="'. $classes .'" href="'.$link['url'].'" target="'.$link['target'].'">'.$link['title'].'</a></span>';

}


add_action('init', 'acf_setup_theme_settings_page');
function acf_setup_theme_settings_page(){

    // Register ACF global options pages
    if( acf_exist() && function_exists('acf_add_options_page') ) {

        acf_add_options_page(array(
            'page_title'    => 'Theme General Settings',
            'menu_title'    => 'Theme Settings',
            'menu_slug'     => 'theme-general-settings'
        ));


        acf_add_options_sub_page(array(
            'page_title'    => 'Theme Global Settings',
            'menu_title'    => 'Global',
            'parent_slug'   => 'theme-general-settings' 
        ));
        acf_add_options_sub_page(array(
            'page_title'    => 'Theme Header Settings',
            'menu_title'    => 'Header',
            'parent_slug'   => 'theme-general-settings'
        ));
        acf_add_options_sub_page(array(
            'page_title'    => 'Theme Footer Settings',
            'menu_title'    => 'Footer',
            'parent_slug'   => 'theme-general-settings'
        ));
        
    }

}