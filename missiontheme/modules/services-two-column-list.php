<section class="section section--services-two-column-list section--two-column-list">
    <div class="section-wrapper">
        <div class="list">
            <?php $services = get_sub_field('services');
            if ($services) : ?>
                <?php foreach ($services as $post) :
                    setup_postdata($post); ?>
                    <div class="list-item">
                        <div class="image-wrapper">
                            <img src="<?php the_post_thumbnail_url() ?>" alt="logo" />
                        </div>
                        <div class="title"><?php the_title(); ?></div>
                        <div class="blurb"><?php the_excerpt(); ?></div>
                    </div>
                <?php endforeach;
                wp_reset_postdata(); ?>
            <?php endif; ?>
        </div>
</section>