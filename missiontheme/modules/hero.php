<section class="section section--hero full-width" style="background-image: url(<?php the_sub_field("background_image"); ?>);">
    <div class="white-overlay"></div>
    <div class="section-wrapper">
        <div class="content">
            <?php if (get_sub_field("subheading")) : ?><div class="subheading"><?php the_sub_field("subheading"); ?></div><?php endif; ?>
            <?php if (get_sub_field("heading")) : ?><h1 class="heading"><?php the_sub_field("heading"); ?></h1><?php endif; ?>
            <div class='underline-wrapper'>
                <img src='/wp-content/themes/missiontheme/assets/underline.svg' class="underline" />
            </div>
            <?php if (get_sub_field("blurb")) : ?><div class="blurb"><?php the_sub_field("blurb"); ?></div><?php endif; ?>
            <div class="button-wrapper">
                <?php $link1 = get_sub_field('button1');
                if ($link1) :
                    $link1_url = $link1['url'];
                    $link1_title = $link1['title'];
                    $link1_target = $link1['target'] ? $link1['target'] : '_self';
                ?>
                    <a class="btn btn-primary" href="<?php echo esc_url($link1_url); ?>" target="<?php echo esc_attr($link1_target); ?>"><?php echo esc_html($link1_title); ?></a>
                <?php endif; ?>
                <?php $link2 = get_sub_field('button2');
                if ($link2) :
                    $link2_url = $link2['url'];
                    $link2_title = $link2['title'];
                    $link2_target = $link2['target'] ? $link2['target'] : '_self';
                ?>
                    <a class="btn btn-primary" href="<?php echo esc_url($link2_url); ?>" target="<?php echo esc_attr($link2_target); ?>"><?php echo esc_html($link2_title); ?></a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>