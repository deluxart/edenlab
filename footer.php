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
                            <div class="edenlab_contact_from" data-name="wp_suite" data-file="<?php if ( get_field( 'default_wp_file', 'option' ) ) : ?><?php the_field( 'default_wp_file', 'option' ); ?><?php endif; ?>" data-file-name="<?php if ( get_field( 'default_wp_name', 'option' ) ) : ?><?php the_field( 'default_wp_name', 'option' ); ?><?php endif; ?>">
                                <?php echo do_shortcode('[contact-form-7 id="856" title="Contact form - Promo block"]') ?>
                            </div>
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
<!--TODO-->
<!--<div id="auto_banner_whitepapper" class="daModal da-modal-popup exitModal-popup">-->
<!--    <div class="da-modal-inner exitModal-inner">-->
<!--        <div class="exitModal">-->
<!--            <div class="head">-->
<!--                <h3>Read more about event-driven FHIR Server with unique configuration options</h3>-->
<!--            </div>-->
<!--            <div class="row">-->
<!--                <div class="img">-->
<!--                    <img src="https://kodjin.com/wp-content/uploads/2023/01/wp_image-1.png" alt="" />-->
<!--                </div>-->
<!--                <div class="form">-->
<!--                    <div class="edenlab_contact_from" data-name="wp_suite" data-file="--><?php //if ( get_field( 'default_wp_file', 'option' ) ) : ?><!----><?php //the_field( 'default_wp_file', 'option' ); ?><!----><?php //endif; ?><!--" data-file-name="--><?php //if ( get_field( 'default_wp_name', 'option' ) ) : ?><!----><?php //the_field( 'default_wp_name', 'option' ); ?><!----><?php //endif; ?><!--">-->
<!--                        --><?php //echo do_shortcode('[contact-form-7 id="856" title="Contact form - Promo block"]') ?>
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <button class="da-modal-close exitModal-close"><img src="--><?php //echo get_template_directory_uri(); ?><!--/assets/images/close_icon.svg" alt=""></button>-->
<!--    </div>-->
<!--</div>-->


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
                const form_wp = document.querySelectorAll('.edenlab_contact_from');

                form_wp.forEach(function(form) {
                    const dataNameAttribute = form.getAttribute('data-name'); // Form name
                    const dataFileUrl = form.getAttribute('data-file'); // Form name
                    const dataFileName = form.getAttribute('data-file-name'); // Form name

                    console.log(dataNameAttribute, 'dataNameAttribute');
                    console.log(dataFileUrl, 'dataFileUrl');
                    console.log(dataFileName, 'dataFileName');

                    if (dataNameAttribute) {
                        const inputField_pdf = form.querySelector('input[name="pdf_file"]'); // PDF_File field
                        const inputField_pdfName = form.querySelector('input[name="pdf_name"]'); // PDF_Name field

                        if (inputField_pdf) {
                            inputField_pdf.setAttribute('value', dataFileUrl);
                            inputField_pdfName.setAttribute('value', dataFileName);
                        }
                    }
                });

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
                                countryVal.value = `${data.city} (${data.country}) `;
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

      if (window.location.hostname === 'edenlab.local') {
        return;
      }

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
