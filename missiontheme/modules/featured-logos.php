<section class="section section--featured-logos full-width" style="background-image: url(<?php the_sub_field("background_image"); ?>);">
    <div class="white-overlay"></div>
    <div class="section-wrapper">

            <?php if (get_sub_field("subheading")) : ?><div class="subheading"><?php the_sub_field("subheading"); ?></div><?php endif; ?>
            <?php if (get_sub_field("heading")) : ?><h1 class="heading"><?php the_sub_field("heading"); ?></h1><?php endif; ?>
            <?php if (get_sub_field("blurb")) : ?><div class="blurb"><?php the_sub_field("blurb"); ?></div><?php endif; ?>


            <div class="logos-wrapper">
                <?php if (have_rows('logos')) : $count=0; while (have_rows('logos')) : the_row(); ?>
                    <div class="logo-wrapper">
                        <img class="logo" src="<?php the_sub_field('logo'); ?>" alt="logo" /> 
                    </div>
                <?php $count++; endwhile; else : endif; ?>
            </div>
            <div class="footnote">
                <?php echo the_sub_field('footnote'); ?>
            </div>
        </div>
    </div>
</section>