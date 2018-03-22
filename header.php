<?php
/**
 * Header template file for the theme
 *
 * @package hikari
 */

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title><?php bloginfo( 'name' ); ?></title>

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<div class="content">

<?php if ( is_front_page() ) {
	get_template_part( 'template-parts/landing' );
} ?>
