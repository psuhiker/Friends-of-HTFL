<?php //include (TEMPLATEPATH . '/includes/marquee.php' ); ?>
<div class="header divider"></div>
<div class="bg--secondary xl-padding--bottom">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <p class="font-size--lg lg-margin--top color--white text-shadow--heavy">
                    Events
                </p>
            </div>
        </div>
    </div>
</div>

<section class="event details">
    <div class="container">
        <div class="row">

        	<div class="col-sm-6">
        		<?php if ( get_field('event_featured_image') ) { ?>
        		    <div class="event block" style="background-image: url(<?php the_field('event_featured_image'); ?>);">
        		<?php } else { ?>
        		    <div class="event block" style="background-image: url(<?php the_field('marquee_image', 8); ?>);">
        		<?php } ?>
	        	    <div class="outer">
	        	        <div class="inner">

	        	            <?php $date = get_field('event_date', false, false); $date = new DateTime($date); ?>

	        	            <!--<div class="date">
	        	                <span class="day">
	        	                    <?php echo $date->format('j'); ?>
	        	                </span>
	        	                <span class="month">
	        	                    <?php echo $date->format('F'); ?>
	        	                </span>
	        	                <span class="year">
	        	                    <?php echo $date->format('Y'); ?>
	        	                </span>
	        	            </div>-->

	        	            <div class="title">
	        	                <?php the_title(); ?>
	        	            </div>

	        	        </div>
	        	    </div>
	        	</div>
        	</div>

        	<div class="col-sm-6">
        		<div class="event description">

                    <h1>
                        <?php the_title(); ?>
                    </h1>

                    <div class="row">
                        <?php if( get_field('event_time') ) { ?>
                            <div class="col-md-6 col-xl-5">
                                <p class="no-margin--bottom"><strong>When</strong></p>
                                <p class="no-margin--bottom">
                                    <?php echo $date->format('l'); ?>
    	        	            </p>
                                <p class="text-nowrap">
                                    <?php echo $date->format('F jS, Y'); ?>
    	        	            </p>
                                <p><?php the_field('event_time'); ?></p>
                            </div>
                        <?php } ?>

                        <?php if( get_field('event_location') ) { ?>
                            <div class="col-md-6 col-xl-7">
                                <p class="no-margin--bottom"><strong>Where</strong></p>
                                <p><?php the_field('event_location'); ?></p>
                            </div>
                        <?php } ?>
                        <?php
                    		$today = current_time( 'Ymd', $gmt = 0 );
                    		$yesterday = strtotime('-1 day', $today);
                    		$tomorrow = strtotime('+1 day', $today);
                    		$eventdate = get_field('event_date', false, false);
                    	?>

                        <?php if ($eventdate < $today) { ?>
                            <div class="col-12">
                                <div class="alert alert-warning lg-margin--bottom" role="alert">
                                    This event has already taken place
                                </div>
                            </div>
                    	<?php } else { ?>
                            <div class="col-12 lg-margin--bottom">
                                <div class="border">
                                </div>
                            </div>
                    	<?php } ?>

                    </div>

                    <div class="clearfix"></div>

                    <?php if( get_field('event_description') ) { ?>
	        		    <?php the_field('event_description'); ?>
	        		<?php } ?>

	        		<div class="row">

                        <?php if( have_rows('event_pricing') ): ?>
    						<div class="col-12 lg-margin--top">
                                <h2 class="no-margin--bottom"><strong>Cost</strong></h2>
    							<?php while ( have_rows('event_pricing') ) : the_row(); ?>
                                    <p class="no-margin--bottom">
                                        <strong>
                                            $<?php the_sub_field('event_pricing_price'); ?>
                                            <?php the_sub_field('event_pricing_label'); ?>
                                        </strong>
                                    </p>
                                    <?php if( get_sub_field('event_pricing_member_price') ) { ?>
                                        <p class="font-size--sm">
                                            <em>
                                                $<?php the_sub_field('event_pricing_member_price'); ?> for members
                                            </em>
                                        </p>
                                    <?php } ?>
    							<?php endwhile; ?>
    						</div>
    					<?php else : endif; ?>

		        	</div>

		        	<!--<p class="default-margin--top"><a href="#registration" class="btn btn-default register" data-toggle="tab">Register</a></p>-->

        		</div>
        	</div>

        </div>
    </div>
</section>

<?php if( have_rows('event_photo_gallery') ): ?>

	<?php $photo = 0; ?>
	<section class="gallery">
		<div class="container">

            <h2 class="text-center color--white default-margin--top">Photo Gallery</h2>
			<div class="row">

				<div class="lg-margin--top">

					<div class="am-container" id="am-container">

						<?php while ( have_rows('event_photo_gallery') ) : the_row(); ?>

							<a href="#photo<?php echo $photo; ?>" data-toggle="modal" data-target="#photo<?php echo $photo; ?>">
								<img src="<?php the_sub_field('event_photo_gallery_photo'); ?>"></img></img>
							</a>

							<?php $photo++ ?>

						<?php endwhile; ?>

					</div>

				</div>

			</div>
		</div>
	</section>

<?php else : endif; ?>

<?php if( have_rows('event_photo_gallery') ): ?>

	<?php $photoLarge = 0; ?>

	<?php while ( have_rows('event_photo_gallery') ) : the_row(); ?>

		<div class="modal fade" tabindex="-1" role="dialog" id="photo<?php echo $photoLarge; ?>">
			<div class="modal-dialog modal-lg" role="document">
		    	<div class="modal-content">
		      		<div class="modal-header">
		        		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		      		</div>
		      		<div class="modal-body text-center">
		        		<img src="<?php the_sub_field('event_photo_gallery_photo'); ?>">
		      		</div>
		      		<div class="modal-footer">
		      			<p><?php the_sub_field('event_photo_gallery_caption'); ?></p>
		      		</div>
		      	</div>
		    </div>
		</div>

		<?php $photoLarge++ ?>

	<?php endwhile; ?>

<?php else : endif; ?>
