<?php get_header();
/* Template Name: Leadership Archive Template */
?>
<?php $args = array(
    'p' => 2764,
    'post_type' => 'any'
);
$page_fields = new WP_Query($args);
if ($page_fields->have_posts()) : while ($page_fields->have_posts()) : $page_fields->the_post(); ?>
<?php // Check value exists.
        if (have_rows('modules')) :

            // Loop through rows.
            while (have_rows('modules')) : the_row();
                // Case: hero-banner layout.
                if (get_row_layout() == 'hero_banner') :
                    get_template_part('modules/hero-banner');
                endif;
            // End loop.
            endwhile;

        // No value.
        else :
        // Do something...
        endif;

    endwhile;
endif; ?>

<?php wp_reset_postdata(); ?>

<section class="section section--leadership">
    <div class="team-grid">
        <?php
        $args = array(
            'post_type' => 'leadership',
            'post_status' => 'publish',
            'orderby' => 'title',
            'order'   => 'ASC',
            'posts_per_page' => -1
        );

        $loop = new WP_Query($args);
        ?>
        <?php if ($loop->have_posts()) : ?>
            <div class="team-slider-2">

                <?php while ($loop->have_posts()) : $loop->the_post(); ?>

                    <div class="slide">
                        <?php the_post_thumbnail(); ?>
                    </div>

                <?php endwhile; ?>

            </div>
        <?php else : ?>

            <p>Sorry, no posts exist.</p>

        <?php endif; ?>
        <?php wp_reset_postdata(); ?>

        <?php
        $args = array(
            'post_type' => 'leadership',
            'post_status' => 'publish',
            'orderby' => 'title',
            'order'   => 'ASC',
            'posts_per_page' => -1
        );

        $loop = new WP_Query($args);
        ?>
        <?php if ($loop->have_posts()) : ?>
            <div class="team-slider">
                <?php while ($loop->have_posts()) : $loop->the_post(); ?>

                    <div class="slide">
                        <div class="image-wrapper"><?php the_post_thumbnail(); ?></div>
                        <a class="social" href="<?php the_field("social"); ?>" target="_blank"><img src="/wp-content/themes/missiontheme/assets/LI-icon.png" alt="linkedin"></a>
                        <div class="content">
                            <div class="name"><?php the_title(); ?></div>
                            <div class="title"><?php the_field("title"); ?></div>
                            <?php the_excerpt(); ?>
                            <a class="btn btn-primary" href="<?php the_permalink() ?>">Read Full Bio</a>
                        </div>
                    </div>

                <?php endwhile; ?>

            </div>
        <?php else : ?>

            <p>Sorry, no posts exist.</p>

        <?php endif; ?>
        <?php wp_reset_postdata(); ?>
    </div>
</section>

<?php get_footer(); ?>