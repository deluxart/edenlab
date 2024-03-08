const swiper = new Swiper('.swiper-container');

// Add tabs
jQuery(document).ready(function(){
    jQuery('.d-tabs > ul > li').click(function(){
        const tab_id = jQuery(this).attr('data-tab');
        jQuery('.d-tabs > ul > li').removeClass('active');
        jQuery('.d-tabs .d-content').removeClass('active');
        jQuery(this).addClass('active');
        jQuery("#"+tab_id).addClass('active');
       return false;
    });
});

// Add modal
jQuery(document).ready(function () {
    jQuery('button.da-modal, a.da-modal').click(function (e) {
        const modal_id = jQuery(this).attr('data-name');
        jQuery('.da-modal-open-bg').addClass("open").fadeIn();
        jQuery("#"+modal_id).addClass("open");
        e.preventDefault();
    });

    jQuery('button.da-modal-close').click(function () {
        jQuery('.daModal.open .read-form-modal').show();
        jQuery('.daModal.open .send-form-modal').hide();
        jQuery('.daModal.open .wpcf7-response-output').hide();
        jQuery('.daModal.open .wpcf7-form.sent').show();
        jQuery('.daModal').removeClass('open');
        jQuery('.da-modal-open-bg').fadeOut();
    });

    jQuery('.da-modal-open-bg').click(function () {
        jQuery('.daModal.open .read-form-modal').show();
        jQuery('.daModal.open .send-form-modal').hide();
        jQuery('.daModal.open .wpcf7-response-output').hide();
        jQuery('.daModal.open .wpcf7-form.sent').show();
        jQuery('.daModal').removeClass('open');
        jQuery('.da-modal-open-bg').fadeOut();
    });
});

// Custom spoiler
jQuery('.spoiler > .head').on('click', function(e){
    jQuery('div.spoiler').not(this).children('.cont').stop().slideUp(300);
    jQuery(this).closest('div.spoiler').children('.cont').stop().slideUp(300);
    jQuery('.spoiler > .head').not(this).removeClass('active');
    jQuery('.spoiler > .cont').not(this).removeClass('active');
    jQuery(this).closest('div.spoiler').children('.cont').stop().slideToggle(300).toggleClass('active');
    jQuery(this).toggleClass('active');
    e.preventDefault();
});

jQuery('#collapseBackground').on('click', function(e) {
    jQuery('div.collapseBackground').stop().slideToggle(300);
    jQuery(this).toggleClass('active');
    e.preventDefault();
});

jQuery(document).ready(function(){
    jQuery('.nav_icon').click(function(){
        jQuery(this).children('#nav-icon').toggleClass('active');
        jQuery('body').toggleClass('active-nav');
        jQuery('#header .content .navigation').toggleClass('active');
    });
});

// Fixed header on scroll
jQuery(window).scroll(function () {
    if (jQuery(this).scrollTop() > 1) {
        jQuery('#header').addClass('fixed_header');
    } else {
        jQuery('#header').removeClass('fixed_header');
    }
});