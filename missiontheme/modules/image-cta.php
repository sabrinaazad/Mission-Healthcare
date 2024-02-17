<section class="section section--image-cta full-width no-padded-top no-padded-bottom no-padded-sides">
    <div class="two-col">
        <?php if (have_rows('left')) : while (have_rows('left')) : the_row(); ?>
                <div class="col">
                    <?php if( get_sub_field('featured_or_full') == 'Featured' ) { ?>
                        
                            <div class="image-wrapper featured"><img src="<?php echo the_sub_field("image"); ?>" alt="featured-image"></div>
                        
                    <? } elseif ( get_sub_field('featured_or_full') == 'Full' ) { ?>
                  
                            <div class="image-wrapper" style="background-image: url(<?php echo the_sub_field("image"); ?>);"></div>
                      
                    <? } ?>
                </div>
        <?php endwhile;
        else :  endif; ?>

        <?php if (have_rows('right')) : while (have_rows('right')) : the_row(); ?>
                <div class="col">
                    <div class="section-wrapper">

                        <?php $subheading = get_sub_field('subheading');
                        if ($subheading) : ?>
                            <div class="subheading"><?php echo $subheading; ?></div>
                        <?php endif; ?>

                        <?php $heading = get_sub_field('heading');
                        if ($heading) : ?>
                            <h2 class="heading"><?php echo $heading; ?></h2>
                        <?php endif; ?>

                        <?php $blurb = get_sub_field('blurb');
                        if ($blurb) : ?>
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
        <?php endwhile;
        else :  endif; ?>

    </div>
</section>