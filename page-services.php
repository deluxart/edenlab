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
* Template Name: Services
*/

get_header();
?>

    <section id="page_head">
        <div class="container">
            <h1>Our services</h1>
            <p>Our core expertise is custom software development for high-load projects based on the FHIR Standard</p>
        </div>
    </section>

    <div class="products_page">


        <section id="products" class="services">
            <div class="container">
                <div class="content">
                    <?php echo do_shortcode('[services-list]') ?>
                </div>
            </div>
        </section>

<?php if ( have_rows( 'how_we_work_services' ) ) : ?>
    <?php while ( have_rows( 'how_we_work_services' ) ) : the_row(); ?>
        <section id="how_we_work">
            <div class="container">
                <div class="title">
                    <h2><?php the_sub_field( 'section_title_services' ); ?></h2>
                    <p><?php the_sub_field( 'section_description_services' ); ?></p>
                </div>

                <?php if ( have_rows( 'items_services' ) ) : ?>
                <div class="list">
                    <ul>
                            <?php while ( have_rows( 'items_services' ) ) : the_row(); ?>
                                <li>
                                    <a data-name="<?php the_sub_field( 'target' ); ?>" class="btn-inline da-modal"><?php the_sub_field( 'title' ); ?></a>
                                </li>
                            <?php endwhile; ?>
                    </ul>
                </div>
                <?php endif; ?>
            </div>
        </section>
    <?php endwhile; ?>
<?php endif; ?>
    </div>

    <?php get_template_part('template-parts/contact-us', 'section'); ?>




<?php if ( have_rows( 'how_we_work_services' ) ) : ?>
    <?php while ( have_rows( 'how_we_work_services' ) ) : the_row(); ?>
        <?php if ( have_rows( 'items_services' ) ) : ?>
            <?php while ( have_rows( 'items_services' ) ) : the_row(); ?>

                <div id="<?php the_sub_field( 'target' ); ?>" class="daModal da-modal-popup">
                    <?php if ( have_rows( 'modal_content' ) ) : ?>
                        <?php while ( have_rows( 'modal_content' ) ) : the_row(); ?>
                            <div class="da-modal-inner">
                                <div class="container">
<!--                                    <div class="da-modal-title"><h2>--><?php //the_sub_field( 'modal_title' ); ?><!--</h2></div>-->
                                    <div class="da-modal-content services">
                                        <div class="text-page">
                                            <h2><?php the_sub_field( 'modal_title' ); ?></h2>
                                            <?php the_sub_field( 'modal_content' ); ?>
                                        </div>
                                    </div>
                                    <!--                        <button class="da-modal-close"><img src="--><?php //echo get_template_directory_uri(); ?><!--/assets/images/close_modal.svg" alt=""></button>-->
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            <?php endwhile; ?>
        <?php else : ?>
            <?php // no rows found ?>
        <?php endif; ?>
    <?php endwhile; ?>
<?php endif; ?>


<?php
get_footer();
