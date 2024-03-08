<?php
    $categories = get_the_category();
    $cat_link = get_category_link( $categories );
    $separator = ' / ';
    $output = '';

    $user_id = get_the_author_meta('ID');
    $user_position = get_field('user_position', 'user_'. $user_id );
    global $post;

    $output_categories = array_slice($categories, 0, 2);

    $colCat = count($categories);
?>

<div class="single__item">
    <div class="date_cat">
        <ul>
            <?php
            if ($output_categories) {
                foreach($output_categories as $category) {
                    $rl_category_color = rl_color($category->cat_ID);
//                        '.get_permalink( get_option( 'page_for_posts' ) ).'?_sft_category='. $category->slug .'
                    if ($rl_category_color == '#F5A431') {
                        $output .= '<li><a href="?_sft_category='. $category->slug .'" class="tag subcat_link" style="color: #000; background:'.$rl_category_color.';">'.$category->cat_name.'</a></li>';
                    } else {
                        $output .= '<li><a href="?_sft_category='. $category->slug .'" class="tag subcat_link" style="color: #fff; background:'.$rl_category_color.';">'.$category->cat_name.'</a></li>';
                    }
                }
                echo $output;
            }
            if ($colCat > 2) {
                $colCatPlus = $colCat - 2; ?>
                    <li class="cat_count"><span>+<?php echo $colCatPlus ?> more</span></li>
            <?php }
            ?>
        </ul>
        <span><?php echo get_the_date(); ?></span>
    </div>
    <a href="<?php the_permalink() ?>"><h4><?php the_title(); ?></h4></a>
    <?php echo the_excerpt() ?>
<!--    <div class="author">-->
<!--        <div class="photo">-->
<!--            --><?php
//                if (function_exists ( 'mt_profile_img' ) ) {
//                    $author_id=$post->post_author;
//                    mt_profile_img( $author_id, array(
//                        'size' => 'thumbnail',
//                        'attr' => array( 'alt' => 'Alternative Text' ),
//                        'echo' => true )
//                    );
//                } ?>
<!--        </div>-->
<!--        <div class="info">-->
<!--            <h4>--><?php //the_author(); ?><!--</h4>-->
<!--            --><?php //if ($user_position) { ?>
<!--                <p>--><?php //echo $user_position; ?><!--</p>-->
<!--            --><?php //} ?>
<!--        </div>-->
<!--    </div>-->
    <a href="<?php the_permalink() ?>" class="more">Learn more</a>
</div>