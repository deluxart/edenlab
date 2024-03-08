<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Edenlab
 */

get_header();
?>


    <section id="home_slider">
        <div class="notification">
            <div class="container">
                <p>To our potential partners, clients, recruiting agencies, and candidates 🇺🇦 <a data-name="hot_modal" class="btn-inline da-modal">Read more</a></p>

                <span class="close">
                    <svg width="33" height="33" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="7" y="9.26465" width="3" height="23" transform="rotate(-45 7 9.26465)" fill="#081123"/>
                        <rect x="9" y="25.2627" width="3" height="23" transform="rotate(-135 9 25.2627)" fill="#081123"/>
                    </svg>
                </span>
            </div>
        </div>
        <div class="container">
            <div class="content">
                <h1 class="revealator-slideup revealator-duration10 revealator-once revealator-below"><?php the_field( 'heading_head' ); ?></h1>
                <p class="revealator-slideup revealator-duration10 revealator-once revealator-below revealator-delay2"><?php the_field( 'description_head' ); ?></p>
                <div class="head_buttons revealator-slideup revealator-duration10 revealator-once revealator-below revealator-delay3">
                <?php if ( have_rows( 'button_head' ) ) : ?>
                    <?php while ( have_rows( 'button_head' ) ) : the_row(); ?>
                        <a href="<?php the_sub_field( 'link' ); ?>" class="btn blue"><?php the_sub_field( 'title' ); ?></a>
                    <?php endwhile; ?>
                <?php endif; ?>
                    <?php if ( have_rows( 'button_head_fhir' ) ) : ?>
                        <?php while ( have_rows( 'button_head_fhir' ) ) : the_row(); ?>
                            <?php if ( get_sub_field( 'show_btn' ) == 1 ) : ?>
                                <a data-name="whitepaper_modal" href="download" target="_blank" class="da-modal btn white"><?php the_sub_field( 'title' ); ?></a>
                            <?php endif; ?>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <?php if ( have_rows( 'logotypes_head' ) ) : ?>
            <div class="logos str3 mWrap">
                <?php while ( have_rows( 'logotypes_head' ) ) : the_row(); ?>
                    <?php $add_logo = get_sub_field( 'add_logo' ); ?>
                    <?php if ( $add_logo ) : ?>
                        <img src="<?php echo esc_url( $add_logo['url'] ); ?>" alt="<?php echo esc_attr( $add_logo['alt'] ); ?>" />
                    <?php endif; ?>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
    </section>


    <section id="what_we_do">
        <div class="container">
            <div class="title">
                <div>
                    <h2 class="revealator-slideup revealator-duration7 revealator-once revealator-below"><?php the_field( 'section_title_wwd' ); ?></h2>
                    <p class="revealator-slideup revealator-duration7 revealator-once revealator-below"><?php the_field( 'description_wwd' ); ?></p>
                </div>
                <div>
                    <a href="<?php echo get_home_url(); ?>/services" class="more revealator-slideup revealator-duration7 revealator-once revealator-below">
                        <span>To services</span>
                        <svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.7782 9.49985L18.6621 10.3837C19.1502 9.89558 19.1502 9.10413 18.6621 8.61597L17.7782 9.49985ZM10.1768 3.66622L16.8943 10.3837L18.6621 8.61597L11.9445 1.89846L10.1768 3.66622ZM16.8943 8.61597L9.82322 15.687L11.591 17.4548L18.6621 10.3837L16.8943 8.61597ZM17.7782 8.24985H2.22183V10.7499H17.7782V8.24985Z" fill="white"/>
                        </svg>

                    </a>
                </div>
            </div>
            <div class="white_blocks">
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
                <h3 class="revealator-slideup revealator-duration7 revealator-once revealator-below"><?php the_field( 'solutions_description_wwd' ); ?></h3>
            </div>
            <div class="border_blocks">
                <div class="swiper-wrapper">
                    <?php if ( have_rows( 'Solutions_wwd' ) ) : $bb = 0; ?>
                        <?php while ( have_rows( 'Solutions_wwd' ) ) : the_row(); $bb++; ?>
                            <div class="swiper-slide block revealator-slideup revealator-duration7 revealator-once revealator-below revealator-delay<?php echo $bb; ?>">
<!--                                <div class="square">-->
                                <div class="icon">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/check_black.svg" alt="">
                                </div>
                                <h5><?php the_sub_field( 'solution_name_wwd' ); ?></h5>
                                <p><?php the_sub_field( 'solution_back_description' ); ?></p>
<!--                                </div>-->
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

    <section id="products">
        <div class="container">
            <div class="title">
                <h2 class="revealator-slideup revealator-duration7 revealator-once revealator-below"><?php the_field( 'section_title_op' ); ?></h2>
                <p class="revealator-slideup revealator-duration7 revealator-once revealator-below"><?php the_field( 'section_description_op' ); ?></p>
            </div>
            <div class="content">
                <?php echo do_shortcode('[product-list-home]') ?>
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

    <section id="quote_section">
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

    <section id="our_approach">
        <div class="container">
            <div class="title">
                <h2 class="revealator-slideup revealator-duration7 revealator-once revealator-below"><?php the_field( 'section_title_oa' ); ?></h2>
                <p class="revealator-slideup revealator-duration7 revealator-once revealator-below"><?php the_field( 'section_description_oa' ); ?></p>
            </div>
            <div class="content">
                <?php if ( have_rows( 'items_oa' ) ) : $oa = 0; ?>
                    <?php while ( have_rows( 'items_oa' ) ) : the_row(); $oa++; ?>
                        <div class="block revealator-slideup revealator-duration7 revealator-once revealator-below revealator-delay<?php echo $oa; ?>">
                            <div class="icon">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/check_black.svg" alt="">
                            </div>
                            <h4><?php the_sub_field( 'item_title' ); ?></h4>
                            <p><?php the_sub_field( 'item_description' ); ?></p>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <h4 class="revealator-slideup revealator-duration7 revealator-once revealator-below"><?php the_field( 'second_description_oa' ); ?></h4>
            <?php if ( have_rows( 'more_link' ) ) : ?>
                <?php while ( have_rows( 'more_link' ) ) : the_row(); ?>
                    <a href="<?php the_sub_field( 'link' ); ?>" class="more revealator-slideup revealator-duration7 revealator-once revealator-below">
                        <span><?php the_sub_field( 'title' ); ?></span>
                        <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15.5555 7.99985L16.4394 8.88374C16.9276 8.39558 16.9276 7.60413 16.4394 7.11597L15.5555 7.99985ZM7.95412 2.16622L14.6716 8.88374L16.4394 7.11597L9.72189 0.398456L7.95412 2.16622ZM14.6716 7.11597L7.60057 14.187L9.36833 15.9548L16.4394 8.88374L14.6716 7.11597ZM15.5555 6.74985H-0.00083071V9.24985H15.5555V6.74985Z" fill="#081123"/>
                        </svg>
                    </a>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </section>


    <section id="cases">
        <div class="title">
            <h2 class="revealator-slideup revealator-duration7 revealator-once revealator-below"><?php the_field( 'section_title_cs' ); ?></h2>
            <a href="<?php echo get_home_url(); ?>/cases" class="more revealator-slideup revealator-duration7 revealator-once revealator-below">
                <span>Check all cases</span>
                <svg width="18" height="17" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M15.7782 8.49985L16.6621 9.38374C17.1502 8.89558 17.1502 8.10413 16.6621 7.61597L15.7782 8.49985ZM8.17678 2.66622L14.8943 9.38374L16.6621 7.61597L9.94454 0.898456L8.17678 2.66622ZM14.8943 7.61597L7.82322 14.687L9.59099 16.4548L16.6621 9.38374L14.8943 7.61597ZM15.7782 7.24985H0.221826V9.74985H15.7782V7.24985Z" fill="#081123"/>
                </svg>
            </a>
        </div>
        <div class="content">
            <?php echo do_shortcode('[cases-list-home cats="healthcare"]') ?>
        </div>
    </section>


    <?php get_template_part('template-parts/contact-us', 'section'); ?>

    <section id="faq">
        <div class="container">
            <h2 class=" revealator-slideup revealator-duration7 revealator-once revealator-below"><?php the_field( 'section_title_faq' ); ?></h2>
            <div class="content">
                <?php if ( have_rows( 'questions_list' ) ) : $ql = 0; ?>
                    <?php while ( have_rows( 'questions_list' ) ) : the_row(); $ql++; ?>
                        <div class="spoiler revealator-slideup revealator-duration7 revealator-once revealator-below revealator-delay<?php echo $ql; ?>">
                            <div class="head"><?php the_sub_field( 'question' ); ?></div>
                            <div class="cont"><?php the_sub_field( 'answer' ); ?></div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <div id="hot_modal" class="daModal da-modal-popup">
                <div class="da-modal-inner crm">
                    <div class="container">
                        <div class="da-modal-content note">
                            <div class="text-page">
                                <h2>To our potential partners, clients, recruiting agencies, and candidates🇺🇦</h2>
                                <p>Edenlab has always welcomed the best minds in our distributed team of professionals and has always been happy to cooperate with clients and partners from all over the globe.</p>

                                <p>However, in the hard times that the world is currently facing due to the invasion of Russia into our motherland Ukraine, we openly declare that we won't support, cooperate with, or use the services of companies from Russia or Belarus. Neither will we cooperate with those from other countries who support the invasion.</p>

                                <p>From the very first days of the invasion, we've been working hard to help the Ukrainian army and people, ensure the safety of our employees and their families who are based in Ukraine, and protect the interests of our customers from any disruption.</p>

                                <p>With strong faith in justice, the military forces of Ukraine, and international support,</p>

                                <p>The Edenlab Team</p>
                            </div>
                        </div>
                    </div>
                </div>
    </div>

<?php
get_footer();
