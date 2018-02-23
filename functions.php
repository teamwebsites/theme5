<?php
/**
 * Sage includes
 *
 * The $sage_includes array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 *
 * Please note that missing files will produce a fatal error.
 *
 * @link https://github.com/roots/sage/pull/1042
 */
$sage_includes = [
  'lib/assets.php',    // Scripts and stylesheets
  'lib/extras.php',    // Custom functions
  'lib/setup.php',     // Theme setup
  'lib/titles.php',    // Page titles
  'lib/wrapper.php',   // Theme wrapper class
  'lib/customizer.php' // Theme customizer
];

foreach ($sage_includes as $file) {
  if (!$filepath = locate_template($file)) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'sage'), $file), E_USER_ERROR);
  }

  require_once $filepath;
}
unset($file, $filepath);


/**
 * Proper way to enqueue scripts and style.css of individual theme
 */
function wpdocs_theme_name_scripts() {
    wp_enqueue_style('parent-theme', get_stylesheet_directory_uri() .'/requiredadd.css');
    wp_enqueue_style( 'style-name', get_stylesheet_uri() );
    // if we didn't register it, we HAVE to set the $src parameter!
}
add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts' );


function my_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

function my_login_stylesheet() {
    wp_enqueue_style( 'custom-login', get_stylesheet_directory_uri() . '/login.css' );
}
add_action( 'login_enqueue_scripts', 'my_login_stylesheet' );


add_action('customize_register', function($wp_customize) {
 
		class Headerstyle_Select_Control extends WP_Customize_Control {
			public $type = 'select';
			
			public function render_content() { ?>
			<label>
				<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
				<select <?php $this->link(); ?>>
					<option value="headerstyle1" <?php if($this->value() == 'headerstyle1') echo 'selected="selected"'; ?>>Style 1</option>
					<option value="headerstyle2" <?php if($this->value() == 'headerstyle2') echo 'selected="selected"'; ?>>Style 2</option>
					<option value="headerstyle3" <?php if($this->value() == 'headerstyle3') echo 'selected="selected"'; ?>>Style 3</option>
				</select>
			</label>
		<?php
			} //render_content()
		} //Select_Control()
 
 
        $wp_customize->add_section( 'header_section' , array(
        'title'      => __('Header','mytheme'),
        'priority'   => 25,
        ) );
		
		$wp_customize->add_setting('headerstyle', array('default'=>'headerstyle1'));
		
		$wp_customize->add_control( new Headerstyle_Select_Control($wp_customize, 'headerstyle', array(
			'label' => 'Header Style',
			'section' => 'header_section',
			'priority' => 1,
			'setting' => 'headerstyle'
		) ) );
		
		
		$wp_customize->add_section('homepagemainimagesec',array(
		'title'	=> __('Main Image','animals'),
		'panel' => 'homepagedesign_panel',
		'description'	=> __("The Lead section displays directly below the Header on the homepage.",'animals'),
		'priority'		=> 0
	));
	
	
	$wp_customize->add_setting( 'homepagemainimage', array('default'=>'https://teamwebsites.co.uk/images/soccer.jpg') );
	
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'homepagemainimage', array(
    'label'    => __( 'Main Image (Homepage)', 'animals' ),
    'default' => 'https://teamwebsites.co.uk/images/soccer.jpg',
    'description'	=> __("Will display as the background image for the Lead section on the homepage.",'animals'),
    'section'  => 'homepagemainimagesec',
    'settings' => 'homepagemainimage',
) ) );


$wp_customize->add_setting( 'hpmainimage_bgposition', array(
  'capability' => 'edit_theme_options',
  'sanitize_callback' => 'kalon_sanitize_select2',
  'default' => 'value1',
) );

$wp_customize->add_control( 'hpmainimage_bgposition', array(
  'type' => 'select',
  'section' => 'homepagemainimagesec', // Add a default or your own section
  'label' => __( 'Image Position (Main Image - Homepage)' ),
  'description' => __( "Alters the position of the image accordingly. <strong>Recommended:</strong> Centre" ),
  'choices' => array(
    'topleft' => __( 'Top Left' ),
    'topmiddle' => __( 'Top Middle' ),
    'topright' => __( 'Top Right' ),
    'middleleft' => __( 'Middle Left' ),
    'middlecentre' => __( 'Middle Centre' ),
    'mddleright' => __( 'Middle Right' ),
    'bttmleft' => __( 'Bottom Left' ),
    'bttmcentre' => __( 'Bottom Centre' ),
    'bttmright' => __( 'Bottom Right' ),
  ),
) );
		
	});