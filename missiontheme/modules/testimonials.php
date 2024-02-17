<section class="section section--testimonials">
    <div class="section-wrapper">

        <?php $image = get_sub_field('featured_image');
        if (($image)) : ?>
            <div class="featured-image">
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            </div>
        <?php endif; ?>
        <div class="content-wrapper">
            <? if (get_sub_field('subheading')) : ?><div class="subheading"><? the_sub_field('subheading'); ?></div><? endif; ?>
            <? if (get_sub_field('heading')) : ?><h2 class="heading"><? the_sub_field('heading'); ?></h2><? endif; ?> 
            <? if (have_rows('slider')) : ?>
                <div class="testimonials-slider">
                    <? while (have_rows('slider')) : the_row(); ?>
                        <div class="slide">
                            <? if (get_sub_field('blurb')) : ?><div class="blurb"><? the_sub_field('blurb'); ?></div><? endif; ?>
                        </div>
                    <? endwhile; ?>
                </div>
            <? else : endif; ?>
        </div>
    </div>
</section>