<?php
/**
 * Search & Filter Pro 
 *
 * Sample Results Template
 * 
 * @package   Search_Filter
 * @author    Ross Morsali
 * @link      https://searchandfilter.com
 * @copyright 2018 Search & Filter
 * 
 * Note: these templates are not full page templates, rather 
 * just an encaspulation of the your results loop which should
 * be inserted in to other pages by using a shortcode - think 
 * of it as a template part
 * 
 * This template is an absolute base example showing you what
 * you can do, for more customisation see the WordPress docs 
 * and using template tags - 
 * 
 * http://codex.wordpress.org/Template_Tags
 *
 */

if ( $query->have_posts() ) {
    $qp = 0;
    $qp_one = 0;
    $coll = $query->found_posts; ?>


    <?php if ( get_post_type() === 'case' ) { ?>
        <?php
            while ($query->have_posts()) {
                $query->the_post(); ?>
                <?php get_template_part( 'template-parts/case-card', get_post_format() ); ?>
            <?php } ?>
    <?php } else { ?>

    <div class="posts_list<?php if ($coll > 1) { ?> list<?php } ?>">
    <?php
        while ($query->have_posts()) {
            $qp_one++;
            $query->the_post();
            if ($qp_one == 1) { ?>
                <div class="posts_list__one<?php if ($coll == 1) { ?> one_post<?php } ?>">
                    <?php get_template_part( 'template-parts/content-blog', get_post_format() ); ?>
                </div>
            <?php
            }
        }

        echo '<div class="posts_list__masonry">';
            while ($query->have_posts()) {
                $qp++;
                $query->the_post();
                if ($qp > 1) {

                    if ($qp == 5) { ?>
                        <div class="item subscribe__form">
                            <div class="form__wrap">
                                <h4>Stay in touch</h4>
                                <p>Subscribe to get insights from FHIR experts, new case studies, articles and announcements</p>

                                <div id="feedback" class="form">
                                    <?php echo do_shortcode('[contact-form-7 id="759" title="Subscribe form_posts"]') ?>
                                </div>
                            </div>
                            <div class="form__sent">
                                <h4>Great!</h4>
                                <p>Our team we’ll be glad to share our expertise with you via email</p>
                            </div>
                        </div>
                    <?php }
                    echo '<div class="item">';
                    get_template_part( 'template-parts/content-blog-small', get_post_format() );
                    echo '</div>';
                }
            }
        echo '</div>';
	?>
    </div>
    <?php } ?>
    <?php if ($query->max_num_pages != 1) { ?>
	<div class="blog-pagination">
	<div class="current-page">Page <?php echo $query->query['paged']; ?> of <?php echo $query->max_num_pages; ?></div>
	
		<div class="pagination">
			<?php
				if (function_exists('wp_pagenavi'))
				{
					echo "<br />";
					wp_pagenavi( array( 'query' => $query ) );
				}
			?>
		</div>
	</div>
    <?php } ?>
	<?php } else { ?>
	<div class="no-posts">No Results Found</div>
<?php } ?>