<?php 
	function build_options_page() { ?>
		<div class="wrap">
			<h2>Theme Settings</h2>
			<p>Update various settings throughout your website.</p>
			<form method="post" action="options.php" enctype="multipart/form-data">
				<?php settings_fields('theme_options'); ?>
				<?php do_settings_sections(__FILE__); ?>
				<p class="submit">
					<input name="Submit" type="submit" class="button-primary" value="<?php esc_attr_e('Save Changes'); ?>" />
				</p>
			</form>
		</div>
<?php }
	
add_action('admin_init', 'register_and_build_fields');

function register_and_build_fields() {
	register_setting('theme_options', 'theme_options', 'validate_setting');
	add_settings_section('homepage_settings', 'Homepage Settings', 'section_homepage', __FILE__);
	add_settings_section('footer_settings', 'Footer Settings', 'section_footer', __FILE__);
	function section_homepage() {}
	function section_footer() {}
	
	add_settings_field('jumbotron_text', 'Jumbotron Text', 'jumbotron_text', __FILE__, 'homepage_settings');
	
	add_settings_field('phonenumber', 'Phone Number', 'phonenumber', __FILE__, 'footer_settings');
	add_settings_field('facebookurl', 'Facebook URL', 'facebookurl', __FILE__, 'footer_settings');
	add_settings_field('googleurl', 'Google+ URL', 'googleurl', __FILE__, 'footer_settings');
	add_settings_field('twitterurl', 'Twitter URL', 'twitterurl', __FILE__, 'footer_settings');
}

function validate_setting($theme_options) {
	return $theme_options;
}
function jumbotron_text() {
	$options = get_option('theme_options');  echo "<textarea name='theme_options[button1text_setting]' type='text'>{$options['button1text_setting']}</textarea>";
}
function phonenumber() {
	$options = get_option('theme_options');  echo "<input name='theme_options[phonenumber]' type='text' value='{$options['phonenumber']}' />";
}
function facebookurl() {
	$options = get_option('theme_options');  echo "<input name='theme_options[facebookurl]' type='text' value='{$options['facebookurl']}' />";
}
function googleurl() {
	$options = get_option('theme_options');  echo "<input name='theme_options[googleurl]' type='text' value='{$options['googleurl']}' />";
}
function twitterurl() {
	$options = get_option('theme_options');  echo "<input name='theme_options[twitterurl]' type='text' value='{$options['twitterurl']}' />";
}
add_action('admin_menu', 'theme_options_page');
function theme_options_page() {  add_options_page('Theme Settings', 'Theme Settings', 'administrator', __FILE__, 'build_options_page');}
