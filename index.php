<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Domain_Satış
 */

get_header();
?>

	<main id="primary" class="site-main">
        <!-- ========== Main Start ========== -->
        <section class="hero-area position-relative">
            <div class="left-bg-area bg-area"></div>
            <div id="particles" class="right-bg-area bg-area"></div>
            <div class="container">


                <div class="row full-height align-items-center">
                    <!-- Left Content start -->
                    <div class="col-md-6 col-md-6 p-100px-t p-50px-b light-text">
                        <h2 style="width: inherit" class="m-25px-b"><span class="domain-name"><?php
                                if(!empty(get_option('eccom_domain_name'))){
                                    echo get_option('eccom_domain_name');
                                }else{
                                    echo $_SERVER['SERVER_NAME'];
                                }
                                ?></span>
                            <br>
                            <?php if(!empty(get_option('eccom_domain_badge'))){
                                ?>
                                                            <span class="domain-offer">
                                <?php echo get_option('eccom_domain_badge'); ?></span>
        <?php
                            }?>

                        </h2>

                        <?php
                        if(!empty(get_option('eccom_domain_description'))){
                            ?>
                            <p><?php echo get_option('eccom_domain_description'); ?></p>
                            <?php
                        }
                        ?>

                        <?php
                        if(!empty(get_option('eccom_domain_sub_description'))){
                            ?>
                            <p><b><?php echo get_option('eccom_domain_sub_description'); ?></b></p>
                            <?php
                        }
                        ?>
                        <?php
                        if(!empty(get_option('eccom_button_text'))){
                            ?>
                            <div class="domain-offering domain-offering-fill"><?php echo get_option('eccom_button_text'); ?></div>
                            <?php
                        }
                        ?>
                        <div class="contact-info">
                            <?php
                            if(!empty(get_option('eccom_contact_email_address'))){
                                ?>
                                <p><i class="icofont-envelope"></i> &nbsp; <?php echo get_option('eccom_contact_email_address'); ?></p>

                                <?php
                            }
                            ?>
                            <?php
                            if(!empty(get_option('eccom_contact_telephone'))){
                                ?>
                                <a href="tel:<?php echo get_option('eccom_contact_telephone'); ?>"><i class="icofont-phone"></i> &nbsp; <?php echo get_option('eccom_contact_telephone'); ?></a>

                                <?php
                            }
                            ?>
                        </div>
                        <ul class="social-links">
                        <?php
                         if(!empty(get_option('eccom_fb_link'))){ ?>
                            <li><a href="<?php echo get_option('eccom_fb_link');?>"><i class="ri-facebook-circle-fill"></i></a></li>
                             <? } ?>
                            <?php
                            if(!empty(get_option('eccom_tw_link'))){ ?>
                                <li><a href="<?php echo get_option('eccom_tw_link');?>"><i class="ri-twitter-fill"></i></a></li>
                            <? } ?>
                            <?php
                            if(!empty(get_option('eccom_ig_link'))){ ?>
                                <li><a href="<?php echo get_option('eccom_ig_link');?>"><i class="ri-instagram-fill"></i></a></li>
                            <? } ?>
                            <?php
                            if(!empty(get_option('eccom_gb_link'))){ ?>
                                <li><a href="<?php echo get_option('eccom_gb_link');?>"><i class="ri-global-fill"></i></a></li>
                            <? } ?>
                        </ul>
                    </div>
                    <!-- Left Content end -->

                    <!-- Right Content start -->
                    <div style="padding-top: 200px" class="col-md-6 p-100px-t p-50px-b md-p-0px-t hero-right">
                        <div class="hero-area m-50px-b sm-m-25px-b">
                            <?php if(!empty(get_option('eccom_form_title'))){ ?>
                            <h1 class="m-15px-b md-color-light"><?php echo get_option('eccom_form_title'); ?></h1>
                            <?php } ?>

                            <?php if(!empty(get_option('eccom_form_description'))){ ?>
                            <span class=" md-color-light">
                                <p><?php echo get_option('eccom_form_description'); ?></p>
                            </span>
                            <?php } ?>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="offer-form-wrap">
                                    <?php
                                    if(!empty(get_option('eccom_form_id'))){
                                    ?>
                                    <?php
                                        $formId = get_option('eccom_form_id');
                                        echo do_shortcode( '[contact-form-7 id="'.$formId. '"]' ); ?>

                                    <?php }else{ echo get_option('eccom_contact_email_address'); } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Right Content end -->
                </div>
            </div>
        </section>
	</main><!-- #main -->

<?php
get_footer();
