<nav class="main-nav full-width test" id="mainNav">
    <div class="sticky-wrapper sticky-margin">
        <div class="main-nav__wrapper">
         
            <div class="main-nav__logo">
                <a href="/">
                    <img src="/wp-content/themes/missionhealthcare/assets/mission_healthcare_logo.png" alt="Mission Healthcare Logo" class="logo" width="100%" height="auto" />
                </a>
            </div>
            
            <div class="main-nav__bar">
                <button class="hamburger-button" id="hamburgerButton" aria-label="mobile-nav">
                    <div class="hamburger-button__bar--top"></div>
                    <div class="hamburger-button__bar--middle"></div>
                    <div class="hamburger-button__bar--bottom"></div>
                </button>
            </div>

            <div class="main-nav__drawer">
      
                <?php wp_nav_menu( array( 
                    'theme_location' => 'primary-nav', 
                    'container'=> '', 
                    'items_wrap' => '
                        <div class="primary-nav__container">
                        <ul class="primary-nav" id="primaryNav">
                            %3$s
                        </ul></div>', 
                    'menu_id' => '') ); 
                ?>

                <div class="utility__drawer">
                    <?php  get_search_form(); ?>
                    <img src="/wp-content/themes/missionhealthcare/assets/search.svg" alt="Search Icon" class="search-icon mobile-only" width="auto" height="auto" />
                    <div class="social-icons">
                        <a href="https://www.facebook.com/HomeWithMission" target="_blank"><img src="/wp-content/themes/missionhealthcare/assets/facebook.svg" alt="Facebook" class="social-icon" width="auto" height="auto" /></a>
                        <a href="https://www.instagram.com/homewithmission/?hl=en" target="_blank"><img src="/wp-content/themes/missionhealthcare/assets/instagram.svg" alt="Instagram" class="social-icon" width="auto" height="auto" /></a>
                        <a href="https://www.youtube.com/channel/UC4igkV5yx7LLx315t9KgAsQ" target="_blank"><img src="/wp-content/themes/missionhealthcare/assets/youtube.svg" alt="Youtube" class="social-icon" width="auto" height="auto" /></a>
                        <a href="https://www.linkedin.com/company/homewithmission/" target="_blank"><img src="/wp-content/themes/missionhealthcare/assets/linkedin.svg" alt="Linkedin" class="social-icon" width="auto" height="auto" /></a>
                    </div>
                    <div class="searchbar-button__desktop">
                        <a href="#">Search<img src="/wp-content/themes/missionhealthcare/assets/search.svg" alt="Search Icon" class="search-icon" width="auto" height="auto" /></a>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="main-nav__overlay"></div>
    </div>
</nav>