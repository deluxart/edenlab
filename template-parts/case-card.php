<div class="case__single__item">
    <div class="info">
        <?php if (get_field( 'case_tag_head' )) { ?>
            <span class="tag"><?php the_field( 'case_tag_head' ); ?></span>
        <?php } ?>
        <h2><?php the_title(); ?></h2>
        <p><?php the_field( 'short_description' ); ?></p>
        <a href="<?php the_permalink() ?>" class="more">Learn More</a>
    </div>
    <div class="image">
        <?php $case_image = get_field( 'case_image' ); ?>
        <?php if ( $case_image ) : ?>
            <img src="<?php echo esc_url( $case_image['url'] ); ?>" alt="<?php echo esc_attr( $case_image['alt'] ); ?>" />
        <?php endif; ?>
    </div>
</div>