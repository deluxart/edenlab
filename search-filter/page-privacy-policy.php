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

get_header();
?>

	<main id="primary" class="site-main">

		<div class="container">
            <section id="page_head" class="light">
                <div class="container">
                    <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                    <p>Our primary focus is healthcare data interoperability based on the HL7 FHIR standard. </p>
                </div>
            </section>
            <div class="text-page">
                <?php
                the_content();
                ?>
            </div>
        </div>
        <?php get_template_part('template-parts/contact-us', 'section'); ?>
	</main><!-- #main -->

<?php
get_footer();
