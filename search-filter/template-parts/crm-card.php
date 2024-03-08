<?php
    global $post;
    $post_slug = $post->post_name;
?>

<div class="case__single__item crm">
    <div class="info">
        <?php if (get_field( 'case_tag_head' )) { ?>
            <span class="tag"><?php the_field( 'case_tag_head' ); ?></span>
        <?php } ?>
        <h2><?php the_title(); ?></h2>
        <p><?php the_field( 'short_description' ); ?></p>
        <a data-name="<?php echo $post_slug ?>" class="more da-modal">Learn More</a>
    </div>
</div>