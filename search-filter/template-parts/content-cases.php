<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package kodjin
 */

?>

<article id="post-<?php the_ID(); ?>" class="cases__list__item">
    <div class="text">
        <h2><?php the_title(); ?></h2>
        <?php the_field( 'about_the_project' ); ?>
        <a href="<?php the_permalink() ?>" class="btn border">VIEW DETAILS</a>
    </div>
    <div class="image">
        <?php edenlab_post_thumbnail(); ?>
    </div>
</article>