<?php
	function ra_custom_login_logo() { ?>
	    <style type="text/css">
	        .login h1 a {
	            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/ra-logo.svg);
	            padding-bottom: 6px;
	            background-size: 64px;
	            height: 64px;
	        }
	    </style>
	<?php }
	add_action( 'login_enqueue_scripts', 'ra_custom_login_logo' );
