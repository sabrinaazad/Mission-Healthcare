<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package missionhealthcare
 */

get_header();
?>
<section class="section--main">
    <aside id="secondary" class="aside blog">
	<div class="mobile-only expand-button">Recent posts and archives <i class="fa fa-caret-down"></i></div>
        <div class="expand-panel">
        <?php if ( is_active_sidebar( 'sidebar-2' ) ) : 
		dynamic_sidebar( 'sidebar-2' );  endif; ?>
		</div>
    </aside>

    <main class="main main--default single">
        <section class="section aligned--left">
            <?php
			while ( have_posts() ) :
				the_post();

					?>
					<h2><?php echo the_title(); ?></h2>
					<p><?php echo the_date(); ?></p>
					<?php
                    the_content();
                
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>
        </section>
    </main>
</section>

    <?php

get_footer();