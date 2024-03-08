<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Edenlab
 */

get_header();
?>

	<main id="primary" class="site-main errorPage">
    <div class="container">
		<section class="error-404 not-found">
			<header class="page-header">
				<h1 class="page-title">404</h1>
                <h3>Ooops! Page not found</h3>
                <p>Please check if the address is correct and try again</p>
			</header><!-- .page-header -->
            <div class="button">
                <a href="/" class="btn white">To main</a>
            </div>
		</section><!-- .error-404 -->
    </div>
	</main><!-- #main -->

<?php
get_footer();
