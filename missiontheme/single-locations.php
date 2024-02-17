<?php

get_header();

// Check value exists.
if (have_rows('modules')) :
    // Loop through rows.
    while (have_rows('modules')) : the_row();
        
        // Case: banner-cta layout.
        if (get_row_layout() == 'banner_cta') :
            get_template_part('modules/banner-cta');
        endif;

        // Case: cards layout.
        if (get_row_layout() == 'cards') :
            get_template_part('modules/cards');
        endif;

        // Case: contact-form layout.
        if (get_row_layout() == 'contact_form') :
            get_template_part('modules/contact-form');
        endif;
        
        // Case: covid-19 layout.
        if (get_row_layout() == 'covid_19') :
            get_template_part('modules/covid-19');
        endif;

        // Case:  eligibility-quiz layout.
        if (get_row_layout() == 'eligibility_quiz') :
            get_template_part('modules/eligibility-quiz');
        endif;
       
        // Case: faqs layout.
        if (get_row_layout() == 'faqs') :
            get_template_part('modules/faqs');
        endif;

        // Case: featured-logos layout.
        if (get_row_layout() == 'featured_logos') :
            get_template_part('modules/featured-logos');
        endif;

        // Case: find-a-location layout.
         if (get_row_layout() == 'find_a_location') :
            get_template_part('modules/find-a-location');
        endif;

        // Case: four-icons layout.
         if (get_row_layout() == 'four_icons') :
            get_template_part('modules/four-icons');
        endif;

        // Case: hero layout.
        if (get_row_layout() == 'hero') :
            get_template_part('modules/hero');
        endif;

        // Case: hero-banner layout.
        if (get_row_layout() == 'hero_banner') :
            get_template_part('modules/hero-banner');
        endif;

        // Case: icons-row layout.
        if (get_row_layout() == 'icons_row') :
            get_template_part('modules/icons-row');
        endif;

        // Case: image-cta layout.
        if (get_row_layout() == 'image_cta') :
            get_template_part('modules/image-cta');
        endif;

        // Case: image-slider layout.
         if (get_row_layout() == 'image_slider') :
            get_template_part('modules/image-slider');
        endif;

        // Case: instagram layout.
        if (get_row_layout() == 'instagram') :
            get_template_part('modules/instagram');
        endif;

        // Case: leadership layout.
         if (get_row_layout() == 'leadership') :
            get_template_part('modules/leadership');
        endif;

        // Case: location-info layout.
        if (get_row_layout() == 'location_info') :
            get_template_part('modules/location-info');
        endif;

        // Case: logo-grid layout.
        if (get_row_layout() == 'logo_grid') :
            get_template_part('modules/logo-grid');
        endif;

        // Case: logo-slider layout.
        if (get_row_layout() == 'logo_slider') :
            get_template_part('modules/logo-slider');
        endif;

        // Case: nearby-locations layout.
        if (get_row_layout() == 'nearby_locations') :
            get_template_part('modules/nearby-locations');
        endif;

        // Case: positions-slider layout.
        if (get_row_layout() == 'positions_slider') :
            get_template_part('modules/positions-slider');
        endif;

        // Case: sbs-image-list layout.
        if (get_row_layout() == 'sbs_image_list') :
            get_template_part('modules/sbs-image-list');
        endif;      

        // Case: sbs-image-text layout.
        if (get_row_layout() == 'sbs_image_text') :
            get_template_part('modules/sbs-image-text');
        endif;      

        // Case: sbs-list-image layout.
        if (get_row_layout() == 'sbs_list_image') :
            get_template_part('modules/sbs-list-image');
        endif;   
        
        // Case: sbs-logos-bloom layout.
        if (get_row_layout() == 'sbs_logos_bloom') :
            get_template_part('modules/sbs-logos-bloom');
        endif;      

        // Case: sbs-support-circle layout.
        if (get_row_layout() == 'sbs_support_circle') :
            get_template_part('modules/sbs-support-circle');
        endif;     

        // Case: services-slider layout.
        if (get_row_layout() == 'services_slider') :
            get_template_part('modules/services-slider');
        endif;   

        // Case: service-table layout.
        if (get_row_layout() == 'service_table') :
            get_template_part('modules/service-table');
        endif;  

        // Case: services-two-column-list layout.
        if (get_row_layout() == 'services_two_column_list') :
            get_template_part('modules/services-two-column-list');
        endif;     

        // Case: statistics layout.
        if (get_row_layout() == 'statistics') :
            get_template_part('modules/statistics');
        endif;      
        
        // Case: testimonials layout.
        if (get_row_layout() == 'testimonials') :
            get_template_part('modules/testimonials');
        endif;

        // Case: text-editor layout.
        if (get_row_layout() == 'text_editor') :
            get_template_part('modules/text-editor');
        endif;

        // Case: three-blocks layout.
        if (get_row_layout() == 'three_blocks') :
            get_template_part('modules/three-blocks');
        endif;

        // Case: two-column-list layout.
         if (get_row_layout() == 'two_column_list') :
            get_template_part('modules/two-column-list');
        endif;

    // End loop.
    endwhile;
// No value.
else :
// Do something...
endif;

get_footer();
