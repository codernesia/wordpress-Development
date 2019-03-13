<?php 

/**
 * Plugin Name: My First Plugin
 * Plugin URI: http://www.mywebsite.com/my-first-plugin
 * Description: The very first plugin that I have ever created.
 * Version: 1.0
 * Author: Your Name
 * Author URI: http://www.mywebsite.com
 */

//call function
add_action( 'the_content', 'my_thank_you_text' );



//make function
function my_thank_you_text ( $content ) {
    return $content .= '<p>Thank you for reading!</p>';
    //will display every content " thank you for reading "
}