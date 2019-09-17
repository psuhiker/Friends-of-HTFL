<footer id="footer">
    <div class="container">

        <div class="row">

	        <div class="col-md-6 menu">
	            <?php wp_nav_menu( array( 'theme_location' => 'footer' ) ); ?>
	            <div class="clearfix"></div>
	        </div>

	        <div class="col-md-6 copyright text-right">
	        	<p class="font-size--default"><strong><?php bloginfo('name'); ?></strong></p>
	            <p class="default-padding--top no-margin--bottom">&copy; <?php echo date('Y'); ?> All Rights Reserved</p>
	            <p>1601 Darby Road | Havertown, PA 19083</p>
	            <div class="clearfix"></div>
	        </div>

        </div>

    </div>
</footer>

<?php wp_footer(); ?>
