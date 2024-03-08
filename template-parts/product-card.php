<div class="block">
    <div class="icon">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/fhir_icon.svg" alt="">
    </div>
    <h3><?php the_title(); ?></h3>
    <?php the_field( 'card_product_description' ); ?>
    <div><a href="<?php the_permalink() ?>" class="more">Learn More</a></div>
</div>