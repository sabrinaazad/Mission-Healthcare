<?php get_header(); ?>
<section class="section--leader">
    <div class="section-wrapper">
        <div class="single">
            <?php while (have_posts()) : the_post(); ?>
                <input class="btn-back desktop-only" type="button" onclick="javascript:history.back();return false;" value="<< Back">
                <div class="image-wrapper"><?php the_post_thumbnail(); ?></div>
                <a class="social" href="<?php the_field("social"); ?>" target="_blank"><img src="/wp-content/themes/missiontheme/assets/LI-icon.png" alt="linkedin"></a>
                <h1 class="name"><?php the_title(); ?></h1>
                <div class="content">
                    <div class="title"><?php the_field("title"); ?></div>
                </div>
                <?php the_field("bio"); ?>
            <?php endwhile; ?>
        </div>
    </div>
</section>
<?php get_footer(); ?>