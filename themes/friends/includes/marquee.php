<?php $marquee = get_field('include_marquee'); if( $marquee && in_array('yes', $marquee) ) : ?>

    <section class="marquee" style="background-image: url(<?php the_field('marquee_image'); ?>);">
        <div class="vertical-align">
            <div class="vertical-align--content">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h1>
                                <?php if( get_field('public_title') ) { ?>
                                    <?php the_field('public_title'); ?>
                                <?php } else { ?>
                                    <?php the_title(); ?>
                                <?php } ?>
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="clearfix"></div>

<?php else : ?>

    <div class="header divider"></div>

    <div class="bg--secondary xl-padding--bottom">
        <div class="container">
        	<div class="row">
    	    	<div class="col-xs-12">
    	    		<h1 class="xl-margin--top no-margin--bottom text-color--white text-shadow--heavy">

    	    			<?php if( get_field('public_title') ) { ?>
    	    				<?php the_field('public_title'); ?>
    	    			<?php } else { ?>
    	    				<?php the_title(); ?>
    	    			<?php } ?>

    	    		</h1>
    	    	</div>
    	    </div>
        </div>
    </div>

<?php endif; ?>
