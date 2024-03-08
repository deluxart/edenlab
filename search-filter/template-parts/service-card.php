<div class="block<?php if (get_field( 'block_style' ) == 'border') { ?> border<?php } ?>">
    <div class="icon">
        <?php $service_icon = get_field( 'service_icon' ); ?>
        <?php if ( $service_icon ) : ?>
            <img src="<?php echo esc_url( $service_icon['url'] ); ?>" alt="<?php echo esc_attr( $service_icon['alt'] ); ?>" />
        <?php endif; ?>
    </div>
    <h3><?php the_title(); ?></h3>
    <?php the_field( 'service_description' ); ?>

    <?php if ( have_rows( 'link_service' ) ) : ?>
        <?php while ( have_rows( 'link_service' ) ) : the_row(); ?>
            <div><a href="<?php the_sub_field( 'link' ); ?>" class="more"><?php the_sub_field( 'title' ); ?></a></div>
        <?php endwhile; ?>
    <?php endif; ?>
</div>