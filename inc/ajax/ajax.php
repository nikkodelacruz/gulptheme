<?php 

// Datatype html
function action_name1() {

	  if ( ! check_ajax_referer( 'acme-security-nonce', 'security' ) ) {
    wp_send_json_error( 'Invalid security token sent.' );
    wp_die();
  }
  
  // The rest of the function that does actual work.

    $post_name = $_POST['post_name'];

    echo $post_name;

    die();
}
add_action('wp_ajax_action_name1', 'action_name1');
add_action('wp_ajax_nopriv_action_name1', 'action_name1');


// Datatype json
function action_name2() {

	$json = array();

	$confirmation = wp_send_json($json);

	return $confirmation;

}
add_action('wp_ajax_action_name2', 'action_name2');
add_action('wp_ajax_nopriv_action_name2', 'action_name2');
