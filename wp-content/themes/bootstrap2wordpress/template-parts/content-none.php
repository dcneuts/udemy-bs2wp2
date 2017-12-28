<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bootstrap_to_WordPress
 */

?>

<section class="feature-image feature-image-default-alt" data-type="background" data-speed="2">
	<h1 class="page-title"><?php esc_html_e( 'Nothing Found', 'bootstrap2wordpress' ); ?></h1>
</section>

<div class="container">
	<div id="primary" class="row">
		<main id="content" class="col-sm-8">
            <?php
            if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

				<p><?php printf( wp_kses( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'bootstrap2wordpress' ), array( 'a' => array( 'href' => array() ) ) ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

            <?php elseif ( is_search() ) : ?>

				<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'bootstrap2wordpress' ); ?></p>
                <?php
                get_search_form();

            else : ?>

				<p><?php esc_html_e( 'It seems we can’t find what you’re looking for. Perhaps searching can help.', 'bootstrap2wordpress' ); ?></p>
                <?php
                get_search_form();

            endif; ?>
		</main>


		<!-- SIDEBAR
        ================================================== -->
		<aside class="col-sm-4">
            <?php get_sidebar(); ?>
		</aside>

	</div>
</div>
