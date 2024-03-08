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
    <div class="blog blog_page">
        <div class="container">
            <div class="page_head">
                <h1 class="title"> <?php echo get_the_title(32); ?></h1>

                <!--                <p>These are some of our thoughts on technology, business processes and development people.</p>-->
                <?php echo do_shortcode( '[searchandfilter id="368"]' ); ?>
            </div>

            <?php echo do_shortcode( '[searchandfilter id="368" show="results"]' ); ?>
            <!--                <div class="posts_list__first">-->
            <!--                    <div class="single__item">-->
            <!--                        <div class="date_cat">-->
            <!--                            <ul>-->
            <!--                                <li><a href="#" class="tag orange">FHIR</a></li>-->
            <!--                            </ul>-->
            <!--                            <span>8 April, 2020</span>-->
            <!--                        </div>-->
            <!--                        <h2>The Issue of Interoperability of Healthcare Data</h2>-->
            <!--                        <p>With the Interoperability and Patient Access final rule from the Centers for Medicaid & Medicare Services (CMS), health care stakeholders must ensure more streamlined data exchange between patients, providers, and payers.</p>-->
            <!--                        <div class="author">-->
            <!--                            <div class="photo">-->
            <!--                                <img src="--><?php //echo get_template_directory_uri(); ?><!--/assets/images/author.png" alt="">-->
            <!--                            </div>-->
            <!--                            <div class="info">-->
            <!--                                <h4>Konstantyn Konstantynopolskyy</h4>-->
            <!--                                <p>CEO of Coprporate Corporetion</p>-->
            <!--                            </div>-->
            <!--                        </div>-->
            <!--                        <a href="#" class="more">Learn more</a>-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--                <div class="posts_list__list">-->
            <!--                    <div class="single__item">-->
            <!--                        <div class="date_cat">-->
            <!--                            <ul>-->
            <!--                                <li><a href="#" class="tag orange">FHIR</a></li>-->
            <!--                                <li><a href="#" class="tag green">Healthcare</a></li>-->
            <!--                            </ul>-->
            <!--                            <span>8 April, 2020</span>-->
            <!--                        </div>-->
            <!--                        <h2>What Is FHIR: A Brief Overview of Its Role in Interoperability</h2>-->
            <!--                        <p>With the Interoperability and Patient Access final rule from the Centers for Medicaid & Medicare Services (CMS), health care stakeholders must ensure more streamlined data exchange between patients, providers, and payers.</p>-->
            <!--                        <a href="#" class="more">Learn More</a>-->
            <!--                    </div>-->
            <!--                    <div class="single__item">-->
            <!--                        <div class="date_cat">-->
            <!--                            <ul>-->
            <!--                                <li><a href="#" class="tag orange">FHIR</a></li>-->
            <!--                            </ul>-->
            <!--                            <span>8 April, 2020</span>-->
            <!--                        </div>-->
            <!--                        <h2>10 Key Steps to FHIR </h2>-->
            <!--                        <p>With the Interoperability and Patient Access final rule from the Centers for Medicaid & Medicare Services (CMS), health care stakeholders must ensure more streamlined data exchange between patients, providers, and payers.</p>-->
            <!--                        <a href="#" class="more">Learn More</a>-->
            <!--                    </div>-->
            <!--                    <div class="single__item">-->
            <!--                        <div class="date_cat">-->
            <!--                            <ul>-->
            <!--                                <li><a href="#" class="tag orange">FHIR</a></li>-->
            <!--                            </ul>-->
            <!--                            <span>8 April, 2020</span>-->
            <!--                        </div>-->
            <!--                        <h2>10 Key Steps to FHIR </h2>-->
            <!--                        <p>With the Interoperability and Patient Access final rule from the Centers for Medicaid & Medicare Services (CMS), health care stakeholders must ensure more streamlined data exchange between patients, providers, and payers.</p>-->
            <!--                        <a href="#" class="more">Learn More</a>-->
            <!--                    </div>-->
            <!--                    <div class="single__item">-->
            <!--                        <div class="date_cat">-->
            <!--                            <ul>-->
            <!--                                <li><a href="#" class="tag orange">FHIR</a></li>-->
            <!--                                <li><a href="#" class="tag green">Healthcare</a></li>-->
            <!--                            </ul>-->
            <!--                            <span>8 April, 2020</span>-->
            <!--                        </div>-->
            <!--                        <h2>What Is FHIR: A Brief Overview of Its Role in Interoperability</h2>-->
            <!--                        <p>With the Interoperability and Patient Access final rule from the Centers for Medicaid & Medicare Services (CMS), health care stakeholders must ensure more streamlined data exchange between patients, providers, and payers.</p>-->
            <!--                        <a href="#" class="more">Learn More</a>-->
            <!--                    </div>-->
            <!--                </div>-->
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
