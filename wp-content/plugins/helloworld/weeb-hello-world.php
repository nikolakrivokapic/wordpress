<?php
/*
Plugin Name: Hello-World
Plugin URI: http://weebtutorials..com/
Description: A hello world plugin used to demonstrate the process of creating plugins.
Version: 1.0
Author: John Richardson
Author URI: http://weebtutorials.com
License: GPL
*/

//Hooks a function to a filter action, 'the_content' being the action, 'hello_world' the function.
add_filter('the_content','hello_world');

//Callback function
function hello_world($content)
{
    //Checking if on post page.
    if ( is_single() ) {
        //Adding custom content to end of post.
        return $content . "<h1> DODANO </h1>";
    }
    else {
        //else on blog page / home page etc, just return content as usual.
        return $content;
    }
}