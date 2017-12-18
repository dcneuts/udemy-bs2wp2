<?php

/* Template Name: Home Page */

get_header(); ?>

	<!-- get_template_part is used to pull in WP pieces -->

	<!-- Hero template part -->
<?php get_template_part('template-parts/content','hero'); ?>

	<!-- Opt-In template part -->
<?php get_template_part('template-parts/content','optin'); ?>

	<!-- Boost Your Income template part -->
<?php get_template_part('template-parts/content','boost'); ?>

	<!-- Who Benefits template part -->
<?php get_template_part('template-parts/content','benefits'); ?>

	<!-- Course Features template part -->
<?php get_template_part('template-parts/content','features'); ?>

	<!-- Project Features template part -->
<?php get_template_part('template-parts/content','projfeatures'); ?>

	<!-- Video Featurette template part -->
<?php get_template_part('template-parts/content','vidfeatures'); ?>

	<!-- Instructor template part -->
<?php get_template_part('template-parts/content','instructor'); ?>

	<!-- Testimonials template part -->
<?php get_template_part('template-parts/content','testimonials'); ?>

<?php get_footer(); ?>