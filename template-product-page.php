<?php
/**
 * Template Name: Product Page Template
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Moose_Framework_2
 */

get_header(); ?>

<section id="SECTION-2">

	<?php get_template_part( '_mfw-modules/product-block-canibus-product' ); ?>
	<?php //get_template_part( '_mfw-modules-ACF/hero-story-block-mfw-ACF-001' ); ?>
	
</section>

<section id="SECTION-15">

	<?php get_template_part( '_mfw-modules/CTA-block-canibus-home' ); ?>
	<?php //get_template_part( '_mfw-modules-ACF/slider-block-mfw-ACF-001' ); ?>
	
</section>

<section id="SECTION-16">

	<?php get_template_part( '_mfw-modules/social-proof-block-canibus-home' ); ?>
	<?php //get_template_part( '_mfw-modules-ACF/slider-block-mfw-ACF-001' ); ?>
	
</section>

<section id="SECTION-5">

	<?php get_template_part( '_mfw-modules/subscription-block-canibus-home' ); ?>
	<?php //get_template_part( '_mfw-modules-ACF/slider-block-mfw-ACF-001' ); ?>
	
</section>

<section id="SECTION-18">

	<?php get_template_part( '_mfw-modules/disclaimer-block-canibus-home' ); ?>
	<?php //get_template_part( '_mfw-modules-ACF/slider-block-mfw-ACF-001' ); ?>
	
</section>

<section id="SECTION-19">

	<?php //get_template_part( '_mfw-modules/general-block-canibus-home' ); ?>
	<?php //get_template_part( '_mfw-modules-ACF/slider-block-mfw-ACF-001' ); ?>
	
</section>


<?php
get_footer();
























