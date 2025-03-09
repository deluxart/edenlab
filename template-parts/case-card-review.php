<div class="case-review-card">
    <?php
    // Метки
    $case_tags_head_checked_values = get_field( 'case_tags_head' );
    if ( $case_tags_head_checked_values ) : ?>
        <div class="case-tags">
            <?php foreach ( $case_tags_head_checked_values as $case_tags_head_value ) : ?>
                <span class="case-tag">
                    <?php
                    $flags = array(
                        'Ukraine' => '🇺🇦',
                        'USA' => '🇺🇸'
                    );
                    echo isset($flags[$case_tags_head_value]) ? $flags[$case_tags_head_value] . ' ' : '';
                    ?>
                    <?php echo esc_html( $case_tags_head_value ); ?>
                </span>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>

    <a href="<?php the_permalink(); ?>"><h3 class="case-title"><?php the_title(); ?></h3></a>

    <div class="case-review-text"><?php the_field( 'case_review_text' ); ?></div>

    <a class="case-link" href="<?php the_permalink(); ?>">
        <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0_5046_671)">
                <path d="M3.18084 2L16.999 2M16.999 2V16.5455M16.999 2L0.999023 18" stroke="currentColor" stroke-width="3" stroke-linejoin="round"/>
            </g>
            <defs>
                <clipPath id="clip0_5046_671">
                    <rect width="19" height="19" fill="white" transform="translate(-0.000976562)"/>
                </clipPath>
            </defs>
        </svg>
    </a>

    <?php $case_image = get_field( 'case_image' ); ?>
    <?php if ( $case_image ) : ?>
        <div class="case-image">
            <img src="<?php echo esc_url( $case_image['url'] ); ?>" alt="<?php echo esc_attr( $case_image['alt'] ); ?>" />
        </div>
    <?php endif; ?>
</div>
