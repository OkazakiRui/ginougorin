<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<link rel="stylesheet" href="<?php echo get_theme_file_uri();?>/css/style.css">
<link rel="stylesheet" href="<?php echo get_theme_file_uri();?>/css/tailwind.min.css">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>