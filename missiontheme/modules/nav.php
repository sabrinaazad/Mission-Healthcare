<div class="topbar desktop-only">
    <div class="content">
        <div class="phone"><a href="tel:<?php the_field("phone", "options"); ?>">Available 24/7<?php the_field("phone", "options"); ?></a></div>
        <div class="icon-wrapper">
            <a href="<?php the_field("ig", "option"); ?>"><img src="/wp-content/themes/missiontheme/assets/icon-igram.svg" alt="instagram" /></a>
            <a href="<?php the_field("fb", "option"); ?>"><img src="/wp-content/themes/missiontheme/assets/icon-fbook.svg" alt="facebook" /></a>
            <a href="<?php the_field("li", "option"); ?>"><img src="/wp-content/themes/missiontheme/assets/icon-lin.svg" alt="linkedin" /></a>
        </div>
        <div class="promo"><?php the_field("promo", "options"); ?></div>
        <?php echo do_shortcode('[gtranslate]'); ?>
        <div class="top-nav__drawer">

                <?php wp_nav_menu(array(
                    'theme_location' => 'top-nav',
                    'container' => '',
                    'items_wrap' => '
                        <div class="top-nav__container">
                        <ul class="top-nav">
                            %3$s
                        </ul></div>',
                    'menu_id' => 'topNav'
                ));
                ?>

                
            </div>
    </div>
</div>

<nav class="main-nav full-width" id="mainNav">
    <div class="sticky-wrapper">
        <div class="main-nav__wrapper">

            <div class="main-nav__logo">
                <a href="/">
                    <img src="/wp-content/themes/missiontheme/assets/mission-logo.png" alt="Logo" class="logo">
                </a>
            </div>

            <div class="main-nav__bar mobile-only">
                <button class="hamburger-button" id="hamburgerButton" aria-label="mobile-nav">
                    <div class="hamburger-button__bar--top"></div>
                    <div class="hamburger-button__bar--middle"></div>
                    <div class="hamburger-button__bar--bottom"></div>
                </button>
            </div>

            <div class="main-nav__drawer">

                <?php wp_nav_menu(array(
                    'theme_location' => 'primary-nav',
                    'container' => '',
                    'items_wrap' => '
                        <div class="primary-nav__container">
                        <ul class="primary-nav">
                            %3$s
                        </ul></div>',
                    'menu_id' => 'primaryNav',
                    'walker' => new Custom_Sublevel_Walker
                ));
                ?>
    
            </div>

        </div>
    </div>
</nav>
