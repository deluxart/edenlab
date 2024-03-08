<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package kodjin
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <section class="case">
        <div class="container">
            <a href="/cases/" class="back_link">BACK TO CASE STUDIES</a>
        </div>
            <div class="case__detail">
                <div class="container">
                    <div class="case__detail__head">
                        <div>
                            <h2><?php the_title() ?></h2>
                        </div>
                        <div class="image">
                            <?php edenlab_post_thumbnail(); ?>
                        </div>
                    </div>
                    <div class="case__detail__about">
                        <h2 class="line"><?php the_field( 'title_about' ); ?></h2>
                        <div>
                            <?php the_field( 'about_the_project' ); ?>
                        </div>
                    </div>
                    <div class="case__detail__task">
                        <h2 class="line"><?php the_field( 'title_tasks' ); ?></h2>
                        <?php if (get_field( 'section_subtitle_tasks' )) { ?>
                            <h5><?php the_field( 'section_subtitle_tasks' ); ?></h5>
                        <?php } ?>
                        <p><?php the_field( 'task' ); ?></p>
                    </div>
                    <?php if ( have_rows( 'list_challenges' ) ) : ?>
                    <div class="case__detail__challenges">
                        <h2 class="line"><?php the_field( 'title_challenges' ); ?></h2>
                        <?php if (get_field( 'section_subtitle_challenges' )) { ?>
                            <h5><?php the_field( 'section_subtitle_challenges' ); ?></h5>
                        <?php } ?>
                        <div class="list">
                                <?php while ( have_rows( 'list_challenges' ) ) : the_row(); ?>
                                    <div><p><?php the_sub_field( 'item' ); ?></p></div>
                                <?php endwhile; ?>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
                <div class="case__detail__process">
                    <div class="container">
                        <h2 class="line"><?php the_field( 'process_description_title' ); ?></h2>
                        <?php if (get_field( 'block_style' ) == 'steps-arrows') { ?>
                            <div class="steps">
                                <div>
                                    <h2><span>1 step</span></h2>
                                    <?php if ( have_rows( '1_step' ) ) : ?>
                                    <ul>
                                        <?php while ( have_rows( '1_step' ) ) : the_row(); ?>
                                            <li><?php the_sub_field( 'item' ); ?></li>
                                        <?php endwhile; ?>
                                    </ul>
                                    <?php endif; ?>
                                </div>
                                <div>
                                    <h2><span>2 step</span></h2>
                                    <?php if ( have_rows( '2_step' ) ) : ?>
                                        <ul>
                                            <?php while ( have_rows( '2_step' ) ) : the_row(); ?>
                                                <li><?php the_sub_field( 'item' ); ?></li>
                                            <?php endwhile; ?>
                                        </ul>
                                    <?php endif; ?>
                                </div>
                                <div>
                                    <h2><span>3 step</span></h2>
                                    <?php if ( have_rows( '3_step' ) ) : ?>
                                        <ul>
                                            <?php while ( have_rows( '3_step' ) ) : the_row(); ?>
                                                <li><?php the_sub_field( 'item' ); ?></li>
                                            <?php endwhile; ?>
                                        </ul>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php } else { ?>
                                <?php if ( have_rows( 'steps' ) ) : ?>
                                    <?php while ( have_rows( 'steps' ) ) : the_row(); ?>
                                    <div class="text-steps">
                                        <h2><?php the_sub_field( 'step_title' ); ?></h2>
                                        <div class="text-steps__columns">
                                        <div>
                                            <?php if ( have_rows( 'challenges' ) ) : ?>
                                                <?php while ( have_rows( 'challenges' ) ) : the_row(); ?>
                                                    <h4><?php the_sub_field( 'block_title' ); ?></h4>
                                                    <?php the_sub_field( 'block_text' ); ?>
                                                <?php endwhile; ?>
                                            <?php endif; ?>
                                        </div>
                                        <div>
                                            <?php if ( have_rows( 'solutions' ) ) : ?>
                                                <?php while ( have_rows( 'solutions' ) ) : the_row(); ?>
                                                    <h4><?php the_sub_field( 'block_title' ); ?></h4>
                                                    <?php the_sub_field( 'block_text' ); ?>
                                                <?php endwhile; ?>
                                            <?php endif; ?>
                                        </div>
                                        </div>
                                    </div>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                        <?php } ?>
                    </div>
                </div>
                <div class="container">
                <?php if ( have_rows( 'list_key' ) ) : ?>
                <div class="case__detail__parameters">
                    <h2 class="line"><?php the_field( 'key_parameters_title' ); ?></h2>
                    <div class="case__detail__parameters__table">

                            <?php while ( have_rows( 'list_key' ) ) : the_row(); ?>
                                <div>
                                    <h3><?php the_sub_field( 'item_title' ); ?></h3>
                                    <p><?php the_sub_field( 'item_description' ); ?></p>
                                </div>
                            <?php endwhile; ?>

                    </div>
                </div>
                <?php endif; ?>
                <div class="case__detail__results">
                    <h2 class="line"><?php the_field( 'results_title' ); ?></h2>
                    <?php if (get_field( 'block_style_results' ) == 'counters') { ?>
                    <div class="case__detail__results__table">
                        <?php if ( have_rows( 'items_results' ) ) : ?>
                            <?php while ( have_rows( 'items_results' ) ) : the_row(); ?>
                                <div>
                                    <h2 class="orange"><?php the_sub_field( 'item_title' ); ?></h2>
                                    <p><?php the_sub_field( 'item_description' ); ?></p>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                    <?php } else { ?>
                            <?php if ( have_rows( 'list_results' ) ) : ?>
                            <div class="case__detail__results__list">
                                <?php if (get_field( 'subtitle_results' )) { ?><h4><?php the_field( 'subtitle_results' ); ?></h4><?php } ?>
                                <ul>
                                    <?php while ( have_rows( 'list_results' ) ) : the_row(); ?>
                                        <li><?php the_sub_field( 'item' ); ?></li>
                                    <?php endwhile; ?>
                                </ul>
                            </div>
                            <?php endif; ?>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
</article><!-- #post-<?php the_ID(); ?> -->
