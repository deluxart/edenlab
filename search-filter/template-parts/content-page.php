<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Edenlab
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <section id="page_head">
        <div class="container">
            <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
            <p>Our primary focus is healthcare data interoperability based on the HL7 FHIR standard. </p>
        </div>
    </section>

<!--	--><?php //edenlab_post_thumbnail(); ?>

	<div class="container">
		<?php
		the_content();

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'edenlab' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
