<?php
if (get_sub_field('hide')) {
    $hide = "hide";
} else {
    $hide = "";
}
?>
<?php
if (get_sub_field('lines')) {
    $lines = "lines";
} else {
    $lines = "";
}
?>
<?php
if (get_sub_field('font')) {
    $font = "font";
} else {
    $font = "";
}
?>
<section class="section section--four-icons full-width" style="background-color:<?echo the_sub_field("background_color"); ?> ;">
    <div class="section-wrapper">
        <div class="content-wrapper">
            <?php if (get_sub_field("subheading")) : ?><div class="subheading"><?php the_sub_field("subheading"); ?></div><?php endif; ?>
            <?php if (get_sub_field("heading")) : ?><h2 class="heading"><?php the_sub_field("heading"); ?></h2><?php endif; ?>
            <div class='underline-wrapper <?php echo $hide?>'>
                <img src='/wp-content/themes/missiontheme/assets/underline.svg' class="underline" />
            </div>
            <?php $blurb = get_sub_field('blurb');
            if ($blurb) : ?>
                <div class="blurb"><?php echo $blurb; ?></div>
            <?php endif; ?>
        </div>
        <div class="icons-wrapper <?php echo $lines; ?> <?php echo $font; ?> ">
            <?php if (have_rows('icons')) : while (have_rows('icons')) : the_row(); ?>
                <div class="content">
                    <img class="icon" src="<? echo the_sub_field('icon'); ?>">
                    <div class="title"><? echo the_sub_field('title'); ?></div>
                    <div class="blurb" style="color: <?php echo the_sub_field("blurb_color") ?>;"><? echo the_sub_field('blurb'); ?></div>
                </div>
            <?php endwhile; else : endif; ?>
        </div>
    </div>
</section>