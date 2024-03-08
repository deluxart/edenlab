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
* Template Name: CRM Front-page
*/

get_header();
?>


    <section id="home_slider" class="crm">
        <div class="container">
            <div class="content">
                <h1 class="revealator-slideup revealator-duration10 revealator-once revealator-below"><?php the_field( 'heading_head' ); ?></h1>
                <p class="revealator-slideup revealator-duration10 revealator-once revealator-below revealator-delay2"><?php the_field( 'description_head' ); ?></p>
                <?php if ( have_rows( 'button_head' ) ) : ?>
                    <?php while ( have_rows( 'button_head' ) ) : the_row(); ?>
                        <div class=" revealator-slideup revealator-duration10 revealator-once revealator-below revealator-delay3"><a href="<?php the_sub_field( 'link' ); ?>" class="btn blue"><?php the_sub_field( 'title' ); ?></a></div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>

            <?php if ( have_rows( 'logotypes_head' ) ) : ?>
                <div class="logos">
                    <?php while ( have_rows( 'logotypes_head' ) ) : the_row(); ?>
                        <?php $add_logo = get_sub_field( 'add_logo' ); ?>
                        <?php if ( $add_logo ) : ?>
                            <img src="<?php echo esc_url( $add_logo['url'] ); ?>" alt="<?php echo esc_attr( $add_logo['alt'] ); ?>" />
                        <?php endif; ?>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
        </div>
    </section>


    <section id="what_we_do">
        <div class="container">
            <div class="title crm">
                <div>
                    <h2 class="revealator-slideup revealator-duration7 revealator-once revealator-below"><?php the_field( 'section_title_wwd' ); ?></h2>
                    <h3 class="revealator-slideup revealator-duration7 revealator-once revealator-below"><?php the_field( 'description_wwd' ); ?></h3>
                </div>
            </div>
            <div class="white_blocks crm">
                <div class="swiper-wrapper">
                    <?php if ( have_rows( 'services_wwd' ) ) : $wb = 0; ?>
                        <?php while ( have_rows( 'services_wwd' ) ) : the_row(); $wb++; ?>
                            <div class="swiper-slide block revealator-slideup revealator-duration7 revealator-once revealator-below revealator-delay<?php echo $wb; ?>">
                                <!--                            <div class="square">-->
                                <div class="icon">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/check_black.svg" alt="">
                                </div>
                                <h3><?php the_sub_field( 'service_name_wwd' ); ?></h3>
                                <p><?php the_sub_field( 'service_back_description' ); ?></p>
                                <!--                            </div>-->
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="subtitle">
                <p class="revealator-slideup revealator-duration7 revealator-once revealator-below"><?php the_field( 'second_description_wwd' ); ?></p>
            </div>
        </div>
    </section>

    <section id="what_you_will">
        <div class="container">
            <div class="title">
                <h2 class="revealator-slideup revealator-duration7 revealator-once revealator-below"><?php the_field( 'section_title_wywg' ); ?></h2>
            </div>
            <div class="content">
                <?php if ( have_rows( 'content_tabs_wywg' ) ) : $i = 0; $z = 0; ?>
                <div class="d-tabs">
                    <ul>
                        <?php while ( have_rows( 'content_tabs_wywg' ) ) : the_row(); $i++; ?>
                            <li data-tab="wywg_<?php echo $i ?>" class="<?php if ($i == 1) { echo 'active'; } ?>"><a href="#" class="tab_ancor"><?php the_sub_field( 'tab_title' ); ?></a></li>
                        <?php endwhile; ?>
                    </ul>
                    <?php while ( have_rows( 'content_tabs_wywg' ) ) : the_row(); $z++; ?>
                        <div id="wywg_<?php echo $z ?>" class="d-content<?php if ($z == 1) { echo ' active'; } ?>">
                            <div class="video-container">
                                <?php the_sub_field( 'tab_content' ); ?>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>

                <?php endif; ?>
            </div>
            <div class="foot">
                <p class="revealator-slideup revealator-duration7 revealator-once revealator-below"><?php the_field( 'section_description_wywg' ); ?></p>
<?php if ( have_rows( 'button_wywg' ) ) : ?>
    <?php while ( have_rows( 'button_wywg' ) ) : the_row(); ?>
                <div class="revealator-slideup revealator-duration10 revealator-once revealator-below revealator-delay3"><a href="<?php the_sub_field( 'link' ); ?>" class="btn blue"><?php the_sub_field( 'title' ); ?></a></div>
    <?php endwhile; ?>
<?php endif; ?>
            </div>
        </div>
    </section>


    <section id="why_choose_us">
        <div class="container">
            <div class="content">
                <div class="title">
                    <h2 class="revealator-slideup revealator-duration7 revealator-once revealator-below"><?php the_field( 'section_title_wcu' ); ?></h2>
                    <p class="revealator-slideup revealator-duration7 revealator-once revealator-below"><?php the_field( 'section_description_wcu' ); ?></p>
                    <?php if ( have_rows( 'button_wcu' ) ) : ?>
                        <?php while ( have_rows( 'button_wcu' ) ) : the_row(); ?>
                            <a href="<?php the_sub_field( 'link' ); ?>" class="btn blue revealator-slideup revealator-duration7 revealator-once revealator-below"><?php the_sub_field( 'title' ); ?></a>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
                <div class="list">
                    <?php if ( have_rows( 'items_list' ) ) : $il = 0; ?>
                        <?php while ( have_rows( 'items_list' ) ) : the_row(); $il++; ?>
                            <div class="item revealator-slideup revealator-duration7 revealator-once revealator-below revealator-delay<?php echo $il; ?>">
                                <h5><?php the_sub_field( 'item_title' ); ?></h5>
                                <p><?php the_sub_field( 'item_description' ); ?></p>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

    <section id="quote_section" class="crm">
        <div class="container">
            <div class="content revealator-slideup revealator-duration7 revealator-once revealator-below">
                <h3><?php the_field( 'text_quote' ); ?></h3>
                <p><?php the_field( 'quote_author_info' ); ?></p>

                <?php if ( have_rows( 'quote_link' ) ) : ?>
                    <?php while ( have_rows( 'quote_link' ) ) : the_row(); ?>
                        <a href="<?php the_sub_field( 'link' ); ?>" target="_blank" class="more">
                            <span><?php the_sub_field( 'title' ); ?></span>
                            <svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17.7782 9.49985L18.6621 10.3837C19.1502 9.89558 19.1502 9.10413 18.6621 8.61597L17.7782 9.49985ZM10.1768 3.66622L16.8943 10.3837L18.6621 8.61597L11.9445 1.89846L10.1768 3.66622ZM16.8943 8.61597L9.82322 15.687L11.591 17.4548L18.6621 10.3837L16.8943 8.61597ZM17.7782 8.24985H2.22183V10.7499H17.7782V8.24985Z" fill="black"/>
                            </svg>

                        </a>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </section>


    <section id="cases" class="crm">
        <div class="title">
            <h2 class="revealator-slideup revealator-duration7 revealator-once revealator-below"><?php the_field( 'section_title_cs' ); ?></h2>
<!--            <a href="--><?php //echo get_home_url(); ?><!--/cases" class="more revealator-slideup revealator-duration7 revealator-once revealator-below">-->
<!--                <span>Check all cases</span>-->
<!--                <svg width="18" height="17" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">-->
<!--                    <path d="M15.7782 8.49985L16.6621 9.38374C17.1502 8.89558 17.1502 8.10413 16.6621 7.61597L15.7782 8.49985ZM8.17678 2.66622L14.8943 9.38374L16.6621 7.61597L9.94454 0.898456L8.17678 2.66622ZM14.8943 7.61597L7.82322 14.687L9.59099 16.4548L16.6621 9.38374L14.8943 7.61597ZM15.7782 7.24985H0.221826V9.74985H15.7782V7.24985Z" fill="#081123"/>-->
<!--                </svg>-->
<!--            </a>-->
        </div>
        <div class="content">
            <?php echo do_shortcode('[crm-list-home]') ?>
        </div>
    </section>


<?php get_template_part('template-parts/contact-us', 'section'); ?>


<?php echo do_shortcode('[crm-modal]') ?>
<?php
get_footer();
