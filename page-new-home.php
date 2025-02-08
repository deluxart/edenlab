<?php
/*
* Template Name: New home
*/

include('new-header.php');
?>
    <div class="new_home">
        <section id="head_slide">
            <div class="container">
                <div class="content">
                    <h1 class="mb-24"><?php the_field( 'heading_h1' ); ?></h1>
                    <p class="mb-24"><?php the_field( 'heading_description' ); ?></p>
                    <?php if ( have_rows( 'heading_action_button' ) ) : ?>
                        <?php while ( have_rows( 'heading_action_button' ) ) : the_row(); ?>
                            <a href="<?php the_sub_field( 'url' ); ?>" class="btn blue"><?php the_sub_field( 'text' ); ?></a>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
            <?php if ( have_rows( 'logotypes_head' ) ) : ?>
                <div class="logos str3 mWrap">
                    <?php while ( have_rows( 'logotypes_head' ) ) : the_row(); ?>
                        <?php $add_logo = get_sub_field( 'add_logo' ); ?>
                        <?php if ( $add_logo ) : ?>
                            <img src="<?php echo esc_url( $add_logo['url'] ); ?>" alt="<?php echo esc_attr( $add_logo['alt'] ); ?>" />
                        <?php endif; ?>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
        </section>

        <section id="develop_software">
            <div class="container">
                <div class="head">
                    <h2><?php the_field( 'software_section_title' ); ?></h2>
                </div>

                <div class="content">
                    <div>
                        <?php if ( have_rows( 'software_how_do_we_act' ) ) : ?>
                            <?php while ( have_rows( 'software_how_do_we_act' ) ) : the_row(); ?>
                                <h4><?php the_sub_field( 'side_title' ); ?></h4>
                                <?php if ( have_rows( 'action_list' ) ) : ?>
                                <div class="we_act_list">
                                    <?php while ( have_rows( 'action_list' ) ) : the_row(); ?>
                                        <div class="block">
                                            <div class="icon">
                                                <svg width="54" height="56" viewBox="0 0 54 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M25.5677 0H27.9888C34.0328 0 38.346 1.03965 42.021 2.99189C45.696 4.94413 48.5801 7.80896 50.5455 11.4593C52.5109 15.1097 53.5576 19.3941 53.5576 25.3976V30.6024C53.5576 36.6059 52.5109 40.8903 50.5455 44.5407C48.5801 48.191 45.696 51.0559 42.021 53.0081C38.346 54.9604 34.0328 56 27.9888 56H25.5677C19.5238 56 15.2106 54.9604 11.5356 53.0081C7.86061 51.0559 4.97647 48.191 3.01107 44.5407C1.04568 40.8903 -0.000976562 36.6059 -0.000976562 30.6024V25.3976C-0.000976563 19.3941 1.04568 15.1097 3.01107 11.4593C4.97647 7.80896 7.86061 4.94413 11.5356 2.99189C15.2106 1.03965 19.5238 0 25.5677 0Z" fill="#F5A431"/>
                                                    <path d="M38.944 21.9168L35.984 19L24.009 30.9548L18.939 25.9546L15.999 28.8863L24.024 36.8032L24.079 36.7487L38.944 21.9168Z" fill="#081123"/>
                                                </svg>
                                            </div>
                                            <h3><?php the_sub_field( 'title' ); ?></h3>
                                            <?php the_sub_field( 'description' ); ?>
                                        </div>
                                    <?php endwhile; ?>
                                </div>

                                <?php endif; ?>
                                <?php if ( have_rows( 'learn_more' ) ) : ?>
                                    <?php while ( have_rows( 'learn_more' ) ) : the_row(); ?>
                                        <a href="<?php the_sub_field( 'url' ); ?>"><?php the_sub_field( 'text' ); ?></a>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                    <div>
                        <?php if ( have_rows( 'software_shallenges_we_solve' ) ) : ?>
                            <?php while ( have_rows( 'software_shallenges_we_solve' ) ) : the_row(); ?>
                                <h4><?php the_sub_field( 'side_title' ); ?></h4>
                                <?php if ( have_rows( 'list_of_problems' ) ) : ?>
                                <div class="we_solve_list">
                                    <?php while ( have_rows( 'list_of_problems' ) ) : the_row(); ?>
                                        <div class="block" onclick="window.location.href = '<?php the_sub_field( 'url' ); ?>'; return false;">
                                            <h4><?php the_sub_field( 'title' ); ?></h4>
                                            <?php the_sub_field( 'description' ); ?>

                                            <div class="read_more">
                                                <a href="<?php the_sub_field( 'url' ); ?>"><svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g clip-path="url(#clip0_4703_6)">
                                                            <path d="M3.18084 2L16.999 2M16.999 2V16.5455M16.999 2L0.999023 18" stroke="currentColor" stroke-width="3" stroke-linejoin="round"/>
                                                        </g>
                                                        <defs>
                                                            <clipPath id="clip0_4703_6">
                                                                <rect width="19" height="19" fill="white" transform="translate(-0.000976562)"/>
                                                            </clipPath>
                                                        </defs>
                                                    </svg></a>
                                            </div>
                                        </div>

                                    <?php endwhile; ?>
                                </div>
                                <?php endif; ?>
                                <?php if ( have_rows( 'contact_experts' ) ) : ?>
                                    <?php while ( have_rows( 'contact_experts' ) ) : the_row(); ?>
                                        <a href="<?php the_sub_field( 'url' ); ?>" class="btn blue"><?php the_sub_field( 'text' ); ?></a>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>


      <section id="quote_section">
        <div class="container">
          <div class="content revealator-slideup revealator-duration7 revealator-once revealator-below">
            <h3><?php the_field( 'text_quote' ); ?></h3>

              <?php if ( have_rows( 'quote_author' ) ) : ?>
              <div class="author_info">
                  <?php while ( have_rows( 'quote_author' ) ) : the_row(); ?>
                      <?php $photo = get_sub_field( 'photo' ); ?>
                      <?php if ( $photo ) : ?>
                          <img src="<?php echo esc_url( $photo['url'] ); ?>" alt="<?php echo esc_attr( $photo['alt'] ); ?>" />
                      <?php endif; ?>
                      <div class="details">
                          <?php the_sub_field( 'name' ); ?>
                          <span><?php the_sub_field( 'position' ); ?></span>
                      </div>
                  <?php endwhile; ?>
              </div>
              <?php endif; ?>
          </div>
        </div>
      </section>


      <section id="analytics_section">
          <div class="container">
              <div class="head">
                  <h3><?php the_field( 'analytics_section_title' ); ?></h3>
                  <p><?php the_field( 'analytics_description' ); ?></p>
              </div>
              <div class="analytics_list">
                  <?php if ( have_rows( 'analytics_list' ) ) : ?>

                      <?php while ( have_rows( 'analytics_list' ) ) : the_row(); ?>
                      <div class="card">
                          <?php
                          $title = get_sub_field( 'title' );
                          $description = get_sub_field( 'description' );
                          $url = get_sub_field( 'url' );
                          ?>
                          <div class="num"></div>
                          <?php if ( $url ) : ?>
                              <h3><a href="<?php echo esc_url( $url ); ?>" target="_blank" rel="noopener noreferrer"><span><?php echo esc_html( $title ); ?></span><svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <g clip-path="url(#clip0_4709_756)">
                                              <path d="M3.18084 2L16.999 2M16.999 2V16.5455M16.999 2L0.999023 18" stroke="currentColor" stroke-width="3" stroke-linejoin="round"/>
                                          </g>
                                          <defs>
                                              <clipPath id="clip0_4709_756">
                                                  <rect width="19" height="19" fill="white" transform="translate(-0.000976562)"/>
                                              </clipPath>
                                          </defs>
                                      </svg>
                                  </a></h3>
                          <?php else : ?>
                              <h3><?php echo esc_html( $title ); ?></h3>
                          <?php endif; ?>
                          <?php echo wp_kses_post( $description ); ?>
                      </div>
                      <?php endwhile; ?>

                  <?php endif; ?>
              </div>

              <div class="certifications_partners">

                  <?php if ( have_rows( 'certifications_requirements' ) ) : ?>
                  <div>
                      <div class="certifications">
                          <?php while ( have_rows( 'certifications_requirements' ) ) : the_row(); ?>
                              <h3><?php the_sub_field( 'title' ); ?></h3>
                              <?php if ( have_rows( 'logos' ) ) : ?>
                                  <div class="logos_list">
                                      <?php while ( have_rows( 'logos' ) ) : the_row(); ?>
                                          <?php $logo_r = get_sub_field( 'logo_r' ); ?>
                                          <?php if ( $logo_r ) : ?>
                                              <img src="<?php echo esc_url( $logo_r['url'] ); ?>" alt="<?php echo esc_attr( $logo_r['alt'] ); ?>" />
                                          <?php endif; ?>
                                      <?php endwhile; ?>
                                  </div>
                              <?php endif; ?>
                          <?php endwhile; ?>
                      </div>
                  </div>
                  <?php endif; ?>
                <div>


              <?php if ( have_rows( 'partners' ) ) : ?>
            <div class="partners">
                  <?php while ( have_rows( 'partners' ) ) : the_row(); ?>
                      <h4><?php the_sub_field( 'title' ); ?></h4>
                      <?php if ( have_rows( 'logos' ) ) : ?>
                      <div class="logos_list">
                          <?php while ( have_rows( 'logos' ) ) : the_row(); ?>
                              <?php $logo = get_sub_field( 'logo' ); ?>
                              <?php if ( $logo ) : ?>
                                  <img src="<?php echo esc_url( $logo['url'] ); ?>" alt="<?php echo esc_attr( $logo['alt'] ); ?>" />
                              <?php endif; ?>
                          <?php endwhile; ?>
                      </div>
                      <?php endif; ?>
                  <?php endwhile; ?>
            </div>
              <?php endif; ?>


                    <?php if ( have_rows( 'clients' ) ) : ?>
                        <div class="clients">
                            <?php while ( have_rows( 'clients' ) ) : the_row(); ?>
                                <h4><?php the_sub_field( 'title' ); ?></h4>
                                <?php if ( have_rows( 'logos' ) ) : ?>
                                    <div class="logos_list">
                                        <?php while ( have_rows( 'logos' ) ) : the_row(); ?>
                                            <?php $logo = get_sub_field( 'logo' ); ?>
                                            <?php if ( $logo ) : ?>
                                                <img src="<?php echo esc_url( $logo['url'] ); ?>" alt="<?php echo esc_attr( $logo['alt'] ); ?>" />
                                            <?php endif; ?>
                                        <?php endwhile; ?>
                                    </div>
                                <?php endif; ?>
                            <?php endwhile; ?>
                        </div>
                    <?php endif; ?>
                </div>


              </div>
          </div>
      </section>

        <section id="custom_solutions">
            <div class="container">
                <h2><?php the_field( 'custom_solutions_section_title' ); ?></h2>
                <div class="content">

                <?php if ( have_rows( 'custom_solutions_cards' ) ) : ?>
                <div class="cards">
                    <?php while ( have_rows( 'custom_solutions_cards' ) ) : the_row(); ?>
                        <div class="card">
                            <h4><?php the_sub_field( 'title' ); ?></h4>

                            <?php $description = get_sub_field( 'description' ); ?>
                            <?php if ( $description ) : ?>
                                <?php echo $description; ?>
                            <?php endif; ?>
                        </div>
                    <?php endwhile; ?>
                </div>
                <?php endif; ?>

                <?php if ( have_rows( 'custom_solutions_big_card' ) ) : ?>
                <div class="big_card">
                    <?php while ( have_rows( 'custom_solutions_big_card' ) ) : the_row(); ?>
                      <h4><?php the_sub_field( 'title' ); ?></h4>
                        <?php the_sub_field( 'description' ); ?>
                    <?php endwhile; ?>
                </div>
                <?php endif; ?>

                </div>
            </div>
        </section>


      <section id="custom_development">
        <div class="container">
          <h2><?php the_field( 'custom_development_section_title' ); ?></h2>
            <div class="custom_development_list">
                <?php if ( have_rows( 'custom_development_analytics_list' ) ) : ?>

                    <?php while ( have_rows( 'custom_development_analytics_list' ) ) : the_row(); ?>
                        <div class="card">
                            <?php
                            $title = get_sub_field( 'title' );
                            $description = get_sub_field( 'description' );
                            $url = get_sub_field( 'url' );
                            ?>
                            <?php if ( $url ) : ?>
                                <h3><a href="<?php echo esc_url( $url ); ?>" target="_blank" rel="noopener noreferrer"><span><?php echo esc_html( $title ); ?></span><svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_4709_756)">
                                                <path d="M3.18084 2L16.999 2M16.999 2V16.5455M16.999 2L0.999023 18" stroke="currentColor" stroke-width="3" stroke-linejoin="round"/>
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_4709_756">
                                                    <rect width="19" height="19" fill="white" transform="translate(-0.000976562)"/>
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </a></h3>
                            <?php else : ?>
                                <h3><?php echo esc_html( $title ); ?></h3>
                            <?php endif; ?>
                            <?php echo wp_kses_post( $description ); ?>
                        </div>
                    <?php endwhile; ?>

                <?php endif; ?>
            </div>
        </div>
      </section>


        <section id="collaborate_section">
            <div class="container">
                <div class="content">
                    <div>
                        <h2><?php the_field( 'who_do_we_collaborate_section_title' ); ?></h2>
                    </div>
                    <div class="items_list">

                    <?php if ( have_rows( 'who_do_we_collaborate_list' ) ) : ?>
                        <?php while ( have_rows( 'who_do_we_collaborate_list' ) ) : the_row(); ?>
                            <div class="item">
                                <h3><?php the_sub_field( 'title' ); ?></h3>
                                <div class="description">
                                    <?php the_sub_field( 'description' ); ?>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>

                    </div>
                </div>
            </div>
        </section>





      <section id="cases">
        <div class="title">
          <h2 class="revealator-slideup revealator-duration7 revealator-once revealator-below"><?php the_field( 'section_title_cs' ); ?></h2>
          <a href="<?php echo get_home_url(); ?>/cases" class="more revealator-slideup revealator-duration7 revealator-once revealator-below">
            <span>Check all cases</span>
            <svg width="18" height="17" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M15.7782 8.49985L16.6621 9.38374C17.1502 8.89558 17.1502 8.10413 16.6621 7.61597L15.7782 8.49985ZM8.17678 2.66622L14.8943 9.38374L16.6621 7.61597L9.94454 0.898456L8.17678 2.66622ZM14.8943 7.61597L7.82322 14.687L9.59099 16.4548L16.6621 9.38374L14.8943 7.61597ZM15.7782 7.24985H0.221826V9.74985H15.7782V7.24985Z" fill="#081123"/>
            </svg>
          </a>
        </div>
        <div class="content">
            <?php echo do_shortcode('[cases-list-home cats="healthcare"]') ?>
        </div>
      </section>
    </div>

<?php get_template_part('template-parts/new-contact-us', 'section'); ?>
<?php
include('new-footer.php');
