<?php
/**
 * Faster WP Child_Theme functions and definitions
 * 
 * @link https://developer.wordpress.org/themes/basic/theme-functions/
 * 
 * @package fwpt
 * @subpackage child_fwpt
 * @since 1.0.0
 * @version 1.0
 */

//Mas info

// https://codex.wordpress.org.Child_Themes
// htpps://make.wordpress.org/training/handbook/theme-school/child-themes/

//Funciones importantes

//get_template_directory_uri()  --URL para acceder al tema padre
//get_stylesheet_directory_uri()  --URL para acceder al tema hijo

if(!function_exists('fwpt_scripts')):
    function fwpt_scripts(){

        wp_register_style('google-fonts','https://fonts.googleapis.com/css?family=Raleway:400,700',array(),'1.0.0', 'all');

        wp_register_style('parent_style',get_template_directory_uri().'/style.css',array('google-fonts'),'1.0.0','all');

        wp_register_style('style', get_stylesheet_uri(), array('google-fonts','parent_style'),'1.0.0', 'all');


        wp_enqueue_style('google-fonts');
        wp_enqueue_style('style');
        wp_enqueue_style('parent_style');


        wp_register_script('parent_scripts', get_template_directory_uri().'/script.js',array('jquery'),'1.0.0',true);

        wp_register_script('scripts', get_stylesheet_directory_uri().'/script.js',array('jquery','parent_scripts'),'1.0.0',true);


        wp_enqueue_script('scripts'); 
        wp_enqueue_script('parent_scripts'); 
        wp_enqueue_script('jquery'); 
    }
    
endif;

    add_action('wp_enqueue_scripts',"fwpt_scripts");
