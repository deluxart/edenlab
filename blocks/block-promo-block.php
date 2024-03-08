<?php
    $block_name = block_value( 'block-title' );
    $custom_id = mb_strimwidth(strtolower(str_replace(" ", "_", $block_name)), 0, 20);
?>

<div class="post-promo">
    <div>
        <img src="<?php block_field( 'block-image' ); ?>" alt="" />
    </div>
    <div class="post-promo-text">
        <h3><?php block_field( 'block-title' ); ?></h3>
        <div class="cont"><?php block_field( 'block-description' ); ?></div>
        <div>
            <a data-name="<?php echo $custom_id; ?>" href="download" target="_blank" class="more da-modal"><?php block_field( 'download-link-title' ); ?></a>
        </div>
    </div>
</div>


<div id="<?php echo $custom_id ?>" class="daModal da-modal-popup">
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
                                    <p>Find the Kodjin FHIR Server White Paper in a new tab.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    document.addEventListener( 'wpcf7mailsent', function( event ) {
        if ( '856' == event.detail.contactFormId ) {
            const PDFurl = "<?php block_field( 'download-link' ); ?>";
            window.open(PDFurl, '_blank');
            jQuery('#<?php echo $custom_id ?> .form__wrap').hide();
            jQuery('#<?php echo $custom_id ?> .form__sent').show();
        }
    }, false );
</script>