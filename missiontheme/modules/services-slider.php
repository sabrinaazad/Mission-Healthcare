<section class="section section--services-slider full-width">

    <div class="section-wrapper">
        <div class="content">

            <?php $subheading = get_sub_field('subheading');
            if ($subheading) : ?>
                <span class="subheading"><?php echo $subheading; ?></span>
            <?php endif;

            $heading = get_sub_field('heading');
            if ($heading) : ?>
                <h2 class="heading"><?php echo $heading; ?></h2>
            <?php endif;

            $blurb = get_sub_field('blurb');
            if ($blurb) : ?>
                <?php echo $blurb; ?>
            <?php endif; ?>

        </div>
        <div class="services-slider">
            <?php $services = get_sub_field('services');
            if ($services) : ?>
                <?php foreach ($services as $post) :
                    setup_postdata($post); ?>
                    <div class="slide">
                        <div class="icon"><img src="<?php the_post_thumbnail_url() ?>" /></div>
                        <div class="title"><?php the_title(); ?></div>
                    </div>
                <?php endforeach;
                wp_reset_postdata(); ?>
            <?php endif; ?>
        </div>

        <?php $link = get_sub_field('button');
        if ($link) :
            $link_url = $link['url'];
            $link_title = $link['title'];
            $link_target = $link['target'] ? $link['target'] : '_self';
        ?>
            <a class="btn btn-primary" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
        <?php endif; ?>

</section>