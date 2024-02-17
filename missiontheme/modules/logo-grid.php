<div class="section section--logo-grid">
    <div class="section-wrapper">
        <div class="content-wrapper align--center">
            <?php if (get_sub_field("subheading")) : ?><div class="subheading"><?php the_sub_field("subheading"); ?></div><?php endif; ?>
            <?php if (get_sub_field("heading")) : ?><h2 class="heading"><?php the_sub_field("heading"); ?></h2><?php endif; ?>
            <?php if (get_sub_field("blurb")) : ?><div class="blurb"><?php the_sub_field("blurb"); ?></div><?php endif; ?>
        </div>
        <div class="grid">
            <?php  if( have_rows('grid') ): while( have_rows('grid') ) : the_row(); ?>
            <div class="grid-item">

                <?php $image = get_sub_field('image'); ?>
                <?php $title = get_sub_field('title'); ?>
                <div class="image-wrapper">
                    <img src="<?php echo $image ?>" alt="logo" />
                </div>
                    <div class="title"><?php echo $title ?></div>
            </div>
           
            <?php endwhile;  else :  endif; ?>
        </div>
    </div>
</div>
</div>