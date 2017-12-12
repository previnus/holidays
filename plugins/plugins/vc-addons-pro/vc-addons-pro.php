<?php
/*
Plugin Name: Visual Composer Addons Pro
Plugin URI: http://themebon.com/items/visual-composer-shortcodes-pro/
Description: Visual Composer Shortcodes wordpress is an impressive modern shortcode collections. 
Author: themebon
Author URI: http://themebon.com/
License: GPLv2 or later
Text Domain: asvc
Version: 1.0.0
*/

// Don't load directly
if (!defined('ABSPATH')){die('-1');}

include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
if ( is_plugin_active( 'js_composer/js_composer.php' ) ){
    
/* Constants */
define( 'ASVC_URL', rtrim( plugin_dir_url( __FILE__ ), '/' ) );
define( 'ASVC_DIR', rtrim( plugin_dir_path( __FILE__ ), '/' ) );
if ( ! function_exists( 'prime_WordPressCheckup' ) ) {
    function prime_WordPressCheckup( $version = '3.8' ) {
        global $wp_version;
        if ( version_compare( $wp_version, $version, '>=' ) ) {
            return "true";
        } else {
            return "false";
        }
    }
}

// Admin Style CSS
function asvc_admin_enqeue() {
    
    wp_enqueue_style( 'asvc_admin_css', plugins_url( 'admin/admin.css', __FILE__ ) );
}
add_action( 'admin_enqueue_scripts', 'asvc_admin_enqeue' );


//params
require_once 'admin/params/index.php';


require_once( 'shortcodes/info-box/info-box.php' );
require_once( 'shortcodes/flip-box/flip-box.php' );
require_once( 'shortcodes/flip-box-two/flip-box-two.php' );
require_once( 'shortcodes/before-after/before-after.php' );
require_once( 'shortcodes/service-box/service-box.php' );
require_once( 'shortcodes/promo-box/promo-box.php' );
require_once( 'shortcodes/hover-effects/hover-effects.php' );
require_once( 'shortcodes/video-cover/video-cover.php' );
require_once( 'shortcodes/call-to-action/call-to-action.php' );
require_once( 'shortcodes/tooltip/tooltip.php' );
require_once( 'shortcodes/dropcaps/dropcaps.php' );
require_once( 'shortcodes/divider/divider.php' );
require_once( 'shortcodes/image-caption/image-caption.php' );
require_once( 'shortcodes/team/team.php' );
require_once( 'shortcodes/profile-card/profile-card.php' );
require_once( 'shortcodes/contact-info/contact-info.php' );
require_once( 'shortcodes/moving-image/moving-image.php' );



if (!class_exists('Amazing_Shortcodes_VC')) {
    class Amazing_Shortcodes_VC {
        function Amazing_Shortcodes_VC() {

            if(!function_exists('asvc_infobox_shortcode_function')) $asvc_infobox = new ASVC_InfoBox();
            if(!function_exists('asvc_flipbox_shortcode_function')) $asvc_flipbox = new ASVC_FlipBox();
            if(!function_exists('asvc_flipbox_two_shortcode_function')) $asvc_flipbox_two = new ASVC_FlipBox_Two();
            if(!function_exists('asvc_before_after_shortcode_function')) $asvc_before_after = new ASVC_BEFORE_AFTER();
            if(!function_exists('asvc_servicebox_shortcode_function')) $service_box = new ASVC_ServiceBox();
            if(!function_exists('asvc_promobox_shortcode_function')) $promo_box = new ASVC_PrmoBox();
            if(!function_exists('asvc_hover_effects')) $hover_effects = new ASVC_HoverEffects();
            if(!function_exists('asvc_video_cover')) $video_cover = new ASVC_Video_Cover();
            if(!function_exists('asvc_call_to_action')) $call_to_action = new ASVC_CallToAction();
            if(!function_exists('asvc_tooltip')) $tooltip = new ASVC_Tooltip();
            if(!function_exists('asvc_dropcaps')) $dropcaps = new ASVC_DropCaps();
            if(!function_exists('asvc_divider')) $divider = new ASVC_Divider();
            if(!function_exists('asvc_image_caption')) $image_caption = new ASVC_Image_Caption();
            if(!function_exists('asvc_team')) $team = new ASVC_Team();
            if(!function_exists('asvc_profile-card')) $profile_card = new ASVC_ProfileCard();
            if(!function_exists('asvc_contact_info')) $contact_info = new ASVC_ContactInfo();
            if(!function_exists('asvc_moving_image')) $moving_image = new ASVC_MovingImage();
        }
    }
    function Amazing_Shortcodes_VC_init(){
        if(class_exists('Amazing_Shortcodes_VC')) $Amazing_Shortcodes_VC = new Amazing_Shortcodes_VC();
    }
    add_action('init', 'Amazing_Shortcodes_VC_init');
    }


    }
// Check If VC is activate
else {
    function asvc_required_plugin() {
        if ( is_admin() && current_user_can( 'activate_plugins' ) &&  !is_plugin_active( 'js_composer/js_composer.php' ) ) {
            add_action( 'admin_notices', 'asvc_required_plugin_notice' );

            deactivate_plugins( plugin_basename( __FILE__ ) ); 

            if ( isset( $_GET['activate'] ) ) {
                unset( $_GET['activate'] );
            }
        }

    }
add_action( 'admin_init', 'asvc_required_plugin' );

    function asvc_required_plugin_notice(){
        ?><div class="error"><p>Error! you need to install or activate the <a target="_blank" href="https://codecanyon.net/item/visual-composer-page-builder-for-wordpress/242431?ref=themebonwp">Visual Composer</a> plugin to run "<span style="font-weight: bold;">Hover Effects For Visual Composer</span>" plugin.</p></div><?php
    }
}
?>