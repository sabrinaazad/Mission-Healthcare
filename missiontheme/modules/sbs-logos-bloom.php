<section class="section section--sbs-logos-bloom full-width" style="background-color: <?php the_sub_field("bgcolor"); ?>;">
<div class="content-wrapper">    
    <div class="two-col">
        <?php if (have_rows('left')) : while (have_rows('left')) : the_row(); ?>
            <div class="col">
                <div class="images-wrapper">
                    <?php if (have_rows('images')) : $count=0; while (have_rows('images')) : the_row(); ?>
                        <div class="image image-<?php echo $count ?>">
                            <img class="logo" src="<?php the_sub_field('image'); ?>" alt="logo" /> 
                        </div>
                    <?php $count++; endwhile; else : endif; ?>
                </div>
            </div>         
        <?php endwhile; else :  endif; ?>
        
        <?php if (have_rows('right')) : while (have_rows('right')) : the_row(); ?>
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
        
    </div>
</div>
</section>