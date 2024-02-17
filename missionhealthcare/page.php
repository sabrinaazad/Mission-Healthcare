<?php get_header(); ?>
<section class="section--main">
    <?php get_sidebar(); ?>
    <main class="main main--default">
        <section class="section aligned--left">
        <?php if (function_exists('the_breadcrumb')) the_breadcrumb(); ?>
            <?php the_content(); ?>
        </section>
    </main>   
</section>
<?php get_footer(); ?>