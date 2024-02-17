<?php
 /* Template Name: Contact Template */
get_header();

?>

<section class="section section--hero_banner full-width">
    <div class="section-wrapper">
        <h1 class="heading align--center"><?php the_field("hero_heading"); ?></h1>
    </div>
</section>

<main class="content-wrapper">
    <section class="section section--contact-info full-width">
        <div class="section-wrapper">
            <div class="panels">
              
				<div class="map-wrapper">
					<iframe src="<?php echo the_field("map")?>" width="100%" height="350px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
				</div>
		
                <div class="title uppercase">MISSION HEALTHCARE CORPORATE OFFICE</div>

                <div class="panel">
                    <img src="/wp-content/themes/missiontheme/assets/icon-location.png" alt="location icon" />
                    <div class="content">
                        <?php the_field("address"); ?>
                    </div>
                </div>

                <div class="panel">
                    <img src="/wp-content/themes/missiontheme/assets/icon-phone-number.png" alt="phone icon" />
                    <div class="content">
                        <a href="tel:<?php the_field("phone"); ?>"><?php the_field("phone"); ?></a>
                    </div>
                </div>
                
                <div class="panel">
                    <img src="/wp-content/themes/missiontheme/assets/icon-fax-machine.png" alt="fax icon" />
                    <div class="content">
                        <a href="tel:<?php the_field("fax"); ?>"><?php the_field("fax"); ?></a>
                    </div>
                </div>
                
                <div class="panel">
                    <img src="/wp-content/themes/missiontheme/assets/icon-email.png" alt="email icon" />
                    <div class="content">
                        <a href="mailto:<?php the_field("email"); ?>"><?php the_field("email"); ?></a>
                    </div>
                </div>
                
                <div class="title">To reach one of our local offices, please visit the locations page:</div>
                
                <div class="btn-wrapper"><a href="/all-locations/" class="btn btn-white">Find a Location</a></div>

                <div class="panel">
                    <div class="content">
                        <span class="title uppercase">General</span>
                        <?php if (have_rows('general')) : ?>
                        <div class="location-wrapper">
                            <?php while (have_rows('general')) : the_row(); ?>
                                <div class="location">
                                    <img src="/wp-content/themes/missiontheme/assets/icon-email.png" alt="email icon" />
                                    <div class="content">
                                        <div class="label"><?php the_sub_field("title"); ?></div>
                                        <a class="email" href="mailto:<?php the_sub_field("email"); ?>"><?php the_sub_field("email"); ?></a>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    <?php else : endif; ?>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="section section--form">
        <div class="section-wrapper">
            <div class="subheading"><?php the_field("form_subheading"); ?></div>
            <h2 class="heading-alt"><?php the_field("form_heading"); ?></h2>
            <p><?php the_field("form_blurb"); ?></p>
            <?php echo do_shortcode('[gravityform id="1" title="false" description="false" ajax="true" tabindex="49"]'); ?>
        </div>
    </section>
</main>
<?php

get_footer();
