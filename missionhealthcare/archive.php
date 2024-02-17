<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package missionhealthcare
 */ 
?>
<?php get_header(); ?>
<section class="section--main">
    <aside id="secondary" class="aside blog">
        <div class="mobile-only expand-button">Recent posts and archives <i class="fa fa-caret-down"></i></div>
        <div class="expand-panel">
            <?php if ( is_active_sidebar( 'sidebar-2' ) ) : 
		    dynamic_sidebar( 'sidebar-2' );  endif; ?>
        </div>
    </aside>
    <main class="main main--default archive">
        <section class="section aligned--left">

        <h2 class="heading">Mission Healthcare Blog</h2>
        <div class="grid-wrap">
        <?php

            if (have_posts()):
                while (have_posts()): the_post(); ?>
                    <div class="grid">
                        <div class="img-wrap" style="background-image: url(<?php the_post_thumbnail_url(); ?>);"></div>
                        <div class="content">
                            <h4><a href="<?php echo get_permalink() ?>"><?php the_title(); ?></a></h4>
                            <span class="date"><?php echo get_the_date(); ?></span>
                            <?php the_excerpt(); ?>
                            <a href="<?php echo get_permalink() ?>" class="btn-primary">READ MORE</a>
                        </div>
                    </div>
                <?php 
                endwhile;
            endif;
    
            ?>
        </div>
        </section>
    </main>   
</section>
<?php get_footer(); ?>