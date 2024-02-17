<section class="section section--positions-slider full-width">

    <div class="section-wrapper">
        <div class="content">

            <?php $subheading = get_sub_field('subheading');
            if ($subheading) : ?>
                <span class="subheading"><?php echo $subheading; ?></span>
            <?php endif;

            $heading = get_sub_field('heading');
            if ($heading) : ?>
                <h2 class="heading"><?php echo $heading; ?></h2>
            <?php endif;

            $blurb = get_sub_field('blurb');
            if ($blurb) : ?>
                <?php echo $blurb; ?>
            <?php endif; ?>

        </div>
        <div class="positions-slider">
            <?php if (have_rows('positions')) : while (have_rows('positions')) : the_row(); ?>
                <?php if (get_sub_field("link")) : ?>
                <a class="slide" href="<?php the_sub_field("link"); ?>">
                    <div class="icon"><img src="<?php echo the_sub_field("icon") ?>" /></div>
                    <div class="title"><?php echo the_sub_field("title") ?></div>
                </a>
                <? else: ?>
                <div class="slide">
                    <div class="icon"><img src="<?php echo the_sub_field("icon") ?>" /></div>
                    <div class="title"><?php echo the_sub_field("title") ?></div>
                </div>
                <?php endif; ?>
             <?php endwhile; else : endif; ?>
        </div>

        <?php $link = get_sub_field('button');
        if ($link) :
            $link_url = $link['url'];
            $link_title = $link['title'];
            $link_target = $link['target'] ? $link['target'] : '_self';
        ?>
            <a class="btn btn-primary" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
        <?php endif; ?>

</section>