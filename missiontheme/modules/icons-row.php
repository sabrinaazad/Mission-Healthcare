<section class="section section--icons-row full-width">
    <div class="section-wrapper">
        <div class="content-wrapper">
            <?php if (get_sub_field("subheading")) : ?><div class="subheading"><?php the_sub_field("subheading"); ?></div><?php endif; ?>
            <?php if (get_sub_field("heading")) : ?><h2 class="heading"><?php the_sub_field("heading"); ?></h2><?php endif; ?>
            <div class='underline-wrapper'>
                <img src='/wp-content/themes/missiontheme/assets/underline.svg' class="underline" />
            </div>

            <?php $blurb = get_sub_field('blurb');
            if ($blurb) : ?>
                <div class="blurb"><?php echo $blurb; ?></div>
            <?php endif; ?>
        </div>
        <div class="icons-wrapper">
        <?php if (have_rows('icons')) : while (have_rows('icons')) : the_row(); ?>
                <div class="content">
                    <img class="icon" src="<? echo the_sub_field('icon'); ?>">
                    <div class="title"><? echo the_sub_field('title'); ?></div>
                </div>
        <?php endwhile; else : endif; ?>
        </div>
        <?php $button = get_sub_field('button');
        if ($button) :
            $button_url = $button['url'];
            $button_title = $button['title'];
            $button_target = $button['target'] ? $button['target'] : '_self';
        ?>
            <div class="button-wrapper">
                <a class="btn btn-white" href="<?php echo esc_url($button_url); ?>" target="<?php echo esc_attr($button_target); ?>"><?php echo esc_html($button_title); ?></a>
            </div>
        <?php endif; ?>
    </div>


</section>