<?php
if ( function_exists('register_sidebar') )
    register_sidebar(array(
    'name' => 'sidebar',
    'before_widget' => '<div class="sidebar-box">',
    'after_widget' => '</div>',
    'before_title' => '<span class="sidebar-title">',
    'after_title' => '</span><div class="dots"></div>',
));

if ( function_exists('register_sidebar') )
    register_sidebar(array(
    'name' => 'sidebar1',
    'before_widget' => '<div class="sidebar-box">',
    'after_widget' => '</div>',
    'before_title' => '<span class="sidebar-title">',
    'after_title' => '</span><div class="dots"></div>',
));
?>