<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Edenlab
 */

?>
<div class="da-modal-open-bg"></div>

<?php if (is_404() || is_page_template('coming-soon.php')) { ?>

<?php } else { ?>
<footer id="footer">
    <div class="container">
        <div class="content">
            <div class="navigation">
                <?php if ( have_rows( 'links', 'option' ) ) : ?>
                    <ul>
                    <?php while ( have_rows( 'links', 'option' ) ) : the_row(); ?>
                        <?php $link = get_sub_field( 'link' ); ?>
                        <?php if ( $link ) : ?>
                            <li><a href="<?php echo esc_url( $link); ?>"><?php the_sub_field( 'title' ); ?></a></li>
                        <?php endif; ?>
                    <?php endwhile; ?>
                    </ul>
                <?php endif; ?>

                <?php if ( have_rows( 'links_sec', 'option' ) ) : ?>
                    <ul>
                        <?php while ( have_rows( 'links_sec', 'option' ) ) : the_row(); ?>
                            <?php $link = get_sub_field( 'link' ); ?>
                            <?php if ( $link ) : ?>
                                <li><a href="<?php echo esc_url( $link); ?>"><?php the_sub_field( 'title' ); ?></a></li>
                            <?php endif; ?>
                        <?php endwhile; ?>
                    </ul>
                <?php endif; ?>
            </div>
            <div class="location">
                <h4>Adress:</h4>
                <?php the_field( 'adress', 'option' ); ?>
            </div>
            <?php if (get_field( 'clutch_code', 'option' )) { ?>
                <div class="clutch">
                    <?php the_field( 'clutch_code', 'option' ); ?>
                </div>
            <?php } ?>
        </div>
        <div class="foot">
            <div>&#169; Edenlab, <?php echo date("Y"); ?></div>
        </div>
    </div>
    <div class="kodjin">
        <p>Our solutions for high-load systems: <a href="https://kodjin.com" target="_blank">Kodjin Interoperability Suite</a></p>
    </div>
</footer>
<?php } ?>
</div><!-- #page -->

<div id="whitepaper_modal" class="daModal da-modal-popup">
    <div class="da-modal-inner">
        <div class="container">
            <div class="da-modal-title"><h2><?php the_sub_field( 'modal_title' ); ?></h2></div>
            <div class="da-modal-content">
                <div class="text-page">
                    <div class="form">
                        <div class="form__wrap">
                            <h2>Kodjin Whitepaper</h2>
                            <p>Please, leave your email to get Kodjin White Paper</p>
                            <?php echo do_shortcode('[contact-form-7 id="856" title="Contact form - Promo block"]') ?>
                        </div>
                        <div class="form__sent">
                            <div>
                                <div>
                                    <h3>Your form has been submitted successfully.</h3>
                                    <p>Find the Kodjin Interoperability Suite White Paper in a new tab.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--<div id="exitModal" class="daModal da-modal-popup exitModal-popup open">-->
<!--    <div class="da-modal-inner">-->
<!--        <div class="container">-->
<!--            <div class="da-modal-title"><h2>--><?php //the_sub_field( 'modal_title' ); ?><!--</h2></div>-->
<!--            <div class="da-modal-content">-->
<!--                <div class="text-page">-->
<!--                    <div class="form">-->
<!--                        <div class="form__wrap">-->
<!--                            <h2>Kodjin Whitepaper</h2>-->
<!--                            <p>Please, leave your email to get Kodjin White Paper</p>-->
<!--                            --><?php //echo do_shortcode('[contact-form-7 id="856" title="Contact form - Promo block"]') ?>
<!--                        </div>-->
<!--                        <div class="form__sent">-->
<!--                            <div>-->
<!--                                <div>-->
<!--                                    <h3>Your form has been submitted successfully.</h3>-->
<!--                                    <p>Find the Kodjin Interoperability Suite White Paper in a new tab.</p>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->

<div id="auto_banner_whitepapper" class="daModal da-modal-popup exitModal-popup">
    <div class="da-modal-inner exitModal-inner">
        <div class="exitModal">
            <div class="head">
                <h3>Read more about event-driven FHIR Server with unique configuration options</h3>
            </div>
            <div class="row">
                <div class="img">
                    <img src="https://kodjin.com/wp-content/uploads/2023/01/wp_image-1.png" alt="" />
                </div>
                <div class="form">
                    <?php echo do_shortcode('[contact-form-7 id="856" title="Contact form - Promo block"]') ?>
                </div>
            </div>
        </div>
<!--        <div class="webinarModal">-->
<!--            <div class="head">-->
<!--                <h4>Free webinar</h4>-->
<!--            </div>-->
<!--            <div class="subHead">-->
<!--                <h3>Data quality in healthcare: <br/>How FHIR profiles can help</h3>-->
<!--                <div>-->
<!--                    <p>February 8, 2023</p>-->
<!--                    <p>12:00 PM EST</p>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="cont">-->
<!--                <p>Edenlab team is inviting you to join the upcoming webinar, <br/>orginized by HL7 International</p>-->
<!--            </div>-->
<!--            <div class="footModal">-->
<!--                <div>-->
<!--                    <a href="/blog/join-our-free-webinar-about-data-quality" id="btnBannerWebinar" class="btn blue"><span>Read more</span><svg width="31" height="9" viewBox="0 0 31 9" fill="none" xmlns="http://www.w3.org/2000/svg">-->
<!--                            <path d="M30.3536 4.85355C30.5488 4.65829 30.5488 4.34171 30.3536 4.14644L27.1716 0.964464C26.9763 0.769202 26.6597 0.769202 26.4645 0.964464C26.2692 1.15973 26.2692 1.47631 26.4645 1.67157L29.2929 4.5L26.4645 7.32842C26.2692 7.52369 26.2692 7.84027 26.4645 8.03553C26.6597 8.23079 26.9763 8.23079 27.1716 8.03553L30.3536 4.85355ZM4.37114e-08 5L30 5L30 4L-4.37114e-08 4L4.37114e-08 5Z" fill="white"/>-->
<!--                        </svg>-->
<!--                    </a>-->
<!--                </div>-->
<!--                <div class="logos">-->
<!--                    <img src="https://kodjin.com/wp-content/uploads/2022/03/edenlab_logo.svg" width="159" height="38" alt="Edenlab" />-->
<!--                    <img src="https://kodjin.com/wp-content/uploads/2023/01/web_logo_2.png" alt="HL7" />-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
        <button class="da-modal-close exitModal-close"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/close_icon.svg" alt=""></button>
    </div>
</div>


<!-- <div class="cookies-info js-cookies-info">
    <div class="cookies-info__text">
        <p>We use cookies to provide the best site experience. The cookies cannot identify you.
            By continuing your usage of the website, you agree to the <a href="/privacy-policy/">Privacy policy</a>.</p>
        <span class="btn blue js-cookies-info__button">I agree</span>
    </div>
</div>
 -->
<?php wp_footer(); ?>

<script>
    jQuery(window).on('load',function() {
        sbjs.init();

        if (jQuery('body').hasClass('home') || jQuery('body').hasClass('page-template-page-crm-home')) {
            jQuery('html, body').animate({scrollTop: 1}, 100);
        }

        let vh = window.innerHeight * 0.01;
        document.documentElement.style.setProperty('--vh', `${vh}px`);

        jQuery('.agree').prop('checked', false);
        jQuery('.agreesubscribe').prop('checked', false);

        jQuery(document).ready(function(){
            setTimeout(() => {
                const greet = function(){
                    return ga.getAll()[0].get('clientId');
                }

                const getClientId = function() {
                    const trackers = ga.getAll();
                    if (trackers.length > 0) {
                        console.log(trackers[0].get('clientId'), 'clientId')
                        return trackers[0].get('clientId');
                    }
                    return '';
                };


                const forms = document.querySelectorAll('.wpcf7');

                forms.forEach(function(form) {
                    const inputField_current_page_url = form.querySelector('input[name="current_page_url"]');
                    const inputField_timezone = form.querySelector('input[name="timezone"]');
                    const countryVal = form.querySelector('input[name="textarea-119"]');
                    const hidId = form.querySelector('input[name="textarea-123"]');
                    const first_source = form.querySelector('input[name="textarea-125"]');
                    const last_source = form.querySelector('input[name="textarea-127"]');
                    const first_page = form.querySelector('input[name="textarea-129"]');
                    const last_landing_page = form.querySelector('input[name="textarea-131"]');

                    if (inputField_timezone) {
                        inputField_timezone.setAttribute('value', Intl.DateTimeFormat().resolvedOptions().timeZone);
                    }

                    if (inputField_current_page_url) {
                        inputField_current_page_url.setAttribute('value', window.location.href);
                    }

                    if (countryVal) {
                        fetch('https://ipinfo.io/json')
                            .then(response => response.json())
                            .then(data => {
                                countryVal.value = data.country;
                            })
                            .catch(error => {
                                console.error("Error fetching IP address:", error);
                            });
                    }

                    if (hidId) {
                        hidId.setAttribute('value', getClientId());
                    }

                    if (first_source) {
                        first_source.setAttribute('value', `${sbjs.get.first.src} - ${sbjs.get.first.mdm} - ${sbjs.get.first.cmp} - ${sbjs.get.first.trm}`);
                    }

                    if (last_source) {
                        last_source.setAttribute('value', `${sbjs.get.current.src} - ${sbjs.get.current.mdm} - ${sbjs.get.current.cmp} - ${sbjs.get.current.trm}`);
                    }

                    if (first_page) {
                        first_page.setAttribute('value', sbjs.get.first_add.ep);
                    }

                    if (last_landing_page) {
                        last_landing_page.setAttribute('value', sbjs.get.current_add.ep);
                    }
                });

                //
                //
                // const countryInfo = document.querySelector("#country");
                // const countryInfo_about = document.querySelector("#country_about");
                // const countryInfo_subscribe = document.querySelector("#country_subscribe");
                //
                //
                // const country = document.querySelector("#countryVal");
                // const country_about = document.querySelector("#countryVal_about");
                // const country_subscribe = document.querySelector("#countryVal_subscribe");
                //
                // const hidId = document.querySelector("#hidId");
                // const hidId_about = document.querySelector("#hidId_about");
                // const hidId_subscribe = document.querySelector("#hidId_subscribe");
                //
                // const first_source = document.querySelector("#first_source");
                // const first_source_about = document.querySelector("#first_source_about");
                // const first_source_subscribe = document.querySelector("#first_source_subscribe");
                //
                // const last_source = document.querySelector("#last_source");
                // const last_source_about = document.querySelector("#last_source_about");
                // const last_source_subscribe = document.querySelector("#last_source_subscribe");
                //
                // const first_page = document.querySelector("#first_page");
                // const first_page_about = document.querySelector("#first_page_about");
                // const first_page_subscribe = document.querySelector("#first_page_subscribe");
                //
                // const last_landing_page = document.querySelector("#last_landing_page");
                // const last_landing_page_about = document.querySelector("#last_landing_page_about");
                // const last_landing_page_subscribe = document.querySelector("#last_landing_page_subscribe");
                //
                // if (!!country) {
                //     country.value = countryInfo.textContent;
                // }
                //
                // if (!!country_about) {
                //     country_about.value = countryInfo_about.textContent;
                // }
                //
                // if (!!country_subscribe) {
                //     country_subscribe.value = countryInfo_subscribe.textContent;
                // }
                //
                // if (!!hidId) {
                //     hidId.value = greet();
                // }
                //
                // if (!!hidId_about) {
                //     hidId_about.value = greet();
                // }
                //
                // if (!!hidId_subscribe) {
                //     hidId_subscribe.value = greet();
                // }
                //
                // if (!!first_source) {
                //     first_source.value = `${sbjs.get.first.src} - ${sbjs.get.first.mdm} - ${sbjs.get.first.cmp} - ${sbjs.get.first.trm}`;
                // }
                //
                // if (!!first_source_about) {
                //     first_source_about.value = `${sbjs.get.first.src} - ${sbjs.get.first.mdm} - ${sbjs.get.first.cmp} - ${sbjs.get.first.trm}`;
                // }
                //
                // if (!!first_source_subscribe) {
                //     first_source_subscribe.value = `${sbjs.get.first.src} - ${sbjs.get.first.mdm} - ${sbjs.get.first.cmp} - ${sbjs.get.first.trm}`;
                // }
                //
                // if (!!last_source) {
                //     last_source.value = `${sbjs.get.current.src} - ${sbjs.get.current.mdm} - ${sbjs.get.current.cmp} - ${sbjs.get.current.trm}`;
                // }
                //
                // if (!!last_source_about) {
                //     last_source_about.value = `${sbjs.get.current.src} - ${sbjs.get.current.mdm} - ${sbjs.get.current.cmp} - ${sbjs.get.current.trm}`;
                // }
                //
                // if (!!last_source_subscribe) {
                //     last_source_subscribe.value = `${sbjs.get.current.src} - ${sbjs.get.current.mdm} - ${sbjs.get.current.cmp} - ${sbjs.get.current.trm}`;
                // }
                //
                // if (!!first_page) {
                //     first_page.value = sbjs.get.first_add.ep;
                // }
                //
                // if (!!first_page_about) {
                //     first_page_about.value = sbjs.get.first_add.ep;
                // }
                //
                // if (!!first_page_subscribe) {
                //     first_page_subscribe.value = sbjs.get.first_add.ep;
                // }
                //
                // if (!!last_landing_page) {
                //     last_landing_page.value = sbjs.get.current_add.ep;
                // }
                //
                // if (!!last_landing_page_about) {
                //     last_landing_page_about.value = sbjs.get.current_add.ep;
                // }
                //
                // if (!!last_landing_page_subscribe) {
                //     last_landing_page_subscribe.value = sbjs.get.current_add.ep;
                // }
            }, 5000);

        });
    });
    jQuery(window).on('load',function(){
        jQuery('.str3').liMarquee({
            circular:true,
            startShow:true
        });



// Cache selectors
        var lastId,
            topMenu = jQuery("#case-nav"),
            topMenuHeight = topMenu.outerHeight(),
            // All list items
            menuItems = topMenu.find("a"),
            // Anchors corresponding to menu items
            scrollItems = menuItems.map(function(){
                var temp = jQuery(this).attr("href");
                console.log('temp', temp );
                var ID = temp.split('#').pop();
                console.log('ID', ID );
                if(!ID){
                    console.log('ID undefined');
                    var item = jQuery('body');
                } else {
                    var item = jQuery('#'+ID);
                }

                console.log('item', item );
                if (item.length) { return item; }
            });

// Bind click handler to menu items
// so we can get a fancy scroll animation
        menuItems.click(function(e){
            const href = jQuery(this).attr("href"),
                offsetTop = href === "#" ? 0 : jQuery(href).offset().top-topMenuHeight+1;
            jQuery('html, body').stop().animate({
                scrollTop: offsetTop
            }, 300);
            e.preventDefault();
        });

// Bind to scroll
        jQuery(window).scroll(function(){
            // Get container scroll position
            var fromTop = jQuery(this).scrollTop()+topMenuHeight;

            // Get id of current scroll item
            var cur = scrollItems.map(function(){
                if (jQuery(this).offset().top < fromTop)
                    return this;
            });
            // Get the id of the current element
            cur = cur[cur.length-1];
            var id = cur && cur.length ? cur[0].id : "";

            if (lastId !== id) {
                lastId = id;
                // Set/remove active class
                menuItems
                    .parent().removeClass("active")
                    .end().filter("[href='#"+id+"']").parent().addClass("active");
            }
        });
    })
</script>

<script>
    jQuery(function() {
        jQuery.exitIntent('enable');
        setInterval(function(){
            jQuery(document).bind('exitintent', function() {
                // jQuery("#warning").slideDown();
                if (jQuery("#auto_banner_whitepapper").hasClass("closed-modal")) {
                    //
                } else {
                    jQuery('.da-modal-open-bg').addClass("open").fadeIn();
                    jQuery("#auto_banner_whitepapper").addClass("open");
                    jQuery("#auto_banner_whitepapper").addClass("opened-modal");
                }
            });
        }, 15000);
    });
</script>

<!--/js/fm.revealator.jquery.js-->
<script src="<?php echo get_bloginfo('template_url') ?>/js/fm.revealator.jquery.js?11"></script>
<script src="https://www.youtube.com/player_api"></script>

</body>
</html>
