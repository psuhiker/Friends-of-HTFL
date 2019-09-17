<?php if( get_field('introductory_copy') ) { ?>

	<section class="intro">
	    <div class="container">
	        <div class="row row-eq-height xl-padding--vertical">
	            <div class="col-md-7">
	                <?php the_field('introductory_copy'); ?>
	            </div>
	            <div class="col-md-5 bg">
					<?php if( get_field('introductory_image') ) { ?>
						<img src="<?php the_field('introductory_image'); ?>">
					<?php } ?>
	            </div>
	        </div>
	    </div>
	</section>

<?php } ?>
