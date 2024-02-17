<?php
if (get_sub_field('white')) {
    $white = "white";
} else {
    $white = "";
}
?>
<?php
if (get_sub_field('padding')) {
    $padding = "padding";
} else {
    $padding = "";
}
?>
<section class="section section--banner-cta full-width <?php echo $white; ?> <?php echo $padding; ?>" style="background-image:url(<?php echo the_sub_field('background_image'); ?>);background-color:<?php echo the_sub_field('background_color'); ?>;">
    <div class="section-wrapper">
        
        <?php $subheading = get_sub_field('subheading');
            if( $subheading ): ?>
                <div class="subheading"><?php echo $subheading; ?></div>
        <?php endif; ?>
        
        <?php $heading = get_sub_field('heading');
            if( $heading ): ?>
                <h2 class="heading"><?php echo $heading; ?></h2>
        <?php endif; ?>

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
</section>