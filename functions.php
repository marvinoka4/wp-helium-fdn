<?php


// Register theme support options
require_once(get_template_directory() . '/inc/theme-support.php');


// Register scripts and stylesheets
require_once(get_template_directory() . '/inc/enqueue-scripts.php');


// Register menus, custom menus and menu walkers
require_once(get_template_directory() . '/inc/custom-menu.php');


// Register blocks
require_once(get_template_directory() . '/inc/custom-block.php');
