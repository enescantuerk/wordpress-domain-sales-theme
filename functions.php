<?php
/**
 * Domain Satış functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Domain_Satış
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.1' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function eccom_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Domain Satış, use a find and replace
		* to change 'eccom' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'eccom', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

    add_theme_support('post-thumbnails');




	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );


}
add_action( 'after_setup_theme', 'eccom_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function eccom_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'eccom_content_width', 640 );
}
add_action( 'after_setup_theme', 'eccom_content_width', 0 );


/**
 * Enqueue scripts and styles.
 */
function eccom_scripts() {
	wp_enqueue_style( 'eccom-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'eccom-style', 'rtl', 'replace' );

	wp_enqueue_script( 'eccom-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

}
add_action( 'wp_enqueue_scripts', 'eccom_scripts' );


require_once get_template_directory() .'/comments-walker.php';


/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * TGM Plugin Activation
 */
require get_template_directory() . '/inc/class-tgm-plugin-activation.php';
require get_template_directory() . '/inc/tgmpa.php';


/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}




// Settings Page: ThemePanel
// Retrieving values: get_option( 'your_field_id' )
class ThemePanel_Settings_Page {

    public function __construct() {
        add_action( 'admin_menu', array( $this, 'wph_create_settings' ) );
        add_action( 'admin_init', array( $this, 'wph_setup_sections' ) );
        add_action( 'admin_init', array( $this, 'wph_setup_fields' ) );
    }

    public function wph_create_settings() {
        $page_title = 'Theme Settings';
        $menu_title = 'Theme Panel';
        $capability = 'manage_options';
        $slug = 'ThemePanel';
        $callback = array($this, 'wph_settings_content');
        $icon = 'dashicons-welcome-widgets-menus';
        $position = 60;
        add_menu_page($page_title, $menu_title, $capability, $slug, $callback, $icon, $position);

    }

    public function wph_settings_content() { ?>
        <div class="wrap">
            <h1>Theme Panel</h1>
            <?php settings_errors(); ?>
            <form method="POST" action="options.php">
                <?php
                settings_fields( 'ThemePanel' );
                do_settings_sections( 'ThemePanel' );
                submit_button();
                ?>
            </form>
        </div> <?php
    }

    public function wph_setup_sections() {
        add_settings_section( 'ThemePanel_section', 'Domain sales theme settings page', array(), 'ThemePanel' );
    }

    public function wph_setup_fields() {
        $fields = array(
            array(
                'section' => 'ThemePanel_section',
                'label' => 'Domain',
                'placeholder' => 'domain.com',
                'id' => 'eccom_domain_name',
                'desc' => 'Enter domain name',
                'type' => 'text',
            ),

            array(
                'section' => 'ThemePanel_section',
                'label' => 'Domain Badge',
                'placeholder' => 'For Sale!',
                'id' => 'eccom_domain_badge',
                'desc' => 'Enter domain badge',
                'type' => 'text',
            ),

            array(
                'section' => 'ThemePanel_section',
                'label' => 'Button Text',
                'placeholder' => 'For Sale!',
                'id' => 'eccom_button_text',
                'desc' => 'Enter button text',
                'type' => 'text',
            ),

            array(
                'section' => 'ThemePanel_section',
                'label' => 'Description',
                'placeholder' => 'Enter a description',
                'id' => 'eccom_domain_description',
                'type' => 'textarea',
            ),

            array(
                'section' => 'ThemePanel_section',
                'label' => 'Sub Description',
                'placeholder' => 'Enter a sub description',
                'id' => 'eccom_domain_sub_description',
                'type' => 'text',
            ),

            array(
                'section' => 'ThemePanel_section',
                'label' => 'Email address',
                'placeholder' => 'contact@domain.com',
                'id' => 'eccom_contact_email_address',
                'type' => 'email',
            ),

            array(
                'section' => 'ThemePanel_section',
                'label' => 'Telephone',
                'placeholder' => '+90555XXXXXXXA',
                'id' => 'eccom_contact_telephone',
                'type' => 'tel',
            ),
            array(
                'section' => 'ThemePanel_section',
                'label' => 'Style Settings',
                'id' => 'eccom_alert_3',
                'type' => 'alert',
            ),
            array(
                'section' => 'ThemePanel_section',
                'label' => 'General Color',
                'id' => 'eccom_bg_color',
                'type' => 'color',
            ),
            array(
                'section' => 'ThemePanel_section',
                'label' => 'Background color 1',
                'placeholder' => '#fcd702',
                'id' => 'eccom_bg_color_one',
                'type' => 'color',
            ),
            array(
                'section' => 'ThemePanel_section',
                'label' => 'Background color 2',
                'placeholder' => '#ea4201',
                'id' => 'eccom_bg_color_two',
                'type' => 'color',
            ),
            array(
                'section' => 'ThemePanel_section',
                'label' => 'Links',
                'id' => 'eccom_alert_4',
                'type' => 'alert',
            ),
            array(
                'section' => 'ThemePanel_section',
                'label' => 'Facebook Link',
                'placeholder' => 'https://facebook.com/facebook',
                'id' => 'eccom_fb_link',
                'type' => 'text',
            ),
            array(
                'section' => 'ThemePanel_section',
                'label' => 'Instagram Link',
                'placeholder' => 'https://instagram.com/instagram',
                'id' => 'eccom_ig_link',
                'type' => 'text',
            ),
            array(
                'section' => 'ThemePanel_section',
                'label' => 'Twitter Link',
                'placeholder' => 'https://twitter.com/twitter',
                'id' => 'eccom_tw_link',
                'type' => 'text',
            ),
            array(
                'section' => 'ThemePanel_section',
                'label' => 'Web Site Link',
                'placeholder' => 'https://domain.com/',
                'id' => 'eccom_gb_link',
                'type' => 'text',
            ),
        );
        foreach( $fields as $field ){
            add_settings_field( $field['id'], $field['label'], array( $this, 'wph_field_callback' ), 'ThemePanel', $field['section'], $field );
            register_setting( 'ThemePanel', $field['id'] );
        }
    }


    public function wph_field_callback( $field ) {
        $value = get_option( $field['id'] );
        $placeholder = '';
        if ( isset($field['placeholder']) ) {
            $placeholder = $field['placeholder'];
        }
        switch ( $field['type'] ) {

            case 'alert':
                break;


            case 'textarea':
                printf( '<textarea name="%1$s" id="%1$s" placeholder="%2$s" rows="5" cols="50">%3$s</textarea>',
                    $field['id'],
                    $placeholder,
                    $value
                );
                break;

            default:
                printf( '<input name="%1$s" id="%1$s" type="%2$s" placeholder="%3$s" value="%4$s" />',
                    $field['id'],
                    $field['type'],
                    $placeholder,
                    $value
                );
        }
        if( isset($field['desc']) ) {
            if( $desc = $field['desc'] ) {
                printf( '<p class="description">%s </p>', $desc );
            }
        }
    }

}
new ThemePanel_Settings_Page();



// Settings Page: FormSettings
// Retrieving values: get_option( 'your_field_id' )
class FormSettings_Settings_Page {

    public function __construct() {
        add_action( 'admin_menu', array( $this, 'wph_create_settings' ) );
        add_action( 'admin_init', array( $this, 'wph_setup_sections' ) );
        add_action( 'admin_init', array( $this, 'wph_setup_fields' ) );
    }

    public function wph_create_settings() {
        $page_title = 'Form & Mail settings';
        $menu_title = 'Form Settings';
        $capability = 'manage_options';
        $slug = 'FormSettings';
        $callback = array($this, 'wph_settings_content');
        add_options_page($page_title, $menu_title, $capability, $slug, $callback);

    }

    public function wph_settings_content() { ?>
        <div class="wrap">
            <h1>Form Settings</h1>
            <?php settings_errors(); ?>
            <form method="POST" action="options.php">
                <?php
                settings_fields( 'FormSettings' );
                do_settings_sections( 'FormSettings' );
                submit_button();
                ?>
            </form>
        </div> <?php
    }

    public function wph_setup_sections() {
        add_settings_section( 'FormSettings_section', 'Edit form details and mail server settings', array(), 'FormSettings' );
    }

    public function wph_setup_fields() {
        $fields = array(

            array(
                'section' => 'FormSettings_section',
                'label' => 'Contact Form 7 Settings',
                'id' => 'eccom_alert_1',
                'type' => 'alert',
            ),

            array(
                'section' => 'FormSettings_section',
                'label' => 'Use contact form?',
                'id' => 'eccom_contact_form_control',
                'type' => 'checkbox',
            ),
            array(
                'section' => 'FormSettings_section',
                'label' => 'Contact Form ID',
                'id' => 'eccom_form_id',
                'type' => 'text',
            ),


            array(
                'section' => 'FormSettings_section',
                'label' => 'Title Settings',
                'id' => 'eccom_alert_2',
                'type' => 'alert',
            ),
            array(
                'section' => 'FormSettings_section',
                'label' => 'Form Title',
                'placeholder' => 'Get Contact',
                'id' => 'eccom_form_title',
                'type' => 'text',
            ),
            array(
                'section' => 'FormSettings_section',
                'label' => 'Form Description',
                'id' => 'eccom_form_description',
                'type' => 'text',
            ),
            array(
                'section' => 'FormSettings_section',
                'label' => 'Form Description',
                'id' => 'eccom_form_description',
                'type' => 'text',
            ),
            array(
                'section' => 'FormSettings_section',
                'label' => 'Right Area Custom HTML',
                'id' => 'eccom_mail_text',
                'type' => 'textarea',
            ),
        );
        foreach( $fields as $field ){
            add_settings_field( $field['id'], $field['label'], array( $this, 'wph_field_callback' ), 'FormSettings', $field['section'], $field );
            register_setting( 'FormSettings', $field['id'] );
        }
    }
    public function wph_field_callback( $field ) {
        $value = get_option( $field['id'] );
        $label = get_option( $field['label'] );
        $placeholder = '';
        if ( isset($field['placeholder']) ) {
            $placeholder = $field['placeholder'];
        }
        switch ( $field['type'] ) {

            case 'checkbox':
                printf('<input %s id="%s" name="%s" type="checkbox" value="1">',
                    $value === '1' ? 'checked' : '',
                    $field['id'],
                    $field['id']
                );
                break;

            case 'textarea':
                printf( '<textarea name="%1$s" id="%1$s" placeholder="%2$s" rows="5" cols="50">%3$s</textarea>',
                    $field['id'],
                    $placeholder,
                    $value
                );
                break;

            case 'alert':
                break;



            default:
                printf( '<input name="%1$s" id="%1$s" type="%2$s" placeholder="%3$s" value="%4$s" />',
                    $field['id'],
                    $field['type'],
                    $placeholder,
                    $value
                );
        }
        if( isset($field['desc']) ) {
            if( $desc = $field['desc'] ) {
                printf( '<p class="description">%s </p>', $desc );
            }
        }
    }

}
new FormSettings_Settings_Page();




function redirect_to_home( $query ){
    if(is_archive() ) {
        wp_redirect( home_url() );
        exit;
    }
}
add_action( 'parse_query', 'redirect_to_home' );

