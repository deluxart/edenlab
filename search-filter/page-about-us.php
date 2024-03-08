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
* Template Name: About us
*/

get_header();
?>

    <section id="page_head">
        <div class="container">
            <h1><?php the_field( 'page_title_about' ); ?></h1>
            <p><?php the_field( 'description_about' ); ?></p>
        </div>
    </section>


    <section id="what_we_do_about">
        <div class="container">
            <div class="content">
                <div class="text">
                    <h3><?php the_field( 'section_title_about_what' ); ?></h3>
                    <?php the_field( 'section_description_about_what' ); ?>


                    <?php if ( have_rows( 'partners_about_what' ) ) : ?>
                        <?php while ( have_rows( 'partners_about_what' ) ) : the_row(); ?>
                            <h5><?php the_sub_field( 'block_title' ); ?></h5>
                            <?php if ( have_rows( 'logos' ) ) : ?>
                                <ul class="partners">
                                <?php while ( have_rows( 'logos' ) ) : the_row(); ?>
                                    <?php $logo = get_sub_field( 'logo' ); ?>
                                    <?php if ( $logo ) : ?>
                                        <li><img src="<?php echo esc_url( $logo['url'] ); ?>" alt="<?php echo esc_attr( $logo['alt'] ); ?>" /></li>
                                    <?php endif; ?>
                                <?php endwhile; ?>
                                </ul>
                            <?php endif; ?>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
                <div>
                    <?php if ( have_rows( 'statistics_about_what' ) ) : ?>
                    <div class="stats">
                        <?php while ( have_rows( 'statistics_about_what' ) ) : the_row(); ?>
                            <div>
                                <?php the_sub_field( 'item_stats' ); ?>
                            </div>
                        <?php endwhile; ?>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

    <section id="our_approach_about">
        <div class="container">
            <div class="title">
                <h2><?php the_field( 'section_title_oa' ); ?></h2>
                <p><?php the_field( 'section_description_oa' ); ?></p>
            </div>
            <?php if ( have_rows( 'items_list' ) ) : ?>
                <ul class="nav_list">
                    <?php while ( have_rows( 'items_list' ) ) : the_row(); ?>
                        <li>
                            <button data-name="<?php the_sub_field( 'target' ); ?>" class="btn-inline da-modal"><?php the_sub_field( 'title' ); ?></button>
                        </li>
                    <?php endwhile; ?>
                </ul>
            <?php endif; ?>
        </div>
    </section>

    <section id="leadership">
        <div class="container">
            <h2><?php the_field( 'section_title_leadership' ); ?></h2>
            <?php if ( have_rows( 'leaders_cards' ) ) : ?>
            <div class="cards">
                <?php while ( have_rows( 'leaders_cards' ) ) : the_row(); ?>
                    <div class="card">
                        <div class="image">
                            <?php $photo = get_sub_field( 'photo' ); ?>
                            <?php if ( $photo ) : ?>
                                <img src="<?php echo esc_url( $photo['url'] ); ?>" alt="<?php echo esc_attr( $photo['alt'] ); ?>" />
                            <?php endif; ?>
                        </div>
                        <div class="info">
                            <h4><?php the_sub_field( 'user_name' ); ?></h4>
                            <p><?php the_sub_field( 'position' ); ?></p>

                            <ul>
                                <li><a href="<?php the_sub_field( 'linkedin_url' ); ?>" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
            <?php endif; ?>
        </div>
    </section>

    <section id="why_choose_us">
        <div class="container">
            <div class="content">
                <div class="title">
                    <h2><?php the_field( 'section_title_career' ); ?></h2>
                    <p><?php the_field( 'section_description_career' ); ?></p>
                    <?php if ( have_rows( 'vacancies_link' ) ) : ?>
                        <?php while ( have_rows( 'vacancies_link' ) ) : the_row(); ?>
                            <a href="<?php the_sub_field( 'target' ); ?>" target="_blank" class="more">
                                <span><?php the_sub_field( 'title' ); ?></span>
                                <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.5563 8L16.4401 8.88388C16.9283 8.39573 16.9283 7.60427 16.4401 7.11612L15.5563 8ZM7.95485 2.16637L14.6724 8.88388L16.4401 7.11612L9.72262 0.398601L7.95485 2.16637ZM14.6724 7.11612L7.6013 14.1872L9.36907 15.955L16.4401 8.88388L14.6724 7.11612ZM15.5563 6.75H-9.82881e-05V9.25H15.5563V6.75Z" fill="#081123"/>
                                </svg>
                            </a>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
                <?php if ( have_rows( 'items_career' ) ) : ?>
                    <div class="list">
                    <?php while ( have_rows( 'items_career' ) ) : the_row(); ?>
                        <div class="item">
                            <h5><?php the_sub_field( 'title' ); ?></h5>
                            <p><?php the_sub_field( 'description' ); ?></p>
                        </div>
                    <?php endwhile; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <?php get_template_part('template-parts/contact-us', 'section'); ?>


<?php if ( have_rows( 'items_list' ) ) : ?>
        <?php while ( have_rows( 'items_list' ) ) : the_row(); ?>
        <div id="<?php the_sub_field( 'target' ); ?>" class="daModal da-modal-popup">
            <?php if ( have_rows( 'modal_content' ) ) : ?>
                <?php while ( have_rows( 'modal_content' ) ) : the_row(); ?>
                    <div class="da-modal-inner">
                        <div class="container">
<!--                        <div class="da-modal-title"><h2>--><?php //the_sub_field( 'modal_title' ); ?><!--</h2></div>-->
                        <div class="da-modal-content">
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
<?php endif; ?>

<?php
get_footer();
