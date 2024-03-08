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
* Template Name: Privacy Policy
*/

get_header();
?>

	<main id="primary" class="privacy site-main">

		<div class="container">
            <div class="content">
                <section id="page_head" class="light">
                    <div class="container">
                        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                        <p>Last updated 07.12.2022</p>
                    </div>
                </section>
                <div class="blocks">
                    <?php if ( have_rows( 'text_blocks' ) ) : ?>
                        <?php while ( have_rows( 'text_blocks' ) ) : the_row(); ?>
                            <div class="block">
                                <div class="text">
                                    <?php if ( have_rows( 'title' ) ) : ?>
                                        <?php while ( have_rows( 'title' ) ) : the_row();
                                            $item_name = get_sub_field( 'heading' );
                                            $vowels = array( " " , "/", "." );
                                            $custom_id = mb_strimwidth(strtolower(str_replace($vowels, "_", $item_name)), 0, 20);
                                            ?>
                                            <h3 class="heading" id="<?php echo $custom_id; ?>"><?php the_sub_field( 'heading' ); ?></h3>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                    <?php the_sub_field( 'content' ); ?>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <?php get_template_part('template-parts/contact-us', 'section'); ?>
	</main><!-- #main -->

<?php
get_footer();
