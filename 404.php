<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
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
                        <h1 style="margin-bottom: 40px !important; font-size: 60px !important; border-bottom: 2px solid #ececec25;">404</h1>

                        <div class="row">
                            <div class="col-sm-2 logoArea">
                                <a title="<?php echo get_bloginfo( 'name' ); ?>" href="<?php echo get_site_url(); ?>"><?php echo get_bloginfo( 'name' ); ?></a>
                            </div>
                        </div>



                    </div>
                    <!-- Left Content end -->

                </div>
            </div>
        </section>
    </main>

<?php
get_footer();
