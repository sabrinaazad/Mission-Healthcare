<section class="section section--service-table">
    <div class="section-wrapper">
        <table>
            <thead>
            <tr>
                <th></th>
                <th>Home Health</th>
                <th>Hospice</th>
                <th>Palliative Care</th>
            </tr>
            </thead>
            <tbody>
           
            <tr>
                <td class="question"><div class="icon"><img src="<?php echo the_sub_field("icon1") ?>" /></div>What Is it?</td>
                <?php if (have_rows('what_is_it')) : while (have_rows('what_is_it')) : the_row(); ?>
                    <td><div class="answer"><?php echo the_sub_field("answer") ?></div></td>
                <?php endwhile; else : endif; ?>
            </tr>
            <tr>
                <td class="question"><div class="icon"><img src="<?php echo the_sub_field("icon2") ?>" /></div>Who Is It For?</td>
                <?php if (have_rows('who_is_it_for')) : while (have_rows('who_is_it_for')) : the_row(); ?>
                    <td><div class="answer"><?php echo the_sub_field("answer") ?></div></td>
                <?php endwhile; else : endif; ?>
            </tr>
            <tr>
                <td class="question"><div class="icon"><img src="<?php echo the_sub_field("icon3") ?>" /></div>What Does It Treat?</td>
                <?php if (have_rows('what_does_it_treat')) : while (have_rows('what_does_it_treat')) : the_row(); ?>
                    <td><div class="answer"><?php echo the_sub_field("answer") ?></div></td>
                <?php endwhile; else : endif; ?>
            </tr>
            <tr>
                <td class="question"><div class="icon"><img src="<?php echo the_sub_field("icon4") ?>" /></div>Where is Care Received?</td>
                <?php if (have_rows('where_is_care_received')) : while (have_rows('where_is_care_received')) : the_row(); ?>
                    <td><div class="answer"><?php echo the_sub_field("answer") ?></div></td>
                <?php endwhile; else : endif; ?>
            </tr>
            <tr>
                <td class="question"><div class="icon"><img src="<?php echo the_sub_field("icon5") ?>" /></div>What Is The Cost?</td>
                <?php if (have_rows('what_is_the_cost')) : while (have_rows('what_is_the_cost')) : the_row(); ?>
                    <td><div class="answer"><?php echo the_sub_field("answer") ?></div></td>
                <?php endwhile; else : endif; ?>
            </tr>
            <tr>
                <td class="question"><div class="icon"><img src="<?php echo the_sub_field("icon6") ?>" /></div>What Services Are Included?</td>
                <?php if (have_rows('what_services_are_included')) : while (have_rows('what_services_are_included')) : the_row(); ?>
                    <td><div class="answer"><?php echo the_sub_field("answer") ?></div></td>
                <?php endwhile; else : endif; ?>
            </tr>
            
            </tbody>
           
        </table>
      
    </div>
</section>