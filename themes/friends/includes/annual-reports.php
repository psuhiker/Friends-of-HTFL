<section class="text bg-light">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8">
                <?php
                    $posts = get_posts(
                        array(
                            'post_type' => 'annual_reports',
                            'posts_per_page' => -1)
                        );
                        if( $posts ) {
                ?>
                    <table class="table">
                        <tbody>
                            <?php foreach( $posts as $post ) {  setup_postdata( $post ); ?>
                                <tr>
                                    <td>
                                        <p style="margin-top: 5px;">
                                            <strong><?php the_title(); ?></strong>
                                        </p>
                                    </td>
                                    <td class="text-right">
                                        <a href="<?php the_field('report_pdf'); ?>" class="btn btn-submit no-margin--bottom" target="_blank">
                                            Download the Report
                                            <i class="fas fa-file-alt" aria-hidden="true"></i>
                                        </a>
                                    </td>
                                </tr>
                                <?php if( get_field('report_introduction') ) { ?>
                                    <tr>
                                        <td colspan="2" class="border--none--top">
                                            <?php the_field('report_introduction'); ?>
                                        </td>
                                    </tr>
                                <?php } ?>
                            <?php } wp_reset_postdata(); } ?>
                        </tbody>
                    </table>
            </div>
        </div>
    </div>
</section>
