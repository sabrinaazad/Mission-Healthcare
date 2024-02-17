<section class="section section--faqs">
    <div class="section-wrapper">
        <div class="heading-wrapper align--center">
            <?php $subheading = get_sub_field('subheading');
            if ($subheading) : ?>
                <div class="subheading"><?php echo $subheading; ?></div>
            <?php endif; ?>

            <?php $heading = get_sub_field('heading');
            if ($heading) : ?>
                <h2 class="heading"><?php echo $heading; ?></h2>
            <?php endif; ?>

            <?php $blurb = get_sub_field('blurb');
            if ($blurb) : ?>
                <?php echo $blurb; ?>
            <?php endif; ?>
        </div>
        <div class="faq-wrapper">
        <?php if (have_rows('faq')) : ?>
            
                <?php while (have_rows('faq')) : the_row(); ?>
                    <div class="faq">
                        <div class="question">
                            <div class="arrow-down"></div>
                            <?php the_sub_field("question") ?>
                        </div>
                        <div class="answer"><?php the_sub_field("answer") ?></div>
                    </div>
                <?php endwhile; ?>
            
        <?php else : endif; ?>
        </div>
    </div>
</section>