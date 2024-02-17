<section class="section section--instagram full-width">

    <div class="section-wrapper align--center">

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

        <div class="feed"><?php echo do_shortcode(get_sub_field('shortcode')); ?></div>

    </div>
</section>