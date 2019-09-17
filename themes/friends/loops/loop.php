<?php while ( have_posts() ) : the_post(); get_template_part( 'content', 'page' ); ?>

    <?php // include (TEMPLATEPATH . '/includes/marquee.php' ); ?>

    <div class="header divider"></div>

    <div class="bg--secondary xl-padding--bottom">
        <div class="container">
        	<div class="row">
    	    	<div class="col-xs-12">
    	    		<h1 class="xl-margin--top no-margin--bottom text-color--white text-shadow--heavy">

    	    			<?php the_title(); ?>

    	    		</h1>
    	    	</div>
    	    </div>
        </div>
    </div>

    <section class="default">
        <div class="container">
            <div class="col-md-8">
                <?php the_content(); ?>
            </div>
        </div>
    </section>

<?php endwhile; ?>
