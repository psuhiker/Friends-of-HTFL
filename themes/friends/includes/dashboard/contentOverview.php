<div class="row">

    <div class="col">

        <?php
            query_posts(array(
                'post_type' => array (
                    'page',
                    'post',
                ),
                'showposts' => 5,
                'orderby' => 'modified',
                'order' => 'DESC',
                'post_status' => publish
            ) );
        ?>
        <h3 class="default-margin--bottom">Recently Edited Pages</h3>
        <table class="table">
            <?php while ( have_posts() ) : the_post(); ?>
                <tr>
                    <td>
                        <strong><?php the_title(); ?></strong><br>
                        <span class="description">
                            Last Edited <?php the_modified_date('F j, Y'); ?>
                        </span>
                    </td>
                    <td>
                        <a href="<?php the_permalink(); ?>" class="font-size--sm">
                            <br>View
                        </a>
                    </td>
                    <td>
                        <a href="post.php?post=<?php the_id(); ?>&action=edit" class="font-size--sm">
                            <br>Edit
                        </a>
                    </td>
                </tr>
            <?php endwhile; ?>
        </table>
    </div>

    <div class="col">

        <h3 class="default-margin--bottom">More Content</h3>

        <?php query_posts( 'post_type=page&orderby=title&order=ASC&post_status=publish&posts_per_page=999' ); ?>
            <?php if ( have_posts() ) : ?>

                <div class="dropdown dropdown--content">
                    <button class="btn dropdown-toggle btn btn-submit scroll" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        All Pages <i class="fas fa-angle-right iconPages"></i>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

                        <?php while ( have_posts() ) : the_post(); ?>

                            <a class="dropdown-item" href="<?php the_permalink(); ?>">
                                <span>
                                    <?php the_title(); ?>
                                </span>
                                <span class="description">
                                    Published on <?php the_time('F j, Y'); ?>
                                </span>
                            </a>

                        <?php endwhile; ?>

                    </div>
                </div>

            <?php else: endif; ?>
        <?php wp_reset_query(); ?>

        <div class="clearfix default-margin--top"></div>

        <?php query_posts( 'post_type=events&orderby=title&order=ASC&post_status=publish&posts_per_page=999' ); ?>
            <?php if ( have_posts() ) : ?>

                <div class="dropdown dropdown--content">
                    <button class="btn dropdown-toggle btn btn-submit scroll" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Events <i class="fas fa-angle-right iconEvents"></i>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

                        <?php while ( have_posts() ) : the_post(); ?>

                            <a class="dropdown-item" href="<?php the_permalink(); ?>">
                                <span>
                                    <?php the_title(); ?>
                                </span>
                                <span class="description">
                                    Published on <?php the_time('F j, Y'); ?>
                                </span>
                            </a>

                        <?php endwhile; ?>

                    </div>
                </div>

            <?php else: endif; ?>
        <?php wp_reset_query(); ?>

        <div class="clearfix default-margin--top"></div>

        <?php query_posts( 'post_type=post&orderby=title&order=ASC&post_status=publish&posts_per_page=999' ); ?>
            <?php if ( have_posts() ) : ?>

                <div class="dropdown dropdown--content">
                    <button class="btn dropdown-toggle btn btn-submit scroll" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Blog Posts <i class="fas fa-angle-right iconBlog"></i>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

                        <?php while ( have_posts() ) : the_post(); ?>

                            <a class="dropdown-item" href="<?php the_permalink(); ?>">
                                <span>
                                    <?php the_title(); ?>
                                </span>
                                <span class="description">
                                    Published on <?php the_time('F j, Y'); ?>
                                </span>
                            </a>

                        <?php endwhile; ?>

                    </div>
                </div>

            <?php else: endif; ?>
        <?php wp_reset_query(); ?>

        <div class="clearfix default-margin--top"></div>

        <?php query_posts( 'post_type=annual_reports&orderby=title&order=ASC&post_status=publish&posts_per_page=999' ); ?>
            <?php if ( have_posts() ) : ?>

                <div class="dropdown dropdown--content">
                    <button class="btn dropdown-toggle btn btn-submit scroll" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Annual Reports <i class="fas fa-angle-right iconReports"></i>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

                        <?php while ( have_posts() ) : the_post(); ?>

                            <a class="dropdown-item" href="<?php the_permalink(); ?>">
                                <span>
                                    <?php the_title(); ?>
                                </span>
                                <span class="description">
                                    Published on <?php the_time('F j, Y'); ?>
                                </span>
                            </a>

                        <?php endwhile; ?>

                    </div>
                </div>

            <?php else: endif; ?>
        <?php wp_reset_query(); ?>

    </div>

</div>



<style><!--
    .btn-submit i.iconPages:after, .btn-submit--clear i.iconPages:after {
        content: "Pages" !important;
        font-family: sans-serif;
    }
    .btn-submit i.iconEvents:after, .btn-submit--clear i.iconEvents:after {
        content: "Events" !important;
        font-family: sans-serif;
    }
    .btn-submit i.iconBlog:after, .btn-submit--clear i.iconBlog:after {
        content: "Blog Posts" !important;
        font-family: sans-serif;
    }
    .btn-submit i.iconReports:after, .btn-submit--clear i.iconReports:after {
        content: "Annual Reports" !important;
        font-family: sans-serif;
    }
--></style>
