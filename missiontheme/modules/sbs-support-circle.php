<section class="section section--sbs-support-circle full-width" style="background-color: <?php echo the_sub_field("bg_color"); ?>;">
    <div class="two-col section-wrapper">
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
                        <a class="btn btn-primary" href="<?php echo esc_url($button_url); ?>" target="<?php echo esc_attr($button_target); ?>"><?php echo esc_html($button_title); ?></a>
                    </div>
                    <?php endif; ?>
                </div>   
            </div>        
        <?php endwhile; else :  endif; ?>
        
        <?php if (have_rows('right')) : while (have_rows('right')) : the_row(); ?>
              
            <div class="col">
                <div class="support-wrapper">
                    <div class="blue-wrapper">
                        Family
                        <div class="main-circle">
                            <? echo the_sub_field('middle_circle'); ?>
                        </div>
                        Friends
                    </div>
                    <?php if (have_rows('support')) : $count=0; while (have_rows('support')) : the_row(); ?>
                        <div class="support circle-<?php echo $count ?>">
                            <div class="title"><? echo the_sub_field('title'); ?></div>
                            <div class="blurb"><? echo the_sub_field('blurb'); ?></div>
                        </div>
                    <?php $count++; endwhile; else : endif; ?>
                </div>
            </div>      
            
        <?php endwhile; else :  endif; ?>
        
    </div>
</section>