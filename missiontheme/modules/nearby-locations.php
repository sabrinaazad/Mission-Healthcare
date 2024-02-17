<section class="section section--nearby-locations">
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
        <div class="locations-slider panels">
            <?php $locations = get_sub_field('nearby_locations');
            if ($locations) : ?>
                <?php foreach ($locations as $post) :
                    setup_postdata($post); ?>
                    <div class="panel">
                        <?php if (have_rows('modules')) :
                      
                            while (have_rows('modules')) : the_row(); ?>
                            
                            <?php if (have_rows('location_info')) :
                      
                                while (have_rows('location_info')) : the_row(); ?>
                                <?php
                                    $address1 = get_sub_field('address_1');
                                    $suite = get_sub_field('suite');
                                    $address2 = get_sub_field('address_2');
                                    $phone = get_sub_field('phone');
                                    $fax = get_sub_field('fax');
                                ?>
                                <div class="logo-wrapper">
                                    <img src="<?php echo the_post_thumbnail_url() ?>" alt="logo" />
                                </div>
                                <h5><?php the_title(); ?></h5>
                                <div class="text-wrapper">
                                    <div><?php echo $address1; ?> <?php echo $suite; ?></div>
                                    <div><?php echo $address2; ?></div>
                                </div>
                                <div class="wrap">
                                    <?php if ($phone) : ?>
                                        <div class="office-wrapper">
                                            <img src="/wp-content/uploads/2021/09/Icon-phone.png" alt="phone icon">
                                            <span>OFFICE</span>
                                            <a href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a>
                                        </div>
                                    <?php endif; ?>
                                    <?php if ($fax) : ?>
                                        <div class="fax-wrapper">
                                            <img src="/wp-content/uploads/2021/09/Icon-fax.png" alt="fax icon">
                                            <span>FAX</span>
                                            <?php echo $fax; ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                                <div class="btn-wrapper"> <a class="btn btn-primary" href="<?php echo the_permalink() ?>">Learn More</a></div>
                            
                            <? endwhile; else : endif; ?>
                        
                        <? endwhile; else : endif; ?>
                    </div>
                <?php endforeach;

                wp_reset_postdata(); ?>
                
            <?php endif; ?>
        </div>
</section>