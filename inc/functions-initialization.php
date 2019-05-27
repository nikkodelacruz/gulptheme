<?php 

/**
 * Global JS variable
 */
if ( ! function_exists( 'global_js_var' ) ) 
{
	function global_js_var() 
	{
		$custom_logo_id = get_theme_mod( 'custom_logo' );
        $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
	?>
		<script type="text/javascript">
			var ajaxurl = '<?php echo esc_js( admin_url('admin-ajax.php') ); ?>';
			var themeurl = '<?php echo esc_js( get_template_directory_uri() ); ?>';
			var home_url = "<?php echo esc_js( home_url() ); ?>";
	        var site_name = "<?php echo esc_js( get_bloginfo('name') ); ?>";
	        var logo_url = "<?php echo esc_js( $logo[0] ); ?>";
		</script>
	<?php
	}
	add_action('wp_head','global_js_var');
}