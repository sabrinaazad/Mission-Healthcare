<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package missionhealthcare
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<?php if ( get_field( 'custom_aside_menu' ) ): ?>

	<aside id="secondary" class="aside">
        <div class="mobile-only expand-button"><?php echo get_field( 'menu_parent' ) ?><i class="fa fa-caret-down"></i></div>
		<div class="expand-panel">
			<ul id="menu-main-menu-1" class="menu">
			<li class="menu-item current-menu-parent  current-menu-ancestor menu-item-has-children">
				<a href="<?php echo get_field( 'menu_parent_link' ) ?>"><?php echo get_field( 'menu_parent' ) ?></a>
				<?php if( have_rows('custom_submenu') ): ?>
				<ul class="sub-menu">
					<?php while( have_rows('custom_submenu') ) : the_row(); 	
					$activeclass = get_sub_field( 'active_class' );
					if ( $activeclass ) { 
						$class = 'current-menu-item'; ?>
						<li class="menu-item <?php echo $class ?>">
							<a href="<?php echo get_sub_field( 'menu_child_link' ) ?>"><?php echo get_sub_field( 'menu_child' ) ?></a>
						</li>	
					<?php } else { ?>
						<li class="menu-item">
							<a href="<?php echo get_sub_field( 'menu_child_link' ) ?>"><?php echo get_sub_field( 'menu_child' ) ?></a>
						</li>	
					<?php } endwhile; ?>
				</ul> 	
				<?php else : endif; ?>		
			</li>
		</ul>
		</div>
	</aside>
<?php else: // field_name returned false ?>

<aside id="secondary" class="aside">
	<div class="mobile-only expand-button"><?php echo get_the_title() ?> <i class="fa fa-caret-down"></i></div>
	<div class="expand-panel">
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</div>
</aside>

<?php endif; // end of if field_name logic ?>
