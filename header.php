<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Domain_Satış
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;500&display=swap" rel="stylesheet">
    <?php
    if(!empty(get_option('eccom_bg_color'))){
        ?>
        <style>
            :root{
                --generalColor: <?php echo get_option('eccom_bg_color'); ?> !important;
            }
        </style>
    <?php
    }
    ?>
    <?php if(!empty(get_option('eccom_bg_color_two')) || !empty(get_option('eccom_bg_color_one'))) {
        ?>
        <style>
            .primary-gredient, .left-bg-area, .sea .wave {
                background: -webkit-linear-gradient(left, <?php echo get_option('eccom_bg_color_one'); ?>, <?php echo get_option('eccom_bg_color_two'); ?>) !important;
                /* Webkit browsers */
                background: -moz-linear-gradient(left, <?php echo get_option('eccom_bg_color_one'); ?>, <?php echo get_option('eccom_bg_color_two'); ?>)) !important;
                /* Firefox(old) */
                background: -o-linear-gradient(left, <?php echo get_option('eccom_bg_color_one'); ?>, <?php echo get_option('eccom_bg_color_two'); ?>)) !important;
                /* Opera(old) */
                background: -ms-linear-gradient(left, <?php echo get_option('eccom_bg_color_one'); ?> 0%, <?php echo get_option('eccom_bg_color_two'); ?>) 100%) !important;
                /* IE10 */
                filter: progid:DXImageTransform.Microsoft.gradient(GradientType=0, start-colorstr=<?php echo get_option('eccom_bg_color_one'); ?>, end-colorstr=<?php echo get_option('eccom_bg_color_two'); ?>)) !important;
                /* IE9 */
                ms-filter: "progid:DXImageTransform.Microsoft.gradient (GradientType=0, start-colorstr=<?php echo get_option('eccom_bg_color_one'); ?>, end-colorstr=<?php echo get_option('eccom_bg_color_two'); ?>))" !important;
                /* IE8 */
                background: linear-gradient(left, <?php echo get_option('eccom_bg_color_one'); ?> 0%, <?php echo get_option('eccom_bg_color_two'); ?>) 100%) !important;
                /* W3C */ }
        </style>

    <?php
    }
    ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'eccom' ); ?></a>

