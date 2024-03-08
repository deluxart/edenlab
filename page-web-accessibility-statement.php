<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Edenlab
 */

/*
* Template Name: Web Accessibility Statement
*/


get_header();
?>

	<main id="primary" class="site-main was-page">

		<div class="content">
			<?php
			while ( have_posts() ) :
				the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<section id="page_head">
						<div class="container">
							<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
							<!--             <p>Our primary focus is healthcare data interoperability based on the HL7 FHIR standard. </p> -->
						</div>
					</section>

					<div class="container">
						<div class="content-text">
						<div class="text"><?php the_content(); ?></div>
						</div>
					</div><!-- .entry-content -->

				</article><!-- #post-<?php the_ID(); ?> -->


			<?php endwhile; ?>
		</div>
		<?php get_template_part('template-parts/contact-us', 'section'); ?>
	</main><!-- #main -->

<?php
get_footer();
