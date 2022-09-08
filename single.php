<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Domain_Satış
 */

get_header();
?>

	<main id="primary" class="site-main">
        <section class="hero-area position-relative">
            <div style="width: 100%" class="left-bg-area bg-area"></div>
            <div id="particles" class="right-bg-area bg-area"></div>
            <div class="container">

                <div class="row full-height align-items-center">
                    <!-- Left Content start -->
                    <div class="col-md-12 col-md-12 p-100px-t p-50px-b light-text">
                        <div class="row">
                            <div class="col-sm-2 logoArea">
                                <a title="<?php echo get_bloginfo( 'name' ); ?>" href="<?php echo get_site_url(); ?>"><?php echo get_bloginfo( 'name' ); ?></a> <!-- Change your logo here -->
                            </div>
                        </div>


                        <?php
                        while ( have_posts() ) :
                            the_post();

                            get_template_part( 'template-parts/content', get_post_type() );

                            the_post_navigation(
                                array(
                                    'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'eccom' ) . '</span> <span class="nav-title">%title</span>',
                                    'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'eccom' ) . '</span> <span class="nav-title">%title</span>',
                                )
                            );

                            // If comments are open or we have at least one comment, load up the comment template.
                        ?>
                        <div class="commentArea">
                            <?php
                            if ( comments_open() || get_comments_number() ) :
                                comments_template();
                            endif;
                            ?>
                        </div>
                        <?php

                        endwhile; // End of the loop.
                        ?>
                        <div class="contact-info">

                        </div>

                    </div>
                    <!-- Left Content end -->

                </div>
            </div>
        </section>
    </main>
























	</main><!-- #main -->

<?php
get_footer();
