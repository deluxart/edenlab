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
    <div class="cases_page">
        <div class="cases_page__single">
            <div class="head">
                <div class="container">
                    <div class="head__row">
                        <div class="image">
                            <?php $case_image = get_field( 'case_image' ); ?>
                            <?php if ( $case_image ) : ?>
                                <img src="<?php echo esc_url( $case_image['url'] ); ?>" alt="<?php echo esc_attr( $case_image['alt'] ); ?>" />
                            <?php endif; ?>
                        </div>
                        <div class="text">
                        <div class="breadcrumb">
                            <div>
                                <?php if(function_exists('bcn_display')) { bcn_display(); } ?>
                            </div>
                        </div>
                        <div>
                            <span class="tag"><?php the_field( 'case_tag_head' ); ?></span>
                        </div>
                        <h1 class="title"><?php the_title(); ?></h1>
                        <?php if (get_field( 'case_description' )) { ?>
                        <div class="description"><?php the_field( 'case_description' ); ?></div>
                        <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="nav_sections_wrap">
            <div class="container">
            <div class="nav_sections<?php if ( get_field( 'enable_page_navigation' ) == 1 ) : ?> enabled<?php endif; ?>">
            <?php if ( get_field( 'enable_page_navigation' ) == 1 ) : ?>
                <div class="page_nav">
                    <ul id="case-nav">
                        <li><a href="#task">Task</a></li>
                        <li><a href="#challenges">Challenge</a></li>
                        <li><a href="#process">The process</a></li>
                        <li><a href="#technoloy">Technology stack</a></li>
                        <li><a href="#results">Results</a></li>
                    </ul>
                </div>
            <?php endif; ?>
                <div>
            <?php if (get_field( 'challenges' )) { ?>
            <div class="challenges">
                <div class="container">
                    <?php if (get_field( 'case_task' )) { ?>
                        <div class="task" id="task">
                            <h3>Task</h3>
                            <?php the_field( 'case_task' ); ?>
                        </div>
                    <?php } ?>
                    <div class="challenges" id="challenges">
                        <h3><?php the_field( 'section_title_challenges' ); ?></h3>
                        <?php the_field( 'challenges' ); ?>
                    </div>
                </div>
            </div>
            <?php } ?>
            <?php if (have_rows( 'cards_process' ) || have_rows( 'blocks_process' )) { ?>
            <div class="process" id="process">
                <div class="container">
                    <h3><?php the_field( 'section_title_process' ); ?></h3>

                    <?php if (get_field( 'section_style_process' ) == 'cards') { ?>
                        <?php if ( have_rows( 'cards_process' ) ) : ?>
                        <div class="blocks">
                            <?php while ( have_rows( 'cards_process' ) ) : the_row(); ?>
                                <div class="block">
                                    <span>step</span>
                                    <?php the_sub_field( 'step_text' ); ?>
                                </div>
                            <?php endwhile; ?>
                        </div>
                        <?php endif; ?>
                    <?php } else { ?>

                    <?php if ( have_rows( 'blocks_process' ) ) : ?>
                    <div class="cards">
                        <?php while ( have_rows( 'blocks_process' ) ) : the_row(); ?>
                        <div class="card">
                            <?php if (get_sub_field( 'before_title' )) { ?>
                                <h4 class="tc" style="text-align: center"><?php the_sub_field( 'before_title' ); ?></h4>
                            <?php } ?>
                            <?php $before_image = get_sub_field( 'before_image' ); ?>
                            <?php if ( $before_image ) : ?>
                                <img src="<?php echo esc_url( $before_image['url'] ); ?>" style="margin-bottom: 20px" alt="<?php echo esc_attr( $before_image['alt'] ); ?>" />
                            <?php endif; ?>
                            <?php if (get_sub_field( 'step_title' )) { ?>
                                <h3><?php the_sub_field( 'step_title' ); ?></h3>
                            <?php } ?>
                            <div class="cont<?php if ( get_sub_field( 'two_columns' ) == 1 ) : ?> two_columns<?php endif; ?>">
                                <?php if ( have_rows( 'challenges_new' ) ) : ?>
                                    <?php while ( have_rows( 'challenges_new' ) ) : the_row(); ?>
                                    <?php if (get_sub_field( 'title' )) { ?>
                                    <div>
                                        <h4><?php the_sub_field( 'title' ); ?></h4>
                                        <div class="text"><?php the_sub_field( 'text' ); ?></div>
                                    </div>
                                        <?php } ?>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                                <?php if ( have_rows( 'solutions_new' ) ) : ?>
                                    <?php while ( have_rows( 'solutions_new' ) ) : the_row(); ?>
                                    <?php if (get_sub_field( 'title' )) { ?>
                                    <div>
                                        <h4><?php the_sub_field( 'title' ); ?></h4>
                                        <div class="text"><?php the_sub_field( 'text' ); ?></div>
                                    </div>
                                    <?php } ?>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                        <?php endwhile; ?>
                    </div>
                    <?php endif; ?>


                    <?php } ?>
                </div>
            </div>
            <?php } ?>
            <?php if ( get_field( 'enable_section_key_parameters' ) == 1 ) : ?>
            <div class="parameters">
                <div class="container">
                    <h3><?php the_field( 'section_title_key_parameters' ); ?></h3>
                    <ul>
                        <?php if ( have_rows( 'list_key_parameters' ) ) : ?>
                            <?php while ( have_rows( 'list_key_parameters' ) ) : the_row(); ?>
                                <li><a href="<?php the_sub_field( 'item_target' ); ?>"><?php the_sub_field( 'item_title' ); ?></a></li>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
            <?php endif; ?>
            <?php if (have_rows( 'logos_technology' )) { ?>
            <div class="stack" id="technoloy">
                <div class="container">
                    <h3><?php the_field( 'section_title_technology' ); ?></h3>
                    <ul>
                        <?php if ( have_rows( 'logos_technology' ) ) : ?>
                            <?php while ( have_rows( 'logos_technology' ) ) : the_row(); ?>
                                <?php $logo = get_sub_field( 'logo' ); ?>
                                <?php if ( $logo ) : ?>
                                    <li><img src="<?php echo esc_url( $logo['url'] ); ?>" alt="<?php echo esc_attr( $logo['alt'] ); ?>" /></li>
                                <?php endif; ?>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
            <?php } ?>
            <div class="results" id="results">
                <div class="container">
                    <div class="results__block">
                        <h3><?php the_field( 'section_title_results' ); ?></h3>


                    <?php if (get_field( 'section_style_results' ) == 'counters') { ?>

                        <?php if ( have_rows( 'counters_results' ) ) : ?>
                        <div class="items">
                            <?php while ( have_rows( 'counters_results' ) ) : the_row(); ?>
                                <div class="item">
                                    <h2><?php the_sub_field( 'title' ); ?></h2>
                                    <p><?php the_sub_field( 'description' ); ?></p>
                                </div>
                            <?php endwhile; ?>
                        </div>
                        <?php endif; ?>

                    <?php } elseif (get_field( 'section_style_results' ) == 'list') { ?>
                        <?php if ( have_rows( 'list_results' ) ) : ?>
                        <div class="list">
                            <ul>
                                <?php while ( have_rows( 'list_results' ) ) : the_row(); ?>
                                    <li><?php the_sub_field( 'item' ); ?></li>
                                <?php endwhile; ?>
                            </ul>
                        </div>
                        <?php endif; ?>
                    <?php } else {
                        the_field( 'results_text' );
                    } ?>

                    </div>
                </div>
            </div>
            <?php if (get_field( 'add_text_foot' )) { ?>
            <div class="case__more">
                <div class="container">
                    <?php the_field( 'add_text_foot' ); ?>
                </div>
            </div>
            <?php } ?>
            </div>
            </div>
            </div>
        </div>

            <section id="related__cases">
                <div class="container">
                    <h2>More cases</h2>
                    <?php echo do_shortcode('[cases-list-related]') ?>
                </div>
            </section>
        </div>
    </div>

<?php get_template_part('template-parts/contact-us', 'section'); ?>

<?php
get_footer();
