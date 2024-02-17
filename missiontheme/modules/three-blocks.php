<section class="section section--three-blocks full-width">
<?php if( have_rows('blocks') ): $count=0; ?>
<?php $subheading = get_sub_field('subheading');
        if ($subheading) : ?>
            <div class="subheading"><?php echo $subheading; ?></div>
        <?php endif; ?>

        <?php $heading = get_sub_field('heading');
        if ($heading) : ?>
            <h3 class="heading"><?php echo $heading; ?></h3>
        <?php endif; ?>

        <?php $blurb = get_sub_field('blurb');
        if ($blurb) : ?>
            <div class="blurb"><?php echo $blurb; ?></div>
        <?php endif; ?>
    <div class="blocks">
        <?php while( have_rows('blocks') ) : the_row(); ?> 

            <?php $link = get_sub_field('link'); ?>
            <?php $bgimage = get_sub_field('bg_image'); ?>
            <?php $icon = get_sub_field('icon'); ?>
            <?php $title = get_sub_field('title'); ?>

            <a href="<?php echo $link ?>" class="block block-<? echo $count; ?>" style="background-image:url(<?php echo $bgimage ?>);">
                <div class="blue-overlay"></div>
                <img class="icon" src="<?php echo $icon ?>" alt="icon" />
                <div class="title"><?php echo $title ?></div>
            </a>

        <?php $count++; endwhile; ?>
    </div>
<?php else : endif; $i++;?>
</section>