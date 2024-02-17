<?php wp_footer(); ?>
        <footer class="footer full-width" id="footer">
            <section class="section section--footer">
                <div class="logo-container">
                    <div class="info-block">
                        <img src="/wp-content/themes/missionhealthcare/assets/graphic-nyt.png" alt="NYT Logo" class="logo" width="auto" height="auto" loading="lazy" >
                        <img src="/wp-content/themes/missionhealthcare/assets/twp_san_diego.png" alt="Top Work Places SD Logo" class="logo" width="auto" height="auto" loading="lazy" >
                    </div>      
                </div>
                <div class="menu-container">
                    <div class="info-block">
                    <?php wp_nav_menu( array( 
                    'theme_location' => 'footer-nav', 
                    'container'=> '', 
                    'menu_id' => '',
                    'items_wrap' => '
                        <ul class="footer-nav">
                            %3$s
                        </ul>', 
                    ) ); 
                    ?>
                    </div>
                </div>
                <div class="info-container">
                    <div class="info-block">
                        Copyright &copy; 2021 Mission Healthcare. All rights Reserved. <span class="separator">|</span> Designed and developed by <a href="https://raindropmarketing.com/">Raindrop Marketing</a>
                    </div>
                </div>
            </section>
        </footer>
    </body>
</html>

