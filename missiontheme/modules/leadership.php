<section class="section section--leadership">
    <div class="section-wrapper">
        <div class="content-wrapper">
            <?php $subheading = get_sub_field('subheading');
            if ($subheading) : ?>
                <span class="subheading"><?php echo $subheading; ?></span>
            <?php endif; ?>

            <?php $heading = get_sub_field('heading');
            if ($heading) : ?>
                <h2 class="heading"><?php echo $heading; ?></h2>
            <?php endif; ?>

            <?php $blurb = get_sub_field('blurb');
            if( $blurb ): ?>
                <?php echo $blurb; ?>
            <?php endif; ?>
        </div>
        <div class="team-slider-2">
            <?php $teammembers = get_sub_field('leaders');
            if ($teammembers) : ?>
                <?php foreach ($teammembers as $post) :
                    setup_postdata($post); ?>
                    <div class="slide">
                        <?php the_post_thumbnail(); ?>
                    </div>
                <?php endforeach;
                wp_reset_postdata(); ?>
            <?php endif; ?>
        </div>

        <div class="team-slider">
            <?php $teammembers = get_sub_field('leaders');
            if ($teammembers) : ?>
                <?php foreach ($teammembers as $post) :
                    setup_postdata($post); ?>
                    <div class="slide">
                        <div class="image-wrapper">
                            <?php the_post_thumbnail(); ?>
                        </div>
                        <a class="social" href="<?php the_field("social"); ?>" target="_blank"><img src="/wp-content/themes/missiontheme/assets/LI-icon.png" alt="linkedin"></a>
                        <div class="content">
                            <div class="name"><?php the_title(); ?></div>
                            <div class="title"><?php the_field("title"); ?></div>
                            <?php the_excerpt(); ?>
                            <a class="btn btn-primary" href="<?php the_permalink() ?>">Read Full Bio</a>
                        </div>
                    </div>
                <?php endforeach;
                wp_reset_postdata(); ?>
            <?php endif; ?>
        </div>
    </div>
</section>