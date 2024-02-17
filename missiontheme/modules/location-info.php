<section class="section section--location-info full-width"  style="background-image: url(<?php echo the_sub_field("bg_image"); ?>);">    
    <div class="hero">
    <?php if (get_sub_field("subheading")) : ?><div class="subheading"><?php the_sub_field("subheading"); ?></div><?php endif; ?>
            <?php if (get_sub_field("heading")) : ?><h1 class="heading"><?php the_sub_field("heading"); ?></h1><?php endif; ?>
            <div class='underline-wrapper'>
                <img src='/wp-content/themes/missiontheme/assets/underline.svg' class="underline" />
            </div>
            <?php if (get_sub_field("hero_blurb")) : ?><div class="blurb"><?php the_sub_field("hero_blurb"); ?></div><?php endif; ?>
    </div>
    <div class="section-wrapper">
        <?php if( have_rows('location_info') ): ?>
            <?php while( have_rows('location_info') ): the_row(); ?>
                <div class="panels">
                    <div class="panel">
                        <div class="icon"><img src="/wp-content/themes/missiontheme/assets/icon-phone.png" /></div>
                        <?php 
                        $phone = get_sub_field('phone');
                        $fax = get_sub_field('fax'); 
                        ?>
                        <?php if ($phone) : ?>
                            <div><span class="title">Office</span><a href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a></div>
                        <?php endif; ?>
                        <?php if ($fax) : ?>
                            <div><span class="title">Fax</span><?php echo $fax; ?></div>
                        <?php endif; ?>
                        <a href="tel:<?php echo $phone; ?>" class="btn btn-primary">Call Now</a>
                    </div>
                    <div class="panel">
                        <div class="icon"><img src="/wp-content/themes/missiontheme/assets/icon-address.png" /></div>
                        <?php 
                        $address1 = get_sub_field('address_1');
                        $suite = get_sub_field('suite');
                        $address2 = get_sub_field('address_2');
                        $directions = get_sub_field('directions'); 
                        ?>
                        <div class="address">
                            <span class="title">Address</span>
                            <div><?php echo $address1; ?></div>
                            <div><?php echo $suite; ?></div>
                            <div><?php echo $address2; ?></div>
                        </div>
                        <a href="<?php echo $directions; ?>" class="btn btn-primary">Get Directions</a>
                    </div>
                    <div class="panel">
                        <div class="icon"><img src="/wp-content/themes/missiontheme/assets/icon-hours.png" /></div>
                        <span class="title">Immediate 24/7 Support Available Including Nights, Weekends and Holidays</span>
                        <div class="hours">
                            <?php
                            $monday = get_sub_field('monday');
                            $tuesday = get_sub_field('tuesday');
                            $wednesday = get_sub_field('wednesday');
                            $thursday = get_sub_field('thursday');
                            $friday = get_sub_field('friday');
                            $saturday = get_sub_field('saturday');
                            $sunday = get_sub_field('sunday');
                            ?>

                            <div><span class="title inline">Monday: </span> <?php echo $monday; ?></div>
                            <div><span class="title inline">Tuesday: </span> <?php echo $tuesday; ?></div>
                            <div><span class="title inline">Wednesday: </span> <?php echo $wednesday; ?></div>
                            <div><span class="title inline">Thursday: </span> <?php echo $thursday; ?></div>
                            <div><span class="title inline">Friday: </span> <?php echo $friday; ?></div>
                            <div><span class="title inline">Saturday: </span> <?php echo $saturday; ?></div>
                            <div><span class="title inline">Sunday: </span> <?php echo $sunday; ?></div>
                        </div>
                    </div>
                    <div class="panel">
                        <div class="icon"><img src="/wp-content/themes/missiontheme/assets/icon-clock.png" /></div>
                        <?php 
                        $blurb = get_sub_field('blurb');
                        $getstarted = get_sub_field('get_started'); 
                        ?>
                        <span class="title">Refer a Patient</span>
                        <div><?php echo $blurb; ?></div>
                        <a href="<?php echo $getstarted; ?>" class="btn btn-primary">Get Started</a>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?> 
    </div>
</section>