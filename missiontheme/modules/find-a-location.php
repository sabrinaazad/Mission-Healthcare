<section class="section section--find-a-location full-width">
    <div class="two-col">
        <?php if (have_rows('left')) : while (have_rows('left')) : the_row(); ?>
            <div class="col">
                <div class="section-wrapper">

                    <?php if (get_sub_field("subheading")) : ?><div class="subheading"><?php the_sub_field("subheading"); ?></div><?php endif; ?>
                    <?php if (get_sub_field("heading")) : ?><h2 class="heading"><?php the_sub_field("heading"); ?></h2><?php endif; ?>
                    <div class='underline-wrapper'>
                        <img src='/wp-content/themes/missiontheme/assets/underline.svg' class="underline" />
                    </div>

                    <?php $blurb = get_sub_field('blurb');
                    if( $blurb ): ?>
                        <?php echo $blurb; ?>
                    <?php endif; ?>
                    
                    <?php $button = get_sub_field('button');
                    if ($button) :
                        $button_url = $button['url'];
                        $button_title = $button['title'];
                        $button_target = $button['target'] ? $button['target'] : '_self';
                    ?>
                    <div class="button-wrapper">
                        <a class="btn btn-white" href="<?php echo esc_url($button_url); ?>" target="<?php echo esc_attr($button_target); ?>"><?php echo esc_html($button_title); ?></a>
                    </div>
                    <?php endif; ?>
                </div>   
            </div>           
        <?php endwhile; else :  endif; ?>
        
        <?php if (have_rows('right')) : while (have_rows('right')) : the_row(); ?>
        <div class="col">
        <div class="map-wrapper"> <img class="map" src="<?php the_sub_field('map'); ?>" alt="map" />  </div>
                <div class="pin-wrapper"> 
                    <img class="pin one" alt="pin" src="/wp-content/themes/missiontheme/assets/pin.png" />
                    <img class="pin two" alt="pin" src="/wp-content/themes/missiontheme/assets/pin.png" />
                    <img class="pin three" alt="pin" src="/wp-content/themes/missiontheme/assets/pin.png" />
                    <img class="pin four" alt="pin" src="/wp-content/themes/missiontheme/assets/pin.png" />
                    <img class="pin five" alt="pin" src="/wp-content/themes/missiontheme/assets/pin.png" />
                    <img class="pin six" alt="pin" src="/wp-content/themes/missiontheme/assets/pin.png" />
                    <img class="pin seven" alt="pin" src="/wp-content/themes/missiontheme/assets/pin.png" />
                    <img class="pin eight" alt="pin" src="/wp-content/themes/missiontheme/assets/pin.png" />
                    <img class="pin nine" alt="pin" src="/wp-content/themes/missiontheme/assets/pin.png" />
                    <img class="pin ten" alt="pin" src="/wp-content/themes/missiontheme/assets/pin.png" />
                    <img class="pin eleven" alt="pin" src="/wp-content/themes/missiontheme/assets/pin.png" />
                    <img class="pin twelve" alt="pin" src="/wp-content/themes/missiontheme/assets/pin.png" />
                    <img class="pin thirteen" alt="pin" src="/wp-content/themes/missiontheme/assets/pin.png" />
                    <img class="pin fourteen" alt="pin" src="/wp-content/themes/missiontheme/assets/pin.png" />
                    <img class="pin fifteen" alt="pin" src="/wp-content/themes/missiontheme/assets/pin.png" />
                    <img class="pin sixteen" alt="pin" src="/wp-content/themes/missiontheme/assets/pin.png" />
                    <img class="pin seventeen" alt="pin" src="/wp-content/themes/missiontheme/assets/pin.png" />
                    <img class="pin eighteen" alt="pin" src="/wp-content/themes/missiontheme/assets/pin.png" />
                    <img class="pin nineteen" alt="pin" src="/wp-content/themes/missiontheme/assets/pin.png" />
                    <img class="pin twenty" alt="pin" src="/wp-content/themes/missiontheme/assets/pin.png" />
                    <img class="pin twentyone" alt="pin" src="/wp-content/themes/missiontheme/assets/pin.png" />
                    <img class="pin twentytwo" alt="pin" src="/wp-content/themes/missiontheme/assets/pin.png" />
                    <img class="pin twentythree" alt="pin" src="/wp-content/themes/missiontheme/assets/pin.png" />
                    <img class="pin twentyfour" alt="pin" src="/wp-content/themes/missiontheme/assets/pin.png" />
                    <img class="pin twentyfive" alt="pin" src="/wp-content/themes/missiontheme/assets/pin.png" />
                    <img class="pin twentysix" alt="pin" src="/wp-content/themes/missiontheme/assets/pin.png" />
                    <img class="pin twentyseven" alt="pin" src="/wp-content/themes/missiontheme/assets/pin.png" />
                    <img class="pin twentyeight" alt="pin" src="/wp-content/themes/missiontheme/assets/pin.png" />
                    <img class="pin twentynine" alt="pin" src="/wp-content/themes/missiontheme/assets/pin.png" />
                    <img class="pin thirty" alt="pin" src="/wp-content/themes/missiontheme/assets/pin.png" />
                    <img class="pin thirtyone" alt="pin" src="/wp-content/themes/missiontheme/assets/pin.png" />
                    <img class="pin thirtytwo" alt="pin" src="/wp-content/themes/missiontheme/assets/pin.png" />
                    <img class="pin thirtythree" alt="pin" src="/wp-content/themes/missiontheme/assets/pin.png" />
                    <img class="pin thirtyfour" alt="pin" src="/wp-content/themes/missiontheme/assets/pin.png" />
                    <img class="pin thirtyfive" alt="pin" src="/wp-content/themes/missiontheme/assets/pin.png" />
                    <img class="pin thirtysix" alt="pin" src="/wp-content/themes/missiontheme/assets/pin.png" />
                    <img class="pin thirtyseven" alt="pin" src="/wp-content/themes/missiontheme/assets/pin.png" />
                    <img class="pin thirtyeight" alt="pin" src="/wp-content/themes/missiontheme/assets/pin.png" />
                    <img class="pin thirtynine" alt="pin" src="/wp-content/themes/missiontheme/assets/pin.png" />
                    <img class="pin forty" alt="pin" src="/wp-content/themes/missiontheme/assets/pin.png" />


                </div>
            </div>        
        <?php endwhile; else :  endif; ?>
        
    </div>
</section>