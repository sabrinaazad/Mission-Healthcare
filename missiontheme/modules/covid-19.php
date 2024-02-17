<section class="section section--covid-19">
    <div class="section-wrapper">
    <div class="heading-wrapper">
        <?php $subheading = get_sub_field('subheading');
            if( $subheading ): ?>
                <div class="subheading"><?php echo $subheading; ?></div>
        <?php endif; ?>
        
        <?php $heading = get_sub_field('heading');
            if( $heading ): ?>
                <h2 class="heading"><?php echo $heading; ?></h2>
        <?php endif; ?>

        <?php $blurb = get_sub_field('blurb');
            if( $blurb ): ?>
                <?php echo $blurb; ?>
        <?php endif; ?>
    </div>
        <ul class="list">
            <?php if (have_rows('list')) : $count=0; while (have_rows('list')) : the_row(); ?>
                <li>
                    <div class="icon-wrapper">
                        <img src="<?php the_sub_field('icon'); ?>" alt="icon">
                    </div>
                    <div class="text-wrapper">
                    <div class="title"><?php the_sub_field('title'); ?></div>
                    <div class="blurb"><?php the_sub_field('text'); ?></div>
                    </div>
                </li>  
            <?php $count++; endwhile; else : endif; ?>
        </ul>
    </div>
</section>