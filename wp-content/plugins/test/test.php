<?php
/*
Plugin Name: Test
Description: Create test
Version: 1.0
Author: Author's name
Author URI: http://authorsite.com/
Plugin URI: http://authorsite.com/msp-helloworld
*/

add_action( 'wp_footer', 'my_function' );

function my_function() {

  $textvar = get_option('test_plugin_variable', 'hello world');
  echo $textvar;
}

add_action('admin_menu', 'my_admin_menu');

function my_admin_menu () {
  add_management_page('Footer Text', 'Footer Text', 'manage_options', __FILE__, 'footer_text_admin_page');
}

/*******************/
add_action( 'wp_head', 'slug_log_post_view' );

function slug_log_post_view() {
   //set the ID of the post you want to track here:
   $post_to_track = 1;
 
   //get the current post's ID & make sure it's a valid ID and it matches our ID
   $id = get_queried_object_id();
   if ( intval( $id ) > 0 && $post_to_track === $id ) {
 
      //check if current user is logged in and if so get the user ID
      if ( is_user_logged_in() ) {
         $user_id = get_current_user_id();
         $user_id = 'a user with the ID ' . $user_id;
      }
      else{
         $user_id = 'a user that was not logged in.';
      }
 
      //log the information
      write_log( "The post {$post_to_track} was accessed by {$user_id}" );
 
   }
 
}
/*********************/

function footer_text_admin_page () {

  $textvar = get_option('test_plugin_variable', 'hello world');
  $underpost = get_option('underpost', 'hello world');

  if (isset($_POST['change-clicked'])) {
    update_option( 'test_plugin_variable', $_POST['footertext'] );
    update_option( 'underpost', $_POST['underposttext'] );

    $textvar = get_option('test_plugin_variable', 'hello world');
    $underpost = get_option('underpost', 'hello world');

  }

  write_log( $underpost );
?>

<div class="wrap">
  <h1>Footer Text</h1>
  <p>This simple plugin will output some text to the footer of your template. Change the text below:</p>
  <form action="<?php echo str_replace('%7E', '~', $_SERVER['REQUEST_URI']); ?>" method="post">
  Footer Text:<input type="text" value="<?php echo $textvar; ?>" name="footertext" placeholder="hello world"><br />
  Under Post Text:<input type="text" value="<?php echo $underpost; ?>" name="underposttext" placeholder="underpost"><br />
  <input name="change-clicked" type="hidden" value="1" />
  <input type="submit" value="Change Text" />
  </form>
</div>

<?php
}
?>