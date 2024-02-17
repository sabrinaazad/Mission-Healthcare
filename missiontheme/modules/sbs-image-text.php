<?php
if (get_sub_field('reverse')) {
    $reverse = "reverse";
} else {
    $reverse = "";
}
?>
<section class="section section--sbs-image-text full-width no-padded-sides <?php echo $reverse; ?>" style="background-color: <?php echo the_sub_field("bg_color"); ?>">
    <div class="two-col">
        <?php if (have_rows('left')) : while (have_rows('left')) : the_row(); ?>
            <div class="col">
                <div class="image-wrapper" style="background-image: url(<?php the_sub_field('image'); ?>)"></div>
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

                    <div class="button-wrapper">
                        <?php $button1 = get_sub_field('button1');
                        if ($button1) :
                            $button1_url = $button1['url'];
                            $button1_title = $button1['title'];
                            $button1_target = $button1['target'] ? $button1['target'] : '_self';
                        ?>
                        <a class="btn btn-primary" href="<?php echo esc_url($button1_url); ?>" target="<?php echo esc_attr($button1_target); ?>"><?php echo esc_html($button1_title); ?></a>
                        <?php endif; ?>
                        <?php $button2 = get_sub_field('button2');
                        if ($button2) :
                            $button2_url = $button2['url'];
                            $button2_title = $button2['title'];
                            $button2_target = $button2['target'] ? $button2['target'] : '_self';
                        ?>
                        <a class="btn btn-primary" href="<?php echo esc_url($button2_url); ?>" target="<?php echo esc_attr($button2_target); ?>"><?php echo esc_html($button2_title); ?></a>
                        <?php endif; ?>
                    </div>
                    
                </div>   
        </div>         
        <?php endwhile; else :  endif; ?>
        
    </div>
</section>