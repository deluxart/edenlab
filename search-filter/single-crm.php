<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Edenlab
 */

get_header();
?>
    <div class="cases_page crm">
        <div class="cases_page__single">
            <div class="head">
                <div class="container">
                    <span class="tag"><?php the_field( 'case_tag_head' ); ?></span>
                    <h1 class="title"><?php the_title(); ?></h1>
                    <p><?php the_field( 'case_description' ); ?></p>

                    <div class="task">
                        <span class="title">Background</span>
                        <p><?php the_field( 'case_task' ); ?></p>
                    </div>
                </div>
            </div>
            <div class="process crm<?php if (get_field( 'section_style_process' ) == 'list') { ?> list<?php } ?>">
                <div class="container">
                    <div class="title<?php if (get_field( 'section_style_process' ) == 'cards') { ?> blocks<?php } ?>">
                        <h3><?php the_field( 'section_title_results' ); ?></h3>
                    </div>
                    <?php if (get_field( 'section_style_process' ) == 'cards') { ?>
                        <?php if ( have_rows( 'cards_results' ) ) : ?>
                        <div class="blocks crm">
                            <?php while ( have_rows( 'cards_results' ) ) : the_row(); ?>
                                <div class="block">
                                    <span></span>
                                    <h4><?php the_sub_field( 'card_title' ); ?></h4>
                                    <p><?php the_sub_field( 'card_description' ); ?></p>
                                </div>
                            <?php endwhile; ?>
                        </div>
                        <?php endif; ?>
                    <?php } else { ?>

                    <?php if ( have_rows( 'list_results' ) ) : ?>
                    <div class="listResults">
                        <ul>
                        <?php while ( have_rows( 'list_results' ) ) : the_row(); ?>
                            <li>
                                <?php the_sub_field( 'item' ); ?>
                            </li>
                        <?php endwhile; ?>
                        </ul>
                    </div>
                    <?php endif; ?>


                    <?php } ?>
                </div>
            </div>

            <section id="related__cases">
                <div class="container">
                    <h2>More cases</h2>
                    <?php echo do_shortcode('[crm-list]') ?>
                </div>
            </section>
        </div>
    </div>

<?php get_template_part('template-parts/contact-us', 'section'); ?>

<?php
get_footer();
