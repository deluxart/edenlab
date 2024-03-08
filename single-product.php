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
    <div class="products__single">
        <section id="page_head">
            <div class="container">
                <div class="title">
                    <h1><?php the_title(); ?></h1>
                    <p><?php the_field( 'product_description' ); ?></p>
                    <div class="button">
                        <a data-name="whitepaper_modal" href="download" target="_blank" class="da-modal btn white">Download White Paper</a>
                    </div>
                </div>

                <?php if ( have_rows( 'cards_product_head' ) ) :
                    $numrows = count( get_field( 'cards_product_head' ) );
                    ?>
                <div class="white_blocks crm">
                    <div class="swiper-wrapper columns_<?php echo $numrows ?>">
                            <?php while ( have_rows( 'cards_product_head' ) ) : the_row(); ?>
                            <div class="swiper-slide block">
                                <div class="icon">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/check_black.svg" alt="">
                                </div>
                                <h4><?php the_sub_field( 'card_title' ); ?></h4>
                            </div>
                            <?php endwhile; ?>
                    </div>
                </div>
                <?php endif; ?>

                <?php if (get_field( 'second_description_product' )) { ?>
                    <div class="second_description">
                        <?php the_field( 'second_description_product' ); ?>
                    </div>
                <?php } ?>
            </div>
        </section>

        <section id="why_service_project">
            <div class="container">
                <h2><?php the_field( 'section_title_why_us' ); ?></h2>
                <p><?php the_field( 'section_description_why_us' ); ?></p>

                <?php if ( have_rows( 'items' ) ) : ?>
                <div class="list">
                    <?php while ( have_rows( 'items' ) ) : the_row(); ?>
                        <div class="item"><?php the_sub_field( 'item' ); ?></div>
                    <?php endwhile; ?>
                </div>
                <?php endif; ?>
            </div>
        </section>

        <?php if ( have_rows( 'quote_block_why_us' ) ) : ?>
            <?php while ( have_rows( 'quote_block_why_us' ) ) : the_row(); ?>
                <?php if (get_sub_field( 'quote_text' )) { ?>
                    <div id="quote_section">
                        <div class="container">
                        <div class="content">
                            <div class="content__text">
                                <h3><?php the_sub_field( 'quote_text' ); ?></h3>
                                <p><?php the_sub_field( 'quote_author' ); ?></p>
                            </div>
                        </div>
                        </div>
                    </div>
                <?php } ?>
            <?php endwhile; ?>
        <?php endif; ?>

<?php if ( get_field( 'activate_section_cases' ) == 1 ) : ?>
        <section id="use_cases">
            <div class="container">
                <div class="title">
                    <h2><?php the_field( 'section_title_use_cases' ); ?></h2>
                    <p><?php the_field( 'section_description_use_cases' ); ?></p>
                </div>

                <?php if ( have_rows( 'cases_list' ) ) : ?>
                <div class="list">
                    <?php while ( have_rows( 'cases_list' ) ) : the_row(); ?>
                    <div class="item">
                        <?php the_sub_field( 'case_block' ); ?>
                    </div>
                    <?php endwhile; ?>
                </div>
                <?php endif; ?>

                <?php if (get_field( 'second_description_cases' )) { ?>
                    <div class="second_description">
                        <h3><?php the_field( 'second_description_cases' ); ?></h3>
                    </div>
                <?php } ?>

                <?php if ( have_rows( 'button_use_cases' ) ) : ?>
                    <?php while ( have_rows( 'button_use_cases' ) ) : the_row(); ?>
                        <?php if ( get_sub_field( 'enable_button' ) == 1 ) : ?>
                <div class="second_description">
                    <a href="<?php the_sub_field( 'link' ); ?>" class="btn blue"><?php the_sub_field( 'title' ); ?></a></div>
                        <?php endif; ?>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </section>
<?php endif; ?>

        <?php if ( get_field( 'activate_section_features' ) == 1 ) : ?>
        <section id="features__project">
            <div class="container">
                <div class="title">
                    <h2><?php the_field( 'section_title_features' ); ?></h2>
                    <p><?php the_field( 'section_description_features' ); ?></p>
<!--                    --><?php //if ( have_rows( 'tags_info' ) ) : ?>
<!--                    <ul class="tags">-->
<!--                        --><?php //while ( have_rows( 'tags_info' ) ) : the_row(); ?>
<!--                            --><?php //if ( have_rows( 'unique' ) ) : ?>
<!--                                --><?php //while ( have_rows( 'unique' ) ) : the_row(); ?>
<!--                                    <li>-->
<!--                                        <span class="blue" style="color: --><?php //the_sub_field( 'color_fhir' ); ?><!--">--><?php //the_sub_field( 'title_unique' ); ?><!--</span>--><?php //the_sub_field( 'description_unique' ); ?>
<!--                                    </li>-->
<!--                                --><?php //endwhile; ?>
<!--                            --><?php //endif; ?>
<!--                            --><?php //if ( have_rows( 'fhir' ) ) : ?>
<!--                                --><?php //while ( have_rows( 'fhir' ) ) : the_row(); ?>
<!--                                    <li>-->
<!--                                        <span class="orange" style="color: --><?php //the_sub_field( 'color_fhir' ); ?><!--">--><?php //the_sub_field( 'title_fhir' ); ?><!--</span>--><?php //the_sub_field( 'description_fhir' ); ?>
<!--                                    </li>-->
<!--                                --><?php //endwhile; ?>
<!--                            --><?php //endif; ?>
<!--                        --><?php //endwhile; ?>
<!--                    </ul>-->
<!--                    --><?php //endif; ?>
                </div>

                <?php if ( have_rows( 'features_table' ) ) : ?>
                <div class="table_features">
                    <?php while ( have_rows( 'features_table' ) ) : the_row(); ?>
                    <div class="row">
                        <div>
                            <h4><?php the_sub_field( 'feature_name' ); ?></h4>
                        </div>
                        <?php if ( have_rows( 'feature' ) ) : ?>
                        <div class="row_sub">
                            <?php while ( have_rows( 'feature' ) ) : the_row(); ?>
                                <div class="subrow">
                                    <?php the_sub_field( 'text' ); ?>
<!--                                    <div class="tag">-->
<!--                                        <span class="--><?php //if (get_sub_field( 'tag' ) == 'unique') { ?><!--blue--><?php //} else { ?><!--orange--><?php //} ?><!--">--><?php //the_sub_field( 'tag' ); ?><!--</span>-->
<!--                                    </div>-->
                                </div>
                            <?php endwhile; ?>
                        </div>
                        <?php endif; ?>
                    </div>
                    <?php endwhile; ?>
                </div>
                <?php endif; ?>


                <?php if ( have_rows( 'button_features_more' ) ) : ?>
                    <div class="features_more">
                    <?php while ( have_rows( 'button_features_more' ) ) : the_row(); ?>
                        <a href="<?php the_sub_field( 'link' ); ?>" class="btn blue"><?php the_sub_field( 'title' ); ?></a>
                    <?php endwhile; ?>
                    </div>
                <?php endif; ?>
            </div>
        </section>
        <?php endif; ?>


        <?php if ( get_field( 'activate_section_profiles' ) == 1 ) : ?>
        <section id="validations">
            <div class="container">
                <div class="title">
                    <h2><?php the_field( 'section_title_profiles' ); ?></h2>
                    <p><?php the_field( 'section_description_profiles' ); ?></p>
                </div>

                <?php if ( have_rows( 'cards_profiles' ) ) : ?>
                <div class="cards">
                    <?php while ( have_rows( 'cards_profiles' ) ) : the_row(); ?>
                        <div class="block">
                            <div class="icon">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/check_black.svg" alt="">
                            </div>
                            <h4><?php the_sub_field( 'card_title' ); ?></h4>
                            <p><?php the_sub_field( 'card_description' ); ?></p>
                        </div>
                    <?php endwhile; ?>
                </div>
                <?php endif; ?>
            </div>
        </section>
        <?php endif; ?>

        <?php if ( get_field( 'activate_section_architecture' ) == 1 ) : ?>
        <section id="architecture">
            <div class="container">
                <h2><?php the_field( 'section_title_architecture' ); ?></h2>
                <div class="block__image">
                    <?php $architecture_image = get_field( 'architecture_image' ); ?>
                    <?php if ( $architecture_image ) : ?>
                        <img src="<?php echo esc_url( $architecture_image['url'] ); ?>" alt="<?php echo esc_attr( $architecture_image['alt'] ); ?>" />
                    <?php endif; ?>

                    <?php if ( get_field( 'architecture_text' ) ) : ?>
                        <div class="architecture_text">
                            <?php the_field( 'architecture_text' ); ?>
                        </div>
                    <?php endif; ?>
                </div>
                <?php endif; ?>

                <?php if ( get_field( 'activate_section_players' ) == 1 ) : ?>
                    <div class="section_players">
                        <h3><?php the_field( 'section_title_players' ); ?></h3>

                        <?php if ( have_rows( 'items_players' ) ) : ?>
                        <ul class="nav_list">
                            <?php while ( have_rows( 'items_players' ) ) : the_row(); ?>
                                <li><span><?php the_sub_field( 'item' ); ?></span></li>
                            <?php endwhile; ?>
                        </ul>
                    </div>
                <?php endif; ?>

                <?php if ( get_field( 'activate_section_chat' ) == 1 ) : ?>
                <div class="section_players">
                    <div class="info">
                        <h3><?php the_field( 'section_title_chat' ); ?></h3>
                        <p><?php the_field( 'section_description_chat' ); ?></p>
                    </div>
                    <?php if ( have_rows( 'button_chat' ) ) : ?>
                        <?php while ( have_rows( 'button_chat' ) ) : the_row(); ?>
                            <a href="<?php the_sub_field( 'target' ); ?>" class="btn blue"><?php the_sub_field( 'title' ); ?></a>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
                <?php endif; ?>
            </div>
        </section>
    <?php endif; ?>

        <?php if ( get_field( 'activate_section_solutions' ) == 1 ) : ?>
        <section id="solutions">
            <div class="container">
                <div class="title">
                    <h2><?php the_field( 'section_title_solutions' ); ?></h2>
                    <h3><?php the_field( 'section_subtitle_solutions' ); ?></h3>
                    <div class="text"><?php the_field( 'section_description_solutions' ); ?></div>
                </div>
                <?php if ( have_rows( 'our_story' ) ) : ?>
                    <?php while ( have_rows( 'our_story' ) ) : the_row(); ?>
                        <div class="link">
                            <a data-name="our_story" class="more da-modal">
                                <span><?php the_sub_field( 'title' ); ?></span>
                                <svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17.7782 9.49985L18.6621 10.3837C19.1502 9.89558 19.1502 9.10413 18.6621 8.61597L17.7782 9.49985ZM10.1768 3.66622L16.8943 10.3837L18.6621 8.61597L11.9445 1.89846L10.1768 3.66622ZM16.8943 8.61597L9.82322 15.687L11.591 17.4548L18.6621 10.3837L16.8943 8.61597ZM17.7782 8.24985H2.22183V10.7499H17.7782V8.24985Z" fill="black"/>
                                </svg>
                            </a>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </section>
        <?php endif; ?>
        <?php if ( get_field( 'enable_section_cs' ) == 1 ) : ?>
        <section id="related__cases">
            <div class="container">
                <h2><?php the_field( 'section_title_cs' ); ?></h2>
                <?php
                    $show_cases = implode(",", get_field('show_cases'));
                    echo do_shortcode("[cases-list-ids cats='healthcare' ids=\"$show_cases\"]")
                ?>
            </div>
        </section>
        <?php endif; ?>
    </div>


    <?php get_template_part('template-parts/contact-us', 'section'); ?>

    <section id="faq">
        <div class="container">
            <h2><?php the_field( 'section_title_faq' ); ?></h2>
            <div class="content">
                <?php if ( have_rows( 'questions_faq' ) ) : ?>
                    <?php while ( have_rows( 'questions_faq' ) ) : the_row(); ?>
                        <div class="spoiler">
                            <div class="head"><?php the_sub_field( 'question_title' ); ?></div>
                            <div class="cont"><?php the_sub_field( 'answer' ); ?></div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </section>


<?php if ( have_rows( 'our_story' ) ) : ?>
    <?php while ( have_rows( 'our_story' ) ) : the_row(); ?>
    <div id="our_story" class="daModal da-modal-popup">
        <div class="da-modal-inner">
            <div class="container">
                <div class="da-modal-title"><h2><?php the_sub_field( 'modal_title' ); ?></h2></div>
                <div class="da-modal-content">
                    <div class="text-page">
                        <?php the_sub_field( 'modal_content' ); ?>
                    </div>
                </div>
                <!--                        <button class="da-modal-close"><img src="--><?php //echo get_template_directory_uri(); ?><!--/assets/images/close_modal.svg" alt=""></button>-->
            </div>
        </div>
    </div>
    <?php endwhile; ?>
<?php endif; ?>

<?php
get_footer();
