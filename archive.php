<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Edenlab
 */

get_header();
?>
    <div class="blog blog_page">
        <div class="container">
            <div class="page_head">
                <h1 class="title"><?php the_title(); ?></h1>
                <?php echo do_shortcode( '[searchandfilter id="368"]' ); ?>
            </div>

            <?php echo do_shortcode( '[searchandfilter id="368" show="results"]' ); ?>
        </div>
    </div>


    <section id="subscribe">
        <div class="container">
            <div class="form__wrap">
                <h2>Subscribe for the news</h2>

                <div id="feedback" class="form">
                    <?php echo do_shortcode('[contact-form-7 id="274" title="Subscribe form"]') ?>
                </div>
            </div>
            <div class="form__sent">
                <h2>Great!</h2>
                <h3>Our team we’ll be glad to share our expertise with you via email</h3>
            </div>
        </div>
    </section>

<?php get_template_part('template-parts/contact-us', 'section'); ?>

<?php
get_footer();
