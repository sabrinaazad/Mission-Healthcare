<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package missionhealthcare
 */

get_header(); ?>
<section class="section--main">
    <aside id="secondary" class="aside">
        <?php if ( is_active_sidebar( 'sidebar-1' ) ) : 
		dynamic_sidebar( 'sidebar-1' );  endif; ?>
    </aside>
    <main class="main main--default">
        <section class="error-404 not-found section">
            <header class="page-header">
                <h1 class="page-title">
                    <?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'missionhealthcare' ); ?></h1>
            </header>

            <div class="page-content">
                <p><?php esc_html_e( 'Sorry, but nothing matched your search criteria.', 'missionhealthcare' ); ?></p>

                <?php get_search_form(); ?>

            </div>
        </section>
    </main>
</section>
<?php get_footer();