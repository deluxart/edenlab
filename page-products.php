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
    <div class="products_page">


        <section id="products">
            <div class="container">
                <div class="page_head">
                    <h1 class="title">Products</h1>
                    <p>One of our core principles is to view our clients' projects as our own. If an existing solution does not match the project’s needs or criteria, we don't accept it.</p>
                    <p>No wonder that, in our search for better solutions for our clients’ projects, we invented our own better, faster, and more flexible enterprise-level alternatives. </p>
                    <div class="button">
                        <a data-name="whitepaper_modal" href="download" target="_blank" class="da-modal btn blue">Download White Paper</a>
                    </div>
                </div>
                <div class="content">
                    <?php echo do_shortcode('[product-list]') ?>
                </div>
            </div>
        </section>
    </div>


    <section id="subscribe">
        <div class="container">
            <div class="form__wrap">
                <h2>Stay in touch</h2>
                <p>Subscribe to get insights from FHIR experts, new case studies, articles and announcements  </p>

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
