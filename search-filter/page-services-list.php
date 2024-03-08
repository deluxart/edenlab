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

    <section id="page_head">
        <div class="container">
            <h1>Our services</h1>
            <p>Our core expertise is custom software development for high-load projects based on the FHIR Standard</p>
        </div>
    </section>

    <div class="products_page">


        <section id="products" class="services">
            <div class="container">
                <div class="content">
                    <div class="block">
                        <div class="icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/fhir_icon.svg" alt="">
                        </div>
                        <h3>FHIR-based data management</h3>
                        <p>Turn-key FHIR Server for Healthcare Data </p>
                        <ul class="disk">
                            <li>Clinical Data Repository</li>
                            <li>Master Patient Index</li>
                            <li>Provider Directory</li>
                            <li>Medicine and/or Drug register</li>
                            <li>ETL engine (Extract, Transform, and Load)</li>
                            <li>FHIR Facade Development (FHIR API)</li>
                            <li>Healthcare Information Exchange</li>
                        </ul>
                        <a href="#">View cases</a>
                    </div>
                    <div class="block">
                        <div class="icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/terminology_icon.svg" alt="">
                        </div>
                        <h3>Healthcare key operations management </h3>
                        <ul class="disk">
                            <li>Electronic prescription</li>
                            <li>Electronic referral system</li>
                            <li>Diagnostic reports </li>
                            <li>Appointments and scheduling</li>
                        </ul>
                        <a href="#">View cases</a>
                    </div>
                </div>
            </div>
        </section>


        <section id="how_we_work">
            <div class="container">
                <div class="title">
                    <h2>How We Work</h2>
                    <p>Here, you’ll find the typical workflow for our projects. The steps may differ from one project to another because we're always trying to be flexible to help you get the most out of our cooperation, but the general workflow looks like this.</p>
                </div>

                <div class="list">
                    <ul>
                        <li><a href="#"><span>First meeting</span></a></li>
                        <li><a href="#"><span>Discovery phase</span></a></li>
                        <li><a href="#"><span>Product design</span></a></li>
                        <li><a href="#"><span>MVP Development</span></a></li>
                        <li><a href="#"><span>Release 1.0 and further development</span></a></li>
                        <li><a href="#"><span>Support and maintenance</span></a></li>
                    </ul>
                </div>
            </div>
        </section>
    </div>

    <section id="contact_us">
        <div class="container">
            <div class="content">
                <div class="form">
                    <h2>Contact us</h2>
                    <p>Get your experienced FHIR developers for hire, schedule Kodjin FHIR server demo, or request a consultation</p>
                    <?php echo do_shortcode('[contact-form-7 id="5" title="Contact form"]') ?>
                </div>
                <div class="contacts">
                    <div>
                        <p>Write us:</p>
                        <a href="mailto:welcome@edenlab.io" class="mail">welcome@edenlab.io</a>
                    </div>
                    <div>
                        <p>Phone:</p>
                        <a href="#">+38 099 300 08 53</a>
                    </div>
                    <div>
                        <p>Address:</p>
                        <p>33 T. Shevchenko blvd, 11 th floor
                            Kiev, Ukraine</p>
                    </div>
                    <ul class="socials">
                        <li>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

<?php
get_footer();
