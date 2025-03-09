<?php
/*
* Template Name: FHIR Solution Development Services
*/

include('new-header.php');
?>
    <div class="new_home solution_development_services">
        <section id="head_slide">
            <div class="container">
                <div class="content">
                    <h1 class="mb-24"><?php the_field( 'heading_h1' ); ?></h1>
                    <p class="mb-24"><?php the_field( 'description_head' ); ?></p>

                  <div class="actions">
                      <?php if ( have_rows( 'actions_head' ) ) : ?>
                          <?php while ( have_rows( 'actions_head' ) ) : the_row(); ?>
                              <?php if ( have_rows( 'contact_experts' ) ) : ?>
                                  <?php while ( have_rows( 'contact_experts' ) ) : the_row(); ?>
                                    <a href="<?php the_sub_field( 'link' ); ?>" class="btn blue"><?php the_sub_field( 'title' ); ?></a>
                                  <?php endwhile; ?>
                              <?php endif; ?>
                              <?php if ( have_rows( 'explore_our_fhir-native_products' ) ) : ?>
                                  <?php while ( have_rows( 'explore_our_fhir-native_products' ) ) : the_row(); ?>
                                    <div>
                                      <a href="<?php the_sub_field( 'link' ); ?>" class="more"><?php the_sub_field( 'title' ); ?></a>
                                    </div>
                                  <?php endwhile; ?>
                              <?php endif; ?>
                          <?php endwhile; ?>
                      <?php endif; ?>
                  </div>

                  <?php if ( have_rows( 'cards_head' ) ) : ?>
                      <div class="cards">
                          <?php while ( have_rows( 'cards_head' ) ) : the_row(); ?>
                              <div class="card">
                                  <div class="num"></div>
                                  <div class="description">
                                      <?php the_sub_field( 'card_description' ); ?>
                                  </div>
                              </div>
                          <?php endwhile; ?>
                      </div>
                  <?php endif; ?>
                </div>
            </div>
        </section>

      <section id="fhir_capabilities">
        <div class="container">
          <div class="head">
            <h2><?php the_field( 'section_title_fhir_capabilities' ); ?></h2>
          </div>

          <div class="white_blocks">
              <?php while ( have_rows( 'cards_fhir_capabilities' ) ) : the_row(); ?>
                <div class="block">
                    <?php $icon = get_sub_field( 'icon' ); ?>
                    <?php if ( $icon ) : ?>
                      <div class="icon">
                        <img src="<?php echo esc_url( $icon['url'] ); ?>" alt="<?php echo esc_attr( $icon['alt'] ); ?>" />
                      </div>
                    <?php endif; ?>
                  <h3><?php the_sub_field( 'title' ); ?></h3>
                  <p><?php the_sub_field( 'description' ); ?></p>
                  <a href="<?php the_sub_field( 'link' ); ?>" class="link">
                    <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <g clip-path="url(#clip0_5062_1857)">
                        <path d="M3.18182 2L17 2M17 2V16.5455M17 2L1 18" stroke="#0142F1" stroke-width="3" stroke-linejoin="round"/>
                      </g>
                      <defs>
                        <clipPath id="clip0_5062_1857">
                          <rect width="19" height="19" fill="white"/>
                        </clipPath>
                      </defs>
                    </svg>
                  </a>
                </div>
              <?php endwhile; ?>
          </div>

        </div>
      </section>


      <section id="fhir_solutions">
        <div class="container">
          <div class="head">
            <h2><?php the_field( 'section_title_fhir_solutions' ); ?></h2>
          </div>
          <div class="sections">

              <?php if ( have_rows( 'adoption_of_fhir_for_regulatory_compliance' ) ) : ?>
              <div class="num"></div>
              <div class="block">
                  <?php while ( have_rows( 'adoption_of_fhir_for_regulatory_compliance' ) ) : the_row(); ?>
                      <div>
                        <h3><?php the_sub_field( 'title' ); ?></h3>
                      </div>
                      <div>
                          <div class="description">
                              <?php the_sub_field( 'description' ); ?>
                          </div>
                          <a href="<?php the_sub_field( 'link' ); ?>" class="arrow_link">
                            <svg width="51" height="51" viewBox="0 0 51 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <rect width="51" height="51" rx="18" fill="#0142F1"/>
                              <g clip-path="url(#clip0_4731_5079)">
                                <path d="M19.1818 18H33M33 18V32.5455M33 18L17 34" stroke="white" stroke-width="3" stroke-linejoin="round"/>
                              </g>
                              <defs>
                                <clipPath id="clip0_4731_5079">
                                  <rect width="19" height="19" fill="white" transform="translate(16 16)"/>
                                </clipPath>
                              </defs>
                            </svg>
                          </a>
                      </div>
                  <?php endwhile; ?>
              </div>
              <?php endif; ?>


              <?php if ( have_rows( 'transforming_existing_systems_with_fhir' ) ) : ?>
                <div class="num"></div>
                  <div class="block">
                      <?php while ( have_rows( 'transforming_existing_systems_with_fhir' ) ) : the_row(); ?>
                          <div>
                            <h3><?php the_sub_field( 'title' ); ?></h3>
                          </div>
                          <div>
                            <div class="description">
                                <?php the_sub_field( 'description' ); ?>

                                <div class="accordions">
                                <?php if ( have_rows( 'key_fhir_integration_approaches' ) ) : ?>
                                    <?php while ( have_rows( 'key_fhir_integration_approaches' ) ) : the_row(); ?>
                                        <h3><?php the_sub_field( 'title' ); ?></h3>
                                        <?php if ( have_rows( 'fhir_server_items' ) ) : ?>
                                            <?php while ( have_rows( 'fhir_server_items' ) ) : the_row(); ?>

                                                <div class="spoiler">
                                                  <div class="head">
                                                      <?php $icon = get_sub_field( 'icon_server_items' ); ?>
                                                      <?php if ( $icon ) : ?>
                                                        <img src="<?php echo esc_url( $icon['url'] ); ?>" alt="<?php echo esc_attr( $icon['alt'] ); ?>" />
                                                      <?php endif; ?>
                                                      <?php the_sub_field( 'title' ); ?>
                                                  </div>
                                                  <div class="cont"><?php the_sub_field( 'description' ); ?></div>
                                                </div>

                                            <?php endwhile; ?>
                                        <?php endif; ?>
                                        <div class="or">or</div>
                                        <?php if ( have_rows( 'fhir_facade_items' ) ) : ?>
                                            <?php while ( have_rows( 'fhir_facade_items' ) ) : the_row(); ?>
                                                <div class="spoiler">
                                                  <div class="head">
                                                      <?php $icon = get_sub_field( 'icon' ); ?>
                                                      <?php if ( $icon ) : ?>
                                                        <img src="<?php echo esc_url( $icon['url'] ); ?>" alt="<?php echo esc_attr( $icon['alt'] ); ?>" />
                                                      <?php endif; ?>
                                                      <?php the_sub_field( 'title' ); ?>
                                                  </div>
                                                  <div class="cont"><?php the_sub_field( 'description' ); ?></div>
                                                </div>
                                            <?php endwhile; ?>
                                        <?php endif; ?>
                                    <?php endwhile; ?>
                                <?php endif; ?>





                                    <?php if ( have_rows( 'accompanying_data_management_services' ) ) : ?>
                                    <div class="second_row_spoilers">
                                        <?php while ( have_rows( 'accompanying_data_management_services' ) ) : the_row(); ?>
                                            <h3><?php the_sub_field( 'title' ); ?></h3>
                                            <?php if ( have_rows( 'items' ) ) : ?>
                                                <?php while ( have_rows( 'items' ) ) : the_row(); ?>
                                                    <div class="spoiler">
                                                        <div class="head">
                                                            <?php $icon = get_sub_field( 'icon' ); ?>
                                                            <?php if ( $icon ) : ?>
                                                              <img src="<?php echo esc_url( $icon['url'] ); ?>" alt="<?php echo esc_attr( $icon['alt'] ); ?>" />
                                                            <?php endif; ?>
                                                            <?php the_sub_field( 'title' ); ?>
                                                        </div>
                                                        <div class="cont">
                                                            <?php the_sub_field( 'description' ); ?>
                                                        </div>
                                                    </div>
                                                <?php endwhile; ?>
                                            <?php endif; ?>
                                            <?php if ( have_rows( 'contact_button' ) ) : ?>
                                                <?php while ( have_rows( 'contact_button' ) ) : the_row(); ?>
                                                  <a href="<?php the_sub_field( 'link' ); ?>" class="btn blue"><?php the_sub_field( 'title' ); ?></a>
                                                <?php endwhile; ?>
                                            <?php endif; ?>
                                        <?php endwhile; ?>
                                    </div>
                                    <?php endif; ?>
                                </div>




                            </div>
                          </div>
                      <?php endwhile; ?>
                  </div>
              <?php endif; ?>


            <div class="attach_case">
                <?php $attach_case_block = get_field( 'attach_case_block' ); ?>
                <?php if ( $attach_case_block ) : ?>
                    <?php $post = $attach_case_block; ?>
                    <?php setup_postdata( $post ); ?>
                  <div class="case-block">
                   <div class="case-content">
                     <div class="case-tags">
                         <?php $case_tags_head_checked_values = get_field( 'case_tags_head' ); ?>
                         <?php if ( $case_tags_head_checked_values ) : ?>
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
                         <?php endif; ?>
                     </div>
                     <a href="<?php the_permalink(); ?>" class="case-title-link">
                       <h2 class="case-title"><?php the_title(); ?></h2>
                     </a>
                     <div class="case-description">
                         <?php the_field( 'short_description' ); ?>
                     </div>
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
                   </div>
                      <?php $case_image = get_field( 'case_image' ); ?>
                      <?php if ( $case_image ) : ?>
                        <div class="case-image">
                          <img src="<?php echo esc_url( $case_image['url'] ); ?>" alt="<?php echo esc_attr( $case_image['alt'] ); ?>" />
                        </div>
                      <?php endif; ?>
                  </div>
                    <?php wp_reset_postdata(); ?>
                <?php endif; ?>

            </div>




              <?php if ( have_rows( 'fhir_training_and_solution_co-development' ) ) : ?>
                <div class="num"></div>
              <div class="block">
                  <?php while ( have_rows( 'fhir_training_and_solution_co-development' ) ) : the_row(); ?>
                      <div>
                        <h3><?php the_sub_field( 'title' ); ?></h3>
                      </div>
                      <div>
                          <div class="description">
                              <?php the_sub_field( 'description' ); ?>
                          </div>

                          <?php if ( have_rows( 'contact_button' ) ) : ?>
                              <?php while ( have_rows( 'contact_button' ) ) : the_row(); ?>
                                <a href="<?php the_sub_field( 'link' ); ?>" class="btn blue"><?php the_sub_field( 'title' ); ?></a>
                              <?php endwhile; ?>
                          <?php endif; ?>
                          <?php if ( have_rows( 'logos' ) ) : ?>
                          <div class="logos">
                              <h4>Partners</h4>
                              <div class="list">
                                  <?php while ( have_rows( 'logos' ) ) : the_row(); ?>
                                      <?php $logo = get_sub_field( 'logo' ); ?>
                                      <?php if ( $logo ) : ?>
                                      <img src="<?php echo esc_url( $logo['url'] ); ?>" alt="<?php echo esc_attr( $logo['alt'] ); ?>" />
                                      <?php endif; ?>
                                  <?php endwhile; ?>
                              </div>
                          </div>
                          <?php endif; ?>
                      </div>
                  <?php endwhile; ?>
              </div>
              <?php endif; ?>



              <?php if ( have_rows( 'end-to-end_fhir-native_product_development' ) ) : ?>
                <div class="num"></div>
                  <div class="block">
                      <?php while ( have_rows( 'end-to-end_fhir-native_product_development' ) ) : the_row(); ?>
                          <div>
                            <h3><?php the_sub_field( 'title' ); ?></h3>
                          </div>
                          <div>
                              <div class="description">
                                  <?php the_sub_field( 'description' ); ?>
                              </div>

                            <a href="<?php the_sub_field( 'link_arrow' ); ?>" class="arrow_link">
                              <svg width="51" height="51" viewBox="0 0 51 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="51" height="51" rx="18" fill="#0142F1"/>
                                <g clip-path="url(#clip0_4731_5168)">
                                  <path d="M19.1818 18H33M33 18V32.5455M33 18L17 34" stroke="white" stroke-width="3" stroke-linejoin="round"/>
                                </g>
                                <defs>
                                  <clipPath id="clip0_4731_5168">
                                    <rect width="19" height="19" fill="white" transform="translate(16 16)"/>
                                  </clipPath>
                                </defs>
                              </svg>
                            </a>

                              <div class="description second">
                                  <?php the_sub_field( 'second_description' ); ?>
                              </div>
                              <?php if ( have_rows( 'contact_button' ) ) : ?>
                                  <?php while ( have_rows( 'contact_button' ) ) : the_row(); ?>
                                    <a href="<?php the_sub_field( 'link' ); ?>" class="btn blue"><?php the_sub_field( 'title' ); ?></a>
                                  <?php endwhile; ?>
                              <?php endif; ?>
                          </div>
                      <?php endwhile; ?>
                  </div>
              <?php endif; ?>




              <?php if ( have_rows( 'attach_cases_fhir_solutions' ) ) : ?>
                <div class="attach_case multiple">
                    <?php while ( have_rows( 'attach_cases_fhir_solutions' ) ) : the_row(); ?>
                        <?php $add_case = get_sub_field( 'add_case' ); ?>
                        <?php if ( $add_case ) : ?>
                            <?php $post = $add_case; ?>
                            <?php setup_postdata( $post ); ?>
                        <div class="case-block">
                          <div class="case-content">
                            <div class="case-tags">
                                <?php $case_tags_head_checked_values = get_field( 'case_tags_head' ); ?>
                                <?php if ( $case_tags_head_checked_values ) : ?>
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
                                <?php endif; ?>
                            </div>
                            <a href="<?php the_permalink(); ?>" class="case-title-link">
                              <h2 class="case-title"><?php the_title(); ?></h2>
                            </a>
                            <div class="case-description">
                                <?php the_field( 'short_description' ); ?>
                            </div>
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
                          </div>
                            <?php $case_image = get_field( 'case_image' ); ?>
                            <?php if ( $case_image ) : ?>
                              <div class="case-image">
                                <img src="<?php echo esc_url( $case_image['url'] ); ?>" alt="<?php echo esc_attr( $case_image['alt'] ); ?>" />
                              </div>
                            <?php endif; ?>
                        </div>
                            <?php wp_reset_postdata(); ?>
                        <?php endif; ?>
                    <?php endwhile; ?>
                </div>
              <?php endif; ?>




          </div>
        </div>
      </section>





      <section id="solution_vendor">
        <div class="container">
          <div class="head">
            <h2><?php the_field( 'section_title_solution_vendor' ); ?></h2>
            <p><?php the_field( 'section_description_solution_vendor' ); ?></p>
          </div>
            <?php if ( have_rows( 'second_heading_solution_vendor' ) ) : ?>
            <div class="sub-head">
                <?php while ( have_rows( 'second_heading_solution_vendor' ) ) : the_row(); ?>
                    <h3><?php the_sub_field( 'title' ); ?></h3>
                    <?php if ( have_rows( 'logos' ) ) : ?>
                    <div class="logos">
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

            <?php if ( have_rows( 'cards_solution_vendor' ) ) : ?>
                <div class="cards">
                    <?php while ( have_rows( 'cards_solution_vendor' ) ) : the_row(); ?>
                        <div class="card">
                            <?php if ( have_rows( 'tags' ) ) : ?>
                                <?php while ( have_rows( 'tags' ) ) : the_row(); ?>
                                    <div class="tag"><?php the_sub_field( 'tag' ); ?></div>
                                <?php endwhile; ?>
                            <?php endif; ?>
                            <h4><?php the_sub_field( 'title' ); ?></h4>
                            <div class="description">
                                <?php the_sub_field( 'description' ); ?>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
        </div>
      </section>


      <section id="fhir_challenges_solved">
        <div class="container">
          <div class="head">
            <h2><?php the_field( 'section_title_fhir_challenges_solved' ); ?></h2>
          </div>

          <?php if ( have_rows( 'cards_challenges_solved' ) ) : ?>
              <div class="cards">
                  <?php while ( have_rows( 'cards_challenges_solved' ) ) : the_row(); ?>
                      <div class="card">
                          <?php $icon = get_sub_field( 'icon' ); ?>
                          <?php if ( $icon ) : ?>
                            <div class="icon">
                              <img src="<?php echo esc_url( $icon['url'] ); ?>" alt="<?php echo esc_attr( $icon['alt'] ); ?>" />
                            </div>
                          <?php endif; ?>
                          <h4><?php the_sub_field( 'title' ); ?></h4>
                          <div class="description">
                              <?php the_sub_field( 'description' ); ?>
                          </div>
                      </div>
                  <?php endwhile; ?>
              </div>
          <?php endif; ?>


          <?php if ( have_rows( 'actions' ) ) : ?>
              <div class="actions">
                  <?php while ( have_rows( 'actions' ) ) : the_row(); ?>
                      <?php if ( have_rows( 'request_demo' ) ) : ?>
                          <?php while ( have_rows( 'request_demo' ) ) : the_row(); ?>
                            <a href="<?php the_sub_field( 'link' ); ?>" class="btn blue"><?php the_sub_field( 'title' ); ?></a>
                          <?php endwhile; ?>
                      <?php endif; ?>
                      <?php if ( have_rows( 'learn_more' ) ) : ?>
                          <?php while ( have_rows( 'learn_more' ) ) : the_row(); ?>
                            <a href="<?php the_sub_field( 'link' ); ?>" class="more"><?php the_sub_field( 'title' ); ?></a>
                          <?php endwhile; ?>
                      <?php endif; ?>
                  <?php endwhile; ?>
              </div>
          <?php endif; ?>
        </div>
      </section>


      <section id="step-by-step">
        <div class="container">
          <div class="head">
              <h2><?php the_field( 'section_title_step-by-step' ); ?></h2>
          </div>
          <?php if ( have_rows( 'list_of_steps' ) ) : ?>
              <div class="steps">
                  <?php while ( have_rows( 'list_of_steps' ) ) : the_row(); ?>
                      <div class="step">
                          <div class="num"></div>
                          <?php the_sub_field( 'step' ); ?>
                      </div>
                  <?php endwhile; ?>
              </div>
          <?php endif; ?>

          <?php if ( have_rows( 'action' ) ) : ?>
              <div class="action">
                  <?php while ( have_rows( 'action' ) ) : the_row(); ?>
                    <a href="<?php the_sub_field( 'link' ); ?>" class="btn blue"><?php the_sub_field( 'title' ); ?></a>
                  <?php endwhile; ?>
              </div>
          <?php endif; ?>
        </div>
      </section>

    </div>

<?php get_template_part('template-parts/new-contact-us', 'section'); ?>
<?php
include('new-footer.php');
