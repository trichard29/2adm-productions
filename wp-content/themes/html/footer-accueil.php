 <!-- start footer --> 
 <footer class="footer-center-logo2 padding-one-tb sm-padding-30px-tb">
            <div class="container">
                <div class="row align-items-center">
                    <!-- start social media -->
                    <div class="col-lg-4 col-md-5 social-style-3 text-center text-lg-start sm-margin-10px-bottom">
                        <div class="social-icon-style-8 d-inline-block align-middle">
                            <ul class="small-icon mb-0">
                                <li><a class="facebook" href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                                <li><a class="twitter" href="https://twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                <li><a class="google" href="https://plus.google.com" target="_blank"><i class="fab fa-google-plus-g"></i></a></li>
                                <li><a class="dribbble" href="https://dribbble.com/" target="_blank"><i class="fab fa-dribbble me-0" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- end social media -->
                    <!-- start logo -->
                    <div class="col-lg-4 col-md-2 text-center sm-margin-20px-bottom">
                        <a href="index.html"><img class="footer-logo" src="<?php bloginfo('template_directory'); ?>/images/logo.png" data-at2x="<?php bloginfo('template_directory'); ?>/images/logo@2x.png" alt=""></a>
                    </div>
                    <!-- end logo -->
                    <!-- start copyright -->
                    <div class="col-lg-4 col-md-5 text-center alt-font text-small font-weight-500 text-lg-end">
                        <?= get_field('options_footer','options')['copyright']; ?>
                    </div>
                    <!-- end copyright -->
                </div>
            </div>
        </footer>
        <!-- end footer --> 
        <!-- javascript -->
        <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.min.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/bootsnav.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.nav.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/hamburger-menu.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/theme-vendors.min.js"></script>
        <!-- revolution -->
        <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/revolution/js/jquery.themepunch.tools.min.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/revolution/js/jquery.themepunch.revolution.min.js"></script>
        <!-- revolution slider extensions (load below extensions JS files only on local file systems to make the slider work! The following part can be removed on server for on demand loading) -->
        <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/revolution/js/extensions/revolution.extension.actions.min.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/revolution/js/extensions/revolution.extension.migration.min.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/revolution/js/extensions/revolution.extension.video.min.js"></script>
        <!-- setting -->
        <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/main.js"></script>

        <?php wp_footer(); ?>

    </body>
</html>