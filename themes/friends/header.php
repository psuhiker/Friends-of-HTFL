<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WX2T99Q"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<header id="header">
    <div class="container">

        <div class="row row-eq-height">

            <div class="col-xs-6 col-sm-4 col-md-2">
                <div class="logo">
                    <a href="<?php echo site_url(); ?>">
                        <img src="<?php bloginfo('template_directory'); ?>/images/logo.jpg">
                    </a>
                </div>
            </div>

            <div class="col-sm-12 col-md-10">
                <div class="navigation text-right">
                    <!--<div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-primary" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="glyphicon glyphicon-chevron-up" aria-hidden="true"></span>
                        </button>
                    </div>-->
                    <?php wp_nav_menu(
                        array(
                            'theme_location' => 'primary',
                            'menu_class' => 'nav'
                        )
                    ); ?>
                    <div class="clearfix"></div>
                </div>
            </div>

        </div>

    </div>
</header>
