<section class="section section--statistics">
    <div class="section-wrapper">
        <?php if (get_sub_field("subheading")) : ?><div class="subheading"><?php the_sub_field("subheading"); ?></div><?php endif; ?>
        <?php if (get_sub_field("heading")) : ?><h2 class="heading"><?php the_sub_field("heading"); ?></h2><?php endif; ?>
        <div class="panels" id="counter">
            <?php if (have_rows('panels')) : $count=0; while (have_rows('panels')) : the_row(); ?>
                    <div id="counter<?php echo $count ?>" class="panel">
                        <img class="icon" src="<?php the_sub_field('icon'); ?>" alt="icon" /> 
                        <h3 class="number" data-value="<?php the_sub_field('number'); ?>">123</h3>
                        <div class="title"><?php the_sub_field('title'); ?></div>
                    </div>
            <?php $count++; endwhile;
            else : endif; ?>
        </div>
    </div>
</section>