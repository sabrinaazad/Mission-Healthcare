<section class="section section--two-column-list">
    <div class="section-wrapper">
        <div class="content-wrapper">
            <?php if (get_sub_field("subheading")) : ?><div class="subheading"><?php the_sub_field("subheading"); ?></div><?php endif; ?>
            <?php if (get_sub_field("heading")) : ?><h2 class="heading"><?php the_sub_field("heading"); ?></h2><?php endif; ?>

            <?php $blurb = get_sub_field('blurb');
            if ($blurb) : ?>
                <?php echo $blurb; ?>
            <?php endif; ?>
        </div>
        <div class="list">
            <?php  if( have_rows('list') ): while( have_rows('list') ) : the_row(); ?>
            <div class="list-item">

                <?php $image = get_sub_field('image'); ?>
                <?php $title = get_sub_field('title'); ?>
                <?php $blurb = get_sub_field('blurb'); ?>

                <div class="image-wrapper">
                    <img src="<?php echo $image ?>" alt="logo" />
                </div>
                <div class="title"><?php echo $title ?></div>
                <div class="blurb"><?php echo $blurb ?></div>
            </div>
           
            <?php endwhile;  else :  endif; ?>
        </div>

    </div>
</section>