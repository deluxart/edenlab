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
    <div class="cases_page">
        <div class="container">
            <div class="page_head">
                <h1 class="title"><?php the_title(); ?></h1>
                <p><?php the_field( 'description_cases_page' ); ?></p>
            </div>

            <div class="cases_page__list">
                <?php echo do_shortcode('[cases-list cats="fintech"]') ?>
            </div>

        </div>
    </div>

    <?php get_template_part('template-parts/contact-us', 'section'); ?>

<?php
get_footer();
