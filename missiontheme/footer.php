<footer class="footer full-width" id="footer">
    <section class="section section--footer">
        <div class="utility-container">
            <div class="menu-container">
                <?php wp_nav_menu(array(
                    'theme_location' => 'footer-nav-1',
                    'container' => '',
                    'items_wrap' => '
                                    <ul class="footer-nav footer-nav-1">
                                        %3$s
                                    </ul>
                                    ',
                    'menu_id' => ''
                ));
                ?>
            </div>
            <div class="logo-container">
                <a href="/"><img src="/wp-content/themes/missiontheme/assets/mission-logo.png"  alt="Logo" class="logo"></a>
            </div>
            <div class="menu-container">
                <?php wp_nav_menu(array(
                    'theme_location' => 'footer-nav-2',
                    'container' => '',
                    'items_wrap' => '
                                    <ul class="footer-nav footer-nav-2">
                                        %3$s
                                    </ul>
                                    ',
                    'menu_id' => ''
                ));
                ?>
            </div>
        </div>
        <div class="info-container">
            <div class="icon-wrapper">
                <a href="<?php the_field('ig', 'option'); ?>"><img src="/wp-content/themes/missiontheme/assets/icon-igram.svg" alt="instagram" /></a>
                <a href="<?php the_field('fb', 'option'); ?>"><img src="/wp-content/themes/missiontheme/assets/icon-fbook.svg" alt="facebook" /></a>
                <a href="<?php the_field('li', 'option'); ?>"><img src="/wp-content/themes/missiontheme/assets/icon-lin.svg" alt="linkedin" /></a>
            </div>
            <div class="info-block">
                <div class="utility-bar">
                <a href="/compliance">Compliance</a>
                <a href="/privacy-policy">Privacy Policy</a>
                </div>
                <p>&copy; 2022 Mission Healthcare. All rights reserved.
                    <br>Website Design, Development & SEO by <a
                        href="https://www.cardinaldigitalmarketing.com/">Cardinal Digital Marketing</a>
                </p>
            </div>
        </div>
    </section>
</footer>
<?php wp_footer(); ?>
</body>
<?php the_field('insert_in_footer', 'option'); ?>
</html>