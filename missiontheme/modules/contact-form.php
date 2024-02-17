<?php
if (get_sub_field('reverse')) {
    $reverse = "reverse";
} else {
    $reverse = "";
}
?>
<section class="section section--contact-form full-width no-padded-sides <?php echo $reverse; ?>">
    <div class="two-col">
     
                <div class="col">
                    <div class="section-wrapper">

                        <?php $subheading = get_sub_field('subheading');
                        if ($subheading) : ?>
                            <div class="subheading"><?php echo $subheading; ?></div>
                        <?php endif; ?>

                        <?php $heading = get_sub_field('heading');
                        if ($heading) : ?>
                            <h3 class="heading"><?php echo $heading; ?></h3>
                        <?php endif; ?>

                        <?php $blurb = get_sub_field('blurb');
                        if ($blurb) : ?>
                            <div class="blurb"><?php echo $blurb; ?></div>
                        <?php endif; ?>

                        <?php echo do_shortcode(get_sub_field('contact_form')); ?>

                    </div>
                </div>
     
                <div class="col">
                    <?php $image = get_sub_field('image');
                    if (($image)) : ?>
                        <div class="image-wrapper" style="background-image: url(<?php echo $image; ?>)">
                           
                        </div>
                    <?php endif; ?>

                </div>

    </div>
</section>