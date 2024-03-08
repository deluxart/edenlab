<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Edenlab
 */

get_header();
$categories = get_the_category();
$cat_link = get_category_link( $categories );
$separator = ' / ';
$output = '';

$user_id = get_the_author_meta('ID');
$user_position = get_field('user_position', 'user_'. $user_id );
$user_linkedin = get_field('linkedin', 'user_'. $user_id );
$user_facebook = get_field('facebook', 'user_'. $user_id );

$content = get_the_content();

?>

    <div class="blog blog_page">
        <div class="container">
            <div class="post_head">
                <div class="breadcrumb">
                    <div>
                        <?php if(function_exists('bcn_display')) { bcn_display(); } ?>
                    </div>
                </div>
                <div>
                    <a href="/blog" class="more left">
                        <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0.999991 6.63604L0.292884 5.92893C-0.0976399 6.31946 -0.0976395 6.95262 0.292884 7.34315L0.999991 6.63604ZM7.20325 11.4251L1.7071 5.92893L0.292884 7.34315L5.78903 12.8393L7.20325 11.4251ZM1.7071 7.34315L7.49252 1.55773L6.0783 0.143514L0.292884 5.92893L1.7071 7.34315ZM0.999991 7.63604L13.7279 7.63604L13.7279 5.63604L0.999991 5.63604L0.999991 7.63604Z" fill="#081123"/>
                        </svg>
                        <span>Back to blog</span>
                    </a>
                </div>
                <div class="date_cat">
                    <ul>
                        <!--            <li><a href="#" class="tag orange">FHIR</a></li>-->
                        <?php
                        if($categories){
                            foreach($categories as $category) {
                                $rl_category_color = rl_color($category->cat_ID);
                                if ($rl_category_color == '#F5A431') {
                                    $output .= '<li><button class="tag subcat_link" style="color: #000; background:'.$rl_category_color.';">'.$category->cat_name.'</li>';
                                } else {
                                    $output .= '<li><button class="tag subcat_link" style="color: #fff; background:'.$rl_category_color.';">'.$category->cat_name.'</li>';
                                }
                            }

//                if ($rl_category_color == '#F5A431')
//                echo trim($output, $separator);
                            echo $output;
                        }
                        ?>
                    </ul>
                    <span><?php echo get_the_date(); ?></span>
                </div>
                <h1><?php the_title(); ?></h1>
                <div class="author">
                    <div class="photo">
						<?php
						//Assuming $post is in scope
                            if (function_exists ( 'mt_profile_img' ) ) {
                                global $post;
                                $author_id = $post->post_author;
                                mt_profile_img( $author_id, array(
                                    'size' => 'thumbnail',
                                    'attr' => array( 'alt' => $author_id->display_name ),
                                    'echo' => true )
                                );
                            }
						?>
                    </div>
                    <div class="info">
                        <h4><?php the_author(); ?></h4>
                        <?php if ($user_position) { ?>
                            <p><?php echo $user_position; ?></p>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="blog_post">
        <div class="container">
            <div class="blog_post_content<?php if ( get_field( 'enable_navigation' ) == 1 ) { ?> nav_post<?php } ?><?php if ( get_field( 'enable_custom_block' ) == 1 ) { ?> custom_block<?php } ?>">
            <?php if ( get_field( 'enable_navigation' ) == 1 ) : ?>
            <?php if ( have_rows( 'navigation' ) ) : ?>
                <div class="post-navigation">
                    <ul id="post_nav">
                        <?php while ( have_rows( 'navigation' ) ) : the_row(); ?>
                            <li><a href="<?php the_sub_field( 'ancor' ); ?>"><?php the_sub_field( 'title' ); ?></a></li>
                        <?php endwhile; ?>
                    </ul>
                </div>
            <?php endif; ?>
            <?php endif; ?>
            <div class="text-page">
            <?php
                the_content(
                    sprintf(
                        wp_kses(
                        /* translators: %s: Name of current post. Only visible to screen readers */
                            __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'edenlab' ),
                            array(
                                'span' => array(
                                    'class' => array(),
                                ),
                            )
                        ),
                        wp_kses_post( get_the_title() )
                    )
                );
            ?>
            <?php if (strlen($content) > 2000) { ?>
                <div class="author__block">
                    <h3>Written by</h3>
                    <div class="content">
                        <div class="photo">
                            <?php
                            //Assuming $post is in scope
                            if (function_exists ( 'mt_profile_img' ) ) {
                                global $post;
                                $author_id = $post->post_author;
                                mt_profile_img( $author_id, array(
                                        'size' => 'thumbnail',
                                        'attr' => array( 'alt' => $author_id->display_name ),
                                        'echo' => true )
                                );
                            }
                            ?>
                        </div>
                        <div class="info">
                            <h4><?php the_author(); ?></h4>
                            <?php if ($user_position) { ?>
                                <p class="position"><?php echo $user_position; ?></p>
                            <?php } ?>
                            <?php if ($user_linkedin || $user_facebook) { ?>
                                <ul>
                                    <?php if ($user_linkedin) { ?>
                                    <li>
                                        <a href="<?php echo $user_linkedin; ?>" target="_blank">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 5 1036 990"><path d="M0 120c0-33.334 11.667-60.834 35-82.5C58.333 15.833 88.667 5 126 5c36.667 0 66.333 10.666 89 32 23.333 22 35 50.666 35 86 0 32-11.333 58.666-34 80-23.333 22-54 33-92 33h-1c-36.667 0-66.333-11-89-33S0 153.333 0 120zm13 875V327h222v668H13zm345 0h222V622c0-23.334 2.667-41.334 8-54 9.333-22.667 23.5-41.834 42.5-57.5 19-15.667 42.833-23.5 71.5-23.5 74.667 0 112 50.333 112 151v357h222V612c0-98.667-23.333-173.5-70-224.5S857.667 311 781 311c-86 0-153 37-201 111v2h-1l1-2v-95H358c1.333 21.333 2 87.666 2 199 0 111.333-.667 267.666-2 469z"/></svg>
                                        </a>
                                    </li>
                                    <?php } ?>
                                    <?php if ($user_facebook) { ?>
                                    <li>
                                        <a href="<?php echo $user_facebook; ?>" target="_blank">
                                            <svg enable-background="new 0 0 512 512" width="12" height="12" viewBox="0 0 512 512" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><path d="M308.3,508.5c-2.5,0.1-4.1,0.3-5.7,0.3c-34.2,0-68.3-0.1-102.5,0.1c-4.8,0-6.1-1.3-6.1-6.1c0.1-79.6,0.1-159.3,0.1-238.9   c0-2.1,0-4.2,0-6.9c-18.6,0-36.7,0-55.1,0c0-28.4,0-56.3,0-85c1.9,0,3.7,0,5.4,0c15,0,30-0.1,45,0.1c3.8,0,4.8-1.1,4.8-4.8   c-0.2-22.3-0.2-44.7,0-67c0.1-15.6,2.6-30.8,9.8-44.9c10.3-19.9,26.6-32.8,47.2-40.8c16.8-6.6,34.5-9,52.3-9.3   c29-0.4,58-0.2,87-0.3c2.7,0,4.9-0.1,4.9,3.7c-0.1,27.5-0.1,55-0.1,82.5c0,0.3-0.1,0.6-0.5,1.9c-1.7,0-3.6,0-5.5,0   c-18,0-36-0.1-54,0c-10.4,0-18.8,4.2-24.1,13.3c-1.6,2.7-2.6,6.2-2.6,9.4c-0.3,17,0,34-0.2,51c0,4,1.2,5.1,5.1,5.1   c25-0.2,50-0.1,75-0.1c2,0,3.9,0,7.3,0c-3.5,28.6-6.9,56.6-10.4,84.9c-26,0-51.3,0-77.1,0C308.3,340.8,308.3,424.4,308.3,508.5z"/></g></svg>
                                        </a>
                                    </li>
                                    <?php } ?>
                                </ul>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            <?php } ?>
            </div>
                <?php if ( get_field( 'enable_custom_block' ) == 1 ) : ?>
                <?php if ( have_rows( 'custom_block' ) ) : ?>
                <div>
                    <div class="post-custom_block">
                        <?php while ( have_rows( 'custom_block' ) ) : the_row(); ?>
                            <h4><?php the_sub_field( 'text' ); ?></h4>
                            <?php if ( have_rows( 'button' ) ) : ?>
                                <?php while ( have_rows( 'button' ) ) : the_row(); ?>
                                    <a href="<?php the_sub_field( 'link' ); ?>" class="btn black"><?php the_sub_field( 'title' ); ?></a>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        <?php endwhile; ?>
                    </div>
                </div>
                <?php endif; ?>
                <?php endif; ?>
            </div>

            <?php $orig_post = $post;
            $post = get_post();
//            $tags = wp_get_post_tags($post->ID);
            $categories = get_the_category($post->ID);

            if ($categories) {
                $tag_ids = array();
                foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;
                $args=array(
//                    'tag__in' => $tag_ids,
                    'category__in' => $category_ids,
                    'post__not_in' => array($post->ID),
                    'posts_per_page'=> -1,
                    'ignore_sticky_posts' => 1
                );
                $my_query = new wp_query( $args );
                if( $my_query->have_posts() ) { ?>

                    <div id="relatedposts" class="blog blog_page">
                        <div class="head">
                            <h3>More articles to explore</h3>
                        </div>
                        <div class="posts-list-wrap">
                            <div class="posts-list">
                                <div class="swiper-wrapper">
                                    <?php
                                    while( $my_query->have_posts() ) {
                                        $my_query->the_post();
                                        get_template_part( 'template-parts/related-posts', get_post_format() );
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="arrow-prev">
                                <svg width="31" height="29" viewBox="0 0 31 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2.63618 14.8579L1.22197 13.4437C0.440922 14.2247 0.440921 15.491 1.22197 16.2721L2.63618 14.8579ZM16.2641 25.6573L4.0504 13.4437L1.22197 16.2721L13.4356 28.4857L16.2641 25.6573ZM4.0504 16.2721L16.9069 3.41559L14.0785 0.587165L1.22197 13.4437L4.0504 16.2721ZM2.63618 16.8579L30.9205 16.8579L30.9205 12.8579L2.63618 12.8579L2.63618 16.8579Z" fill="#081123"/>
                                </svg>
                            </div>
                            <div class="arrow-next">
                                <svg width="31" height="29" viewBox="0 0 31 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M28.9205 14.1421L30.3347 15.5563C31.1157 14.7753 31.1157 13.509 30.3347 12.7279L28.9205 14.1421ZM15.2926 3.34269L27.5062 15.5563L30.3347 12.7279L18.121 0.514259L15.2926 3.34269ZM27.5062 12.7279L14.6498 25.5844L17.4782 28.4128L30.3347 15.5563L27.5062 12.7279ZM28.9205 12.1421H0.636185L0.636184 16.1421H28.9205L28.9205 12.1421Z" fill="#081123"/>
                                </svg>
                            </div>
<!--                            <div class="swiper-pagination"></div>-->
                        </div>
                    </div>
                    <?php
                }
            }
            $post = $orig_post;
            wp_reset_query();
            ?>

        </div>
    </div>

    <section id="subscribe">
        <div class="container">
            <div class="form__wrap">
                <h2>Stay in touch</h2>
                <p>Subscribe to get insights from FHIR experts, new case studies, articles and announcements  </p>

                <div class="form">
                    <?php echo do_shortcode('[contact-form-7 id="274" title="Subscribe form"]') ?>
                </div>
            </div>
            <div class="form__sent">
                <h2>Great!</h2>
                <h3>Our team we’ll be glad to share our expertise with you via email</h3>
            </div>
        </div>
    </section>
<?php get_template_part('template-parts/contact-us', 'section'); ?>

<?php
get_footer();
