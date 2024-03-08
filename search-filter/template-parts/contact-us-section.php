<section id="contact_us">
    <div class="container">
        <div class="content">
            <div id="feedback" class="form">
                <div class="form__wrap">
                    <h2 class=" revealator-slideup revealator-duration7 revealator-once revealator-below"><?php the_field( 'form_title_contact' ); ?></h2>
                    <p class=" revealator-slideup revealator-duration7 revealator-once revealator-below"><?php the_field( 'form_description_contact' ); ?></p>
                    <div>
                        <?php if (get_field( 'form_shortcode' ) == 'basic') { ?>
                            <?php echo do_shortcode('[contact-form-7 id="5" title="Contact form"]') ?>
                        <?php } else { ?>
                            <?php echo do_shortcode('[contact-form-7 id="375" title="Contact form - About"]') ?>
                        <?php } ?>
                    </div>
                </div>
                <div class="form__sent">
                    <div>
                        <div>
                            <h3>Your form has been submitted successfully</h3>
                            <p>We will contact you shortly</p>
                        </div>
                    </div>
                </div>
            </div>
            <?php if ( have_rows( 'contacts_contact' ) ) : ?>
                <div class="contacts">
                    <?php while ( have_rows( 'contacts_contact' ) ) : the_row();
                        $phone_link = preg_replace('![^0-9]+!', '', get_sub_field( 'phone' ));
                        ?>
                        <div class="revealator-slideup revealator-duration7 revealator-once revealator-below">
                            <span>Write us:</span>
                            <a href="mailto:<?php the_sub_field( 'email' ); ?>" class="mail"><?php the_sub_field( 'email' ); ?></a>
                        </div>

                        <?php if ( get_sub_field( 'phone' ) ) { ?>
                        <div class="revealator-slideup revealator-duration7 revealator-once revealator-below">
                            <span>Phone:</span>
                            <a href="tel:<?php echo $phone_link; ?>"><?php the_sub_field( 'phone' ); ?></a>
                        </div>
                        <?php } ?>
                        <?php if ( get_sub_field( 'phone_second' ) ) {
                            $phone_link_second = preg_replace('![^0-9]+!', '', get_sub_field( 'phone_second' ));
                            ?>
                            <div class="revealator-slideup revealator-duration7 revealator-once revealator-below">
                                <span>Phone:</span>
                                <a href="tel:<?php echo $phone_link_second; ?>"><?php the_sub_field( 'phone_second' ); ?></a>
                            </div>
                        <?php } ?>
                        <?php if ( get_sub_field( 'address' ) ) { ?>
                        <div class="revealator-slideup revealator-duration7 revealator-once revealator-below">
                            <span>Address:</span>
                            <p><?php the_sub_field( 'address' ); ?></p>
                        </div>
                        <?php } ?>
                        <?php if ( get_sub_field( 'address_second' ) ) { ?>
                            <div class="revealator-slideup revealator-duration7 revealator-once revealator-below">
                                <span>Address:</span>
                                <p><?php the_sub_field( 'address_second' ); ?></p>
                            </div>
                        <?php } ?>

                        <?php if ( have_rows( 'socials_contact' ) ) : ?>
                            <?php while ( have_rows( 'socials_contact' ) ) : the_row(); ?>
                        <ul class="socials revealator-slideup revealator-duration7 revealator-once revealator-below">
                                <?php if ( get_sub_field( 'linkedin' ) ) { ?>
                                <li>
                                    <a href="<?php the_sub_field( 'linkedin' ); ?>" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                </li>
                                <?php } ?>
                                <?php if ( get_sub_field( 'facebook' ) ) { ?>
                                    <li>
                                        <a href="<?php the_sub_field( 'facebook' ); ?>" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                <?php } ?>
                        </ul>
                            <?php endwhile; ?>
                        <?php endif; ?>

                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>