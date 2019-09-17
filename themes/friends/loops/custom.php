<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <?php include (TEMPLATEPATH . '/includes/marquee.php' ); ?>

    <div class="post-content">

        <?php include (TEMPLATEPATH . '/includes/intro.php' ); ?>

        <div class="clearfix"></div>

        <?php if( have_rows('section') ): while ( have_rows('section') ) : the_row(); ?>

            <?php if( get_row_layout() == 'section_three_block_panel' ): ?>

                <?php include (TEMPLATEPATH . '/includes/section-panel-block.php' ); ?>

            <?php elseif( get_row_layout() == 'section_text_blocks' ): ?>

                <?php include (TEMPLATEPATH . '/includes/section-text-blocks.php' ); ?>

            <?php elseif( get_row_layout() == 'section_blockquote' ): ?>

                <?php include (TEMPLATEPATH . '/includes/section-blockquote.php' ); ?>

            <?php elseif( get_row_layout() == 'section_form' ): ?>

                <?php include (TEMPLATEPATH . '/includes/section-form.php' ); ?>

            <?php endif; ?>

        <?php endwhile; else : endif; ?>

        <?php if ( is_page('8') ) { // Events ?>

            <meta http-equiv="refresh" content="0;URL='<?php echo site_url(); ?>/events/'" />

        <?php //}elseif ( is_page('6') ) {  // About Page ?>

            <?php //include (TEMPLATEPATH . '/loops/about.php' ); ?>

        <?php } elseif ( is_page('annual-reports') ) { // Annual Reports Page?>

            <?php include (TEMPLATEPATH . '/includes/annual-reports.php' ); ?>

        <?php //} elseif ( is_page('347') ) { // Donation Confirmation Page ?>

        	<?php //include (TEMPLATEPATH . '/includes/donation-details.php' ); ?>

        <?php //} elseif ( is_page('127') ) { // Event Confirmation Page ?>

        	<?php //include (TEMPLATEPATH . '/includes/event-registration-details.php' ); ?>

        <?php } ?>

    </div>

<?php endwhile; ?>

    <?php else : ?>

<?php endif; ?>
