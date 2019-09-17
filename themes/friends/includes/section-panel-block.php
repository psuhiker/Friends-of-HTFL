<section class="panels">
    <div class="container">
        <?php $panel_count = count( get_sub_field('section_three_block_panel_single_block') ); ?>
        <div class="row <?php if ( $panel_count == 2 ) { ?>justify-content-center<?php } ?>">
            <?php if( have_rows('section_three_block_panel_single_block') ): while ( have_rows('section_three_block_panel_single_block') ) : the_row(); ?>

                <div class="block panels <?php if ( $panel_count == 1 ) { ?>col-12 col-md-8 col-lg-5<?php } elseif ( $panel_count == 2 ) { ?>col-12 col-md-4<?php } elseif ( $panel_count == 3 ) { ?>col-12 col-md-4<?php } ?>">

                    <div class="image" style="background-image: url(<?php the_sub_field('section_three_block_panel_image'); ?>);"></div>

                    <div class="title">
                        <h2><?php the_sub_field('section_three_block_panel_title'); ?></h2>
                    </div>

                    <div class="copy">
                        <div class="text sm-margin--bottom">
                            <?php the_sub_field('section_three_block_panel_copy'); ?>
                            <div class="clearfix"></div>
                        </div>
                        <p class="link">
                            <?php if( get_sub_field('section_three_block_panel_link_options') == 'internal' ) { ?>
                                <?php $post_object = get_sub_field('section_three_block_panel_page'); if( $post_object ): $post = $post_object; setup_postdata( $post ); ?>
                                    <a href="<?php the_permalink(); ?>">
                                    	<?php the_sub_field('section_three_block_panel_link_text'); ?>
                                    </a>
                                    <?php wp_reset_postdata(); ?>
                                <?php endif; ?>
                            <?php } else { ?>
                                <a href="<?php the_sub_field('section_three_block_panel_custom_url'); ?>">
                                    <?php the_sub_field('section_three_block_panel_link_text'); ?>
                                </a>
                            <?php } ?>
                        </p>
                    </div>

                </div>

            <?php endwhile; else : endif; ?>

        </div>
    </div>
</section>
