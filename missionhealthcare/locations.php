<?php

/*Template Name: Locations*/

get_header(); ?>

<main class="main main--default all-locations">
    <section class="section">
		<div class="heading">
			<h2><?php echo the_title(); ?></h2>
            <p>We serve locations across 7<?php echo the_field("states"); ?> states in the United States.</p>
			<a href="/all-locations/">View All States</a>
		</div>
	</section>
		<div class="map">
			<?php the_content(); ?>
		</div>
    
</main>

<?php get_footer();