<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link
 *
 * @package Clearsoft
 * @subpackage RedmondsFarm
 * @since 1.0
 * @version 1.0
 */
?>

<!-- FOOTER -->
<footer id="footer" class="footer-light">
    <div class="container">

        <div class="row text-xs-center">

            <!-- col #1 -->
            <div class="spaced col-md-4 col-sm-4 text-xs-center">

                <!-- Footer Logo -->
                <img class="wow fadeInRight animation-visible footer-logo inline-block" src="<?php echo get_template_directory_uri() ;?>/assets/images/logo.jpg" alt="" />

            </div>
            <!-- /col #1 -->

            <!-- col #2 -->
            <div class="col-md-8 col-sm-8 hidden-sm hidden-xs-down">

                <div class="row">

                    <div class="col-md-4">
                        <h4 class="letter-spacing-1">SERVICES</h4>
                        <ul id="ServicesMenu" class="list-unstyled">
                                <?php
                                if ( has_nav_menu( 'Services-menu' ) ) {
                                    wp_nav_menu( array(
                                        'container' 		=> '',
                                        'items_wrap' 		=> '%3$s',
                                        'theme_location' 	=> 'Services-menu',
                                    ) );
                                } else {
                                    wp_list_pages( array(
                                        'container' => '',
                                        'title_li' 	=> '',
                                    ) );
                                }
                                ?>
                        </ul>

                    </div>

                    <div class="col-md-4">
                        <h4 class="letter-spacing-1">SITE LINKS</h4>
                        <ul id="SiteLinksMenu" class="list-unstyled">
                            <?php
                            if ( has_nav_menu( 'Site-Links-menu' ) ) {
                                wp_nav_menu( array(
                                    'container' 		=> '',
                                    'items_wrap' 		=> '%3$s',
                                    'theme_location' 	=> 'Site-Links-menu',
                                ) );
                            } else {
                                wp_list_pages( array(
                                    'container' => '',
                                    'title_li' 	=> '',
                                ) );
                            }
                            ?>
                        </ul>
                    </div>

                    <div class="col-md-4">
                        <h4 class="letter-spacing-1">CONTACT</h4>
                        <p>
                            Chapelriver, Kiladreenan, <br />
                            Newtownmountkennedy, <br />
                            Co. Wicklow
                        </p>
                        <p>
                            <strong>Phone :- </strong><span class="float-right"><a href="tel:012810416"></href>01 2810416</a></span><br />
                            <strong>Freephone :- </strong><span class="float-right"><a href="tel:1800303169"></href>1800 303 169</a></span><br />
                            <strong>Email :- </strong><span class="float-right"><a href="mailto:info@djhanleys.ie"></href>info@djhanleys.ie</a></span>
                        </p>
                    </div>

                </div>

            </div>
            <!-- /col #2 -->

        </div>

    </div>

    <div class="copyright has-social">
        <div class="container">

            <!-- Social Icons -->
            <div class="float-right nofloat-xs text-xs-center">
                <a href="#" class="social-icon social-icon-sm social-icon-transparent social-facebook" data-toggle="tooltip" data-placement="top" title="Facebook">
                    <i class="icon-facebook"></i>
                    <i class="icon-facebook"></i>
                </a>

                <a href="#" class="social-icon social-icon-sm social-icon-transparent social-twitter" data-toggle="tooltip" data-placement="top" title="Twitter">
                    <i class="icon-twitter"></i>
                    <i class="icon-twitter"></i>
                </a>

                <a href="#" class="social-icon social-icon-sm social-icon-transparent social-gplus" data-toggle="tooltip" data-placement="top" title="Google plus">
                    <i class="icon-gplus"></i>
                    <i class="icon-gplus"></i>
                </a>

                <a href="#" class="social-icon social-icon-sm social-icon-transparent social-linkedin" data-toggle="tooltip" data-placement="top" title="Linkedin">
                    <i class="icon-linkedin"></i>
                    <i class="icon-linkedin"></i>
                </a>
            </div>
            <!-- /Social Icons -->

            <div class="copyright-text float-left nofloat-xs">
                &copy; DJ Hanley - 2018 | Website by <a href="https://www.clearsoft.ie" target="_blank">ClearSoft</a>
            </div>

        </div>
    </div>

</footer>
<!-- /FOOTER -->


</div>
<!-- /wrapper -->


<!-- SCROLL TO TOP -->
<a href="#" id="toTop"></a>


<!-- PRELOADER -->
<div id="preloader">
    <div class="inner">
        <span class="loader"></span>
    </div>
</div><!-- /PRELOADER -->


<!-- JAVASCRIPT FILES -->
<script type="text/javascript">var plugin_path = '<?php echo get_template_directory_uri() ;?>/assets/plugins/';</script>
<script type="text/javascript" src="<?php echo get_template_directory_uri() ;?>/assets/plugins/jquery/jquery-3.2.1.min.js"></script>

<script type="text/javascript" src="<?php echo get_template_directory_uri() ;?>/assets/js/scripts.js"></script>


<!-- PAGE LEVEL SCRIPT -->
<script async type="text/javascript" src="<?php echo get_template_directory_uri() ;?>/assets/js/view/pack_realestate.js"></script>

<?php wp_footer(); ?>

</body>
</html>