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
<footer id="footer" class="new_footer">
    <div class="container">
        <div class="content">
            <div class="side">
              <p>Vesivärava str. 50-201, 10152, Tallinn, Estonia</p>
              <a href="mailto@welcome@edenlab.io" class="email">welcome@edenlab.io</a>
              <ul class="socials">
                <li>
                  <a href="#">
                    <svg width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M28.9888 0H26.5677C20.5238 0 16.2106 1.03965 12.5356 2.99189C8.86061 4.94413 5.97647 7.80896 4.01107 11.4593C2.04568 15.1097 0.999023 19.3941 0.999023 25.3976V30.6024C0.999023 36.6059 2.04568 40.8903 4.01107 44.5407C5.97647 48.191 8.86061 51.0559 12.5356 53.0081C16.2106 54.9604 20.5238 56 26.5677 56H28.9888C35.0328 56 39.346 54.9604 43.021 53.0081C46.696 51.0559 49.5801 48.191 51.5455 44.5407C53.5109 40.8903 54.5576 36.6059 54.5576 30.6024V25.3976C54.5576 19.3941 53.5109 15.1097 51.5455 11.4593C49.5801 7.80896 46.696 4.94413 43.021 2.99189C39.346 1.03965 35.0328 0 28.9888 0ZM18.3099 37.2706H22.5173V23.7373H18.3099V37.2706ZM19.0605 21.476C19.4616 21.744 19.9331 21.887 20.4154 21.887C21.7588 21.887 22.8505 20.7953 22.8541 19.4484C22.8541 18.966 22.711 18.4945 22.4431 18.0935C22.1751 17.6925 21.7942 17.3799 21.3486 17.1953C20.903 17.0107 20.4127 16.9624 19.9396 17.0565C19.4666 17.1506 19.032 17.3829 18.691 17.7239C18.3499 18.065 18.1176 18.4995 18.0235 18.9726C17.9295 19.4456 17.9777 19.936 18.1623 20.3816C18.3469 20.8272 18.6595 21.2081 19.0605 21.476ZM34.0656 37.2706H38.2695V29.8482C38.2695 26.2044 37.4862 23.4006 33.2256 23.4006C31.1768 23.4006 29.805 24.5242 29.245 25.5876H29.1883V23.7373H25.1545V37.2706H29.3549V30.5749C29.3549 28.8096 29.6916 27.1012 31.8786 27.1012C34.0373 27.1012 34.0656 29.118 34.0656 30.6883V37.2706Z" fill="white"/>
                    </svg>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <svg width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M28.9888 0H26.5677C20.5238 0 16.2106 1.03965 12.5356 2.99189C8.86061 4.94413 5.97647 7.80896 4.01107 11.4593C2.04568 15.1097 0.999023 19.3941 0.999023 25.3976V30.6024C0.999023 36.6059 2.04568 40.8903 4.01107 44.5407C5.97647 48.191 8.86061 51.0559 12.5356 53.0081C16.2106 54.9604 20.5238 56 26.5677 56H28.9888C35.0328 56 39.346 54.9604 43.021 53.0081C46.696 51.0559 49.5801 48.191 51.5455 44.5407C53.5109 40.8903 54.5576 36.6059 54.5576 30.6024V25.3976C54.5576 19.3941 53.5109 15.1097 51.5455 11.4593C49.5801 7.80896 46.696 4.94413 43.021 2.99189C39.346 1.03965 35.0328 0 28.9888 0ZM32.7499 20.209H30.5034C28.7421 20.209 28.401 21.0458 28.401 22.2762V24.9868H32.6057L32.0573 29.2301H28.401V40.1251H24.0171V29.2337H20.3503V24.9868H24.0171V21.8579C24.0171 18.2262 26.2354 16.2469 29.4768 16.2469C31.0307 16.2469 32.3632 16.363 32.7534 16.4157V20.209H32.7499Z" fill="white"/>
                    </svg>
                  </a>
                </li>
              </ul>
            </div>
          <div class="side">
            <h3>Services</h3>
            <ul>
              <li><a href="#">FHIR</a></li>
              <li><a href="#">Healthcare IT Consulting</a></li>
              <li><a href="#">Product development</a></li>
              <li><a href="#">Software engineering</a></li>
              <li><a href="#">Data & AI</a></li>
              <li><a href="#">Healthcare applications</a></li>
              <li><a href="#">Healthcare integrations</a></li>
              <li><a href="#">Interoperability</a></li>
              <li><a href="#">Regulatory compliance</a></li>
              <li><a href="#">Performance for high-load</a></li>
            </ul>
          </div>
          <div class="side">
            <h3>Solutions</h3>
            <ul>
              <li><a href="#">HIE systems</a></li>
              <li><a href="#">EHR systems</a></li>
              <li><a href="#">HIS</a></li>
              <li><a href="#">CDSS</a></li>
              <li><a href="#">Claim & Billing</a></li>
              <li><a href="#">ePrescriptions</a></li>
              <li><a href="#">Marketing automation</a></li>
              <li><a href="#">Patient portals</a></li>
              <li><a href="#">Health registries</a></li>
              <li><a href="#">CDR</a></li>
              <li><a href="#">Analytics solutions</a></li>
            </ul>
          </div>
          <div class="side">
            <h3>Company</h3>
            <ul>
              <li><a href="#">About us</a></li>
              <li><a href="#">How we work</a></li>
              <li><a href="#">Careers</a></li>
              <li><a href="#">Cases</a></li>
              <li><a href="#">Insights</a></li>
              <li><a href="#">Products</a></li>
            </ul>
          </div>
        </div>
        <div class="logo">
          <a href="<?php echo get_home_url(); ?>">
            <svg width="162" height="30" viewBox="0 0 162 30" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M22.4759 13.3593V16.8578H4.6804V25.012H5.47366C11.1587 25.012 16.8173 25.012 22.5024 24.985C23.1634 24.985 23.3749 25.1734 23.3485 25.8462C23.2956 26.7881 23.3221 27.7569 23.3221 28.7796H0.317458V27.9991C0.317458 19.2798 0.317458 10.5605 0.291016 1.81429C0.291016 1.16842 0.449668 0.953125 1.13716 0.953125C8.25008 0.980036 15.3894 0.980036 22.5024 0.953125C23.1634 0.953125 23.4014 1.11459 23.3485 1.81429C23.2956 2.7831 23.3221 3.75191 23.3221 4.80146H4.70684V13.3593H22.4759Z" fill="white"/>
              <path d="M142.655 11.9595C143.263 11.2598 143.818 10.5332 144.453 9.91427C148.551 5.87755 158.414 6.52342 160.741 14.9467C161.772 18.7143 161.402 22.3474 159.022 25.5229C156.51 28.8599 152.994 29.8556 149.027 29.2636C146.621 28.9137 144.664 27.7296 143.263 25.6844C143.21 25.6036 143.157 25.4691 143.131 25.3614C143.051 25.3883 142.946 25.4422 142.866 25.4691C142.866 26.3572 142.84 27.2722 142.866 28.1602C142.893 28.6985 142.708 28.833 142.179 28.833C141.068 28.8061 139.931 28.833 138.741 28.833V27.9988C138.741 19.1449 138.741 10.2641 138.715 1.41025C138.715 0.737462 138.9 0.522171 139.561 0.549082C140.486 0.602905 141.412 0.575993 142.311 0.549082C142.734 0.549082 142.919 0.656728 142.919 1.14113C142.893 4.3436 142.919 7.54606 142.893 10.7216C142.919 11.1522 142.76 11.529 142.655 11.9595ZM150.006 25.7113C154.289 25.7113 157.171 22.8318 157.171 18.499C157.171 14.1932 154.289 11.2598 150.006 11.2598C145.748 11.2598 142.84 14.1932 142.84 18.499C142.84 22.8049 145.722 25.7113 150.006 25.7113Z" fill="white"/>
              <path d="M44.5281 11.8266C44.4752 11.073 44.3959 10.2657 44.3959 9.45836C44.3695 6.76721 44.3959 4.10298 44.3959 1.41184V0.604492H48.5209V28.8077H44.4488V25.3899C44.2108 25.6052 44.1315 25.6591 44.105 25.7129C41.6724 28.9961 38.3671 29.8842 34.5594 29.2921C28.8215 28.3771 25.6749 23.237 26.1244 17.5049C26.4417 13.522 28.1605 10.3733 31.8095 8.57028C35.7758 6.60574 40.7204 7.44 43.444 10.481C43.8406 10.9385 44.2108 11.4229 44.5281 11.8266ZM37.283 25.7129C41.5666 25.7129 44.4488 22.8064 44.4752 18.5006C44.5017 14.2217 41.5666 11.2614 37.3094 11.2614C33.0258 11.2614 30.1701 14.141 30.1701 18.4737C30.1701 22.8334 32.9994 25.7129 37.283 25.7129Z" fill="white"/>
              <path d="M129.302 16.8577C129.302 15.6736 129.408 14.5433 129.275 13.4938C129.064 11.9598 127.9 11.287 126.525 11.0448C124.569 10.695 122.586 10.6681 120.655 11.1525C119.36 11.4754 118.461 12.1751 118.249 13.6552H114.653C114.336 11.6638 115.446 9.67233 117.376 8.6766C119.095 7.81544 120.946 7.62706 122.797 7.54632C125.124 7.46559 127.451 7.54632 129.672 8.32676C132.237 9.21483 133.585 11.0717 133.612 13.8436C133.638 18.6607 133.612 23.451 133.612 28.2681C133.612 28.4296 133.585 28.5911 133.585 28.8333C132.475 28.8333 131.417 28.8602 130.333 28.8064C130.201 28.8064 129.989 28.4834 129.936 28.295C129.804 27.4608 129.698 26.6534 129.593 25.8192C129.487 25.8192 129.434 25.8192 129.408 25.8461C127.16 28.5372 124.119 29.3177 120.84 29.4522C119.412 29.5061 117.985 29.3177 116.663 28.7525C114.388 27.7837 113.199 25.7115 113.225 22.9128C113.278 19.5219 115.076 17.3959 118.381 17.073C120.655 16.8577 122.956 16.9384 125.256 16.8846C126.605 16.8308 127.953 16.8577 129.302 16.8577ZM129.328 19.791C129.17 19.7641 129.037 19.7372 128.905 19.7372C126.235 19.7372 123.59 19.7372 120.92 19.7372C120.523 19.7372 120.1 19.8179 119.703 19.8987C118.328 20.2485 117.562 21.1097 117.482 22.4014C117.376 24.0699 117.932 25.281 119.333 25.6846C120.391 26.0076 121.554 26.1152 122.638 26.0883C124.807 26.0076 126.763 25.254 128.323 23.6125C129.328 22.536 129.54 21.2173 129.328 19.791Z" fill="white"/>
              <path d="M74.6454 20.0597H56.9292C57.0878 21.513 57.5638 22.7509 58.4099 23.8004C59.6527 25.3344 61.3186 25.9264 63.196 26.0879C64.5445 26.1955 65.893 26.1148 67.1887 25.6035C68.1935 25.1998 68.9868 24.527 69.6214 23.612C69.7536 23.4237 69.9916 23.2353 70.1767 23.2353C71.3401 23.2084 72.5036 23.2084 73.7992 23.2084C73.6935 23.5313 73.6141 23.8004 73.5084 24.0426C72.2656 26.7338 70.1238 28.2946 67.3738 28.9943C64.6238 29.7209 61.8474 29.6671 59.1768 28.6176C55.3162 27.1374 53.3066 24.1503 52.7778 20.0867C52.5134 17.9606 52.6985 15.8346 53.5446 13.8432C54.9989 10.3716 57.6431 8.434 61.2392 7.76121C63.4604 7.33063 65.6815 7.43828 67.8498 8.16489C71.7367 9.48355 73.7992 12.3631 74.4074 16.3729C74.5925 17.557 74.5925 18.768 74.6454 20.0597ZM70.494 16.9918C70.2031 13.9239 68.643 11.7979 66.0781 11.0713C64.333 10.5869 62.5878 10.6407 60.8691 11.2597C58.5422 12.094 56.797 14.6775 56.9821 16.9918H70.494V16.9918Z" fill="white"/>
              <path d="M78.8224 8.16541H82.8681V11.5293L83.0267 11.637C83.0796 11.5562 83.106 11.4486 83.1589 11.3679C85.0363 8.48834 87.8392 7.51953 91.0651 7.51953C92.6252 7.51953 94.1324 7.76173 95.5338 8.48834C97.9136 9.69936 99.0771 11.7715 99.5266 14.355C99.6852 15.27 99.7381 16.2119 99.7381 17.1269C99.7646 20.7869 99.7381 24.4468 99.7381 28.1068C99.7381 28.3221 99.7117 28.5105 99.6852 28.7527H95.5338V27.9991C95.5338 24.689 95.5603 21.3789 95.5074 18.0688C95.5074 17.1269 95.428 16.1581 95.2165 15.2431C94.6877 13.0902 93.2598 11.8254 91.118 11.4217C89.6901 11.1526 88.2622 11.2064 86.8873 11.6639C84.5075 12.4443 83.0267 14.4089 82.9738 17.0193C82.9209 20.6523 82.9474 24.2854 82.9209 27.9453C82.9209 28.8872 82.9209 28.8872 81.969 28.8872H78.7695V8.16541H78.8224Z" fill="white"/>
              <path d="M109.073 0.604492H104.975V28.7808H109.073V0.604492Z" fill="white"/>
            </svg>
          </a>
        </div>
        <div class="foot">
          <div>
            <ul>
              <li><a href="#">Terms of use</a></li>
              <li><a href="#"> Privacy policy</a></li>
            </ul>
          </div>
          <div>&#169; Edenlab, <?php echo date("Y"); ?></div>
        </div>
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
                    <div class="edenlab_contact_from" data-name="wp_suite" data-file="<?php if ( get_field( 'default_wp_file', 'option' ) ) : ?><?php the_field( 'default_wp_file', 'option' ); ?><?php endif; ?>" data-file-name="<?php if ( get_field( 'default_wp_name', 'option' ) ) : ?><?php the_field( 'default_wp_name', 'option' ); ?><?php endif; ?>">
                        <?php echo do_shortcode('[contact-form-7 id="856" title="Contact form - Promo block"]') ?>
                    </div>
                </div>
            </div>
        </div>
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
                const form_wp = document.querySelectorAll('.edenlab_contact_from');

                form_wp.forEach(function(form) {
                    const dataNameAttribute = form.getAttribute('data-name'); // Form name
                    const dataFileUrl = form.getAttribute('data-file'); // Form name
                    const dataFileName = form.getAttribute('data-file-name'); // Form name

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
