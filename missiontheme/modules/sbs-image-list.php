<section class="section section--sbs-image-list">
    <div class="section-wrapper">
        <div class="content-wrapper">
            <?php if (get_sub_field("subheading")) : ?><div class="subheading"><?php the_sub_field("subheading"); ?></div><?php endif; ?>
            <?php if (get_sub_field("heading")) : ?><h2 class="heading"><?php the_sub_field("heading")?></h2><?php endif; ?>
            <?php if (get_sub_field("blurb")) : ?><div class="blurb"><?php the_sub_field("blurb"); ?></div><?php endif; ?>
                        
        </div>
        <div class="two-col">
            
            <?php if (have_rows('left')) : while (have_rows('left')) : the_row(); ?>
                
                <div class="col">
                    <div class="image-wrapper"><img src="<?php the_sub_field('image'); ?>" alt="feature image"></div>
                </div>        
            <?php endwhile; else :  endif; ?>
            
            <?php if (have_rows('right')) : while (have_rows('right')) : the_row(); ?>  
                <div class="col">
             
                    <ul class="list">
                        <?php if (have_rows('list')) : $count=0; while (have_rows('list')) : the_row(); ?>
                            <li><?php the_sub_field('list_item'); ?></li>  
                        <?php $count++; endwhile; else : endif; ?>
                    </ul>
                        
                </div> 
            <?php endwhile; else :  endif; ?>

        </div> 
    </div>
</section>