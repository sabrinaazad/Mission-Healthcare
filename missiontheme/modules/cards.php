<section class="section section--cards">
    <div class="white-overlay"></div>
    <div class="section-wrapper">
        <div class="content-wrapper">
            <?php if (get_sub_field("subheading")) : ?><div class="subheading"><?php the_sub_field("subheading"); ?></div><?php endif; ?>
            <?php if (get_sub_field("heading")) : ?><h1 class="heading"><?php the_sub_field("heading"); ?></h1><?php endif; ?>
            <?php if (get_sub_field("blurb")) : ?><div class="blurb"><?php the_sub_field("blurb"); ?></div><?php endif; ?>
        </div>

            <div class="cards-slider">
                <?php if (have_rows('cards')) : $count=0; while (have_rows('cards')) : the_row(); ?>
                    <div class="card">
                        <?php if (get_sub_field("title")) : ?><div class="title"><?php the_sub_field('title'); ?></div><?php endif; ?>
                        <?php if (get_sub_field("blurb")) : ?><div class="blurb"><?php the_sub_field('blurb'); ?></div><?php endif; ?>
                        <?php $button = get_sub_field('button');
                        if ($button) :
                            $button_url = $button['url'];
                            $button_title = $button['title'];
                            $button_target = $button['target'] ? $button['target'] : '_self';
                        ?>
                        <div class="button-wrapper">
                            <a class="btn btn-primary" href="<?php echo esc_url($button_url); ?>" target="<?php echo esc_attr($button_target); ?>"><?php echo esc_html($button_title); ?></a>
                        </div>
                        <?php endif; ?>
                    </div>
                <?php $count++; endwhile; else : endif; ?>
            </div>
        </div>
    </div>
</section>