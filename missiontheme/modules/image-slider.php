<section class="section section--image-slider full-width no-padded-sides">
 
        <div class="content-wrapper align--center">
            <?php $heading = get_sub_field('heading');
                if( $heading ): ?>
                    <h2 class="heading"><?php echo $heading; ?></h2>
            <?php endif; ?>
            
            <?php $subheading = get_sub_field('subheading');
                if( $subheading ): ?>
                    <h4 class="subheading"><?php echo $subheading; ?></h4>
            <?php endif; ?>

            <?php $blurb = get_sub_field('blurb');
                if( $blurb ): ?>
                    <?php echo $blurb; ?>
            <?php endif; ?>
        </div>
        <div class="image-slider">
        <?php if (have_rows('images')) : while (have_rows('images')) : the_row(); ?>
                <div class="slider">
                    <img class="image" src="<? echo the_sub_field('image'); ?>">
                </div>
        <?php endwhile; else : endif; ?>
        </div>

</section>