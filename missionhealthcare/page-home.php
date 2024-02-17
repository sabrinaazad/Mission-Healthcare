<?php

/*Template Name: Home*/

get_header(); ?>

<main class="main main--home">
    <section class="section full-width no-pad section--hero">
    <?php if( have_rows('home_hero_slider') ): ?>
        <div class="hero--slider__wrapper">
            <div class="hero--slider">
            <?php while( have_rows('home_hero_slider') ) : the_row();

                $backgroundimage = get_sub_field('bg_image');
                $heading = get_sub_field('heading');
                $subheading = get_sub_field('subheading');
                $image = get_sub_field('image');
                $link = get_sub_field('link');
        
            ?>
                <div class="slide" style="background-image: url(<?php echo $backgroundimage; ?>)">
                    <div class="content">
                        <?php if( $heading ): ?><h3><?php echo $heading; ?></h3><?php endif; ?>
                        <?php if( $subheading ): ?><h5><?php echo $subheading; ?></h5><?php endif; ?>
                        <?php if( $image ): ?>
                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="logo" width="auto" height="auto" />
                        <?php endif; ?> 
                        <?php if( $link ): 

                            $link_url = $link['url'];
                            $link_title = $link['title'];
                            $link_target = $link['target'] ? $link['target'] : '_self';

                        ?>
                            <a class="link inverse" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endwhile; ?>
            </div>
        </div>
    <?php else : endif; ?>
    </section>

    <section class="section section--content full-width">
        
        <?php if ( have_rows( 'threecolumns' ) ) : 
            while ( have_rows('threecolumns') ) : the_row(); ?>
        
        <div class="three-column-panels__floating max-width">
            
            <?php $heading = get_sub_field('heading'); ?>
            <div class="heading"><?php echo $heading; ?></div>
            <?php if ( have_rows( 'threecolumns_panel' ) ) : ?>
            <div class="three-columns">
                <?php while( have_rows('threecolumns_panel') ) : the_row();

                $backgroundimage = get_sub_field('bg_image');
                $text = get_sub_field('text');
                $link = get_sub_field('link'); 
        
                ?>
                <div class="panel" style="background-image: url(<?php echo esc_url( $backgroundimage ); ?>)">
                    <div class="content">
                    <?php if( $text ): ?><p><?php echo esc_html( $text ); ?></p><?php endif; ?>
                        <?php if( $link ): 

                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self';

                        ?>
                        <a class="btn-primary" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                        <?php else : endif; ?>
                    </div>     
                </div>
                <?php endwhile; ?>
            </div>
            <?php else : endif; ?>
        </div>
        <?php endwhile; ?>
        <?php else : endif; ?>

        <div class="four-column-panels max-width">
        <?php if ( have_rows( 'fourcolumns' ) ) : ?>
            <div class="four-columns">
                <?php while( have_rows('fourcolumns') ) : the_row();

                $heading = get_sub_field('heading');
                $text = get_sub_field('text');
                $link = get_sub_field('link'); 
                $image = get_sub_field('image');
                $videoclass = get_sub_field('videoclass');
                ?>
                <div class="panel">
                    <div class="content">
                    <?php if( $heading ): ?><h4><?php echo esc_html( $heading ); ?></h4><?php endif; ?>
                    <?php if( $image ): ?>
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="<?php echo esc_html( $videoclass ); ?>" width="auto" height="auto" loading="lazy" />
                    <?php endif; ?> 
                    <?php if( $text ): ?><p><?php echo esc_html( $text ); ?></p><?php endif; ?>
                    <?php if( $link ): 

                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self';

                        ?>
                        <a class="link" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                        <?php else : endif; ?>
                    </div>     
                </div>
                <?php endwhile; ?>
            </div>
            <?php else : endif; ?>
                <?php echo do_shortcode('[wp-video-popup video="https://vimeo.com/50409565"]')?>
        </div>
    </section>
</main>

<?php get_footer(); ?>