<?php
/**
 * The template for displaying all single location posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package missionhealthcare
 */

get_header(); ?>

	<main class="main main--default location single-location">
    	
		<?php if( have_rows('modules') ):

			while ( have_rows('modules') ) : the_row();
				
				if( get_row_layout() == 'hero' ):
					$texteditor1 = get_sub_field('texteditor1');
					$button1 = get_sub_field('button1');
					$hero = get_sub_field('hero');
					
					$size = get_sub_field('size');
					if ( $size ): 
						
						$size = "small";
					else: 
						$size = "";		
					endif; 

					$texteditor2 = get_sub_field('texteditor2');
					$button2 = get_sub_field('button2');
					$map = get_sub_field('map');
					$texteditor3 = get_sub_field('texteditor3');
					$button3 = get_sub_field('button3');
					$button4 = get_sub_field('button4');
					$button5 = get_sub_field('button5');
					$texteditor4 = get_sub_field('texteditor4'); ?>
					<section class="section section--hero">
						<div class="hero-wrapper">
							<div class="row">
								<div class="col">
									<?php echo $texteditor1 ?>
								</div>
								<div class="col">
									<div class="btn-wrapper align--right__desktop">
									<?php 
									if( $button1 ): 
										$button1_url = $button1['url'];
										$button1_title = $button1['title'];
										$button1_target = $button1['target'] ? $button1['target'] : '_self';
										?>
										<a class="btn-secondary" href="<?php echo esc_url( $button1_url ); ?>" target="<?php echo esc_attr( $button1_target ); ?>"><?php echo esc_html( $button1_title ); ?></a>
									<?php endif; ?>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col">
								<?php if( !empty( $hero ) ): ?>
									<div class="hero-img-wrapper">
										<img src="<?php echo esc_url($hero['url']); ?>" alt="<?php echo esc_attr($hero['alt']); ?>" class="<?php echo $size; ?>"  width="auto" height="auto" loading="lazy"/>
									</div>
								<?php endif; ?>
									<div class="text-wrapper"><?php echo $texteditor2 ?></div>
									<div class="btn-wrapper">
									<?php 
									if( $button2 ): 
										$button2_url = $button2['url'];
										$button2_title = $button2['title'];
										$button2_target = $button2['target'] ? $button2['target'] : '_self';
										?>
										<a class="btn-secondary" href="<?php echo esc_url( $button2_url ); ?>" target="<?php echo esc_attr( $button2_target ); ?>"><?php echo esc_html( $button2_title ); ?></a>
									<?php endif; ?>
									</div>
								</div>
								<div class="col">
								<?php if( !empty( $map ) ): ?>
									<div class="map-wrapper">
										<iframe src="<?php echo $map; ?>" width="100%" height="350px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
									</div>
								<?php endif; ?>
									<div class="text-wrapper"><?php echo $texteditor3 ?></div>
									<div class="btn-wrapper group">
									<?php 
									if( $button3 ): 
										$button3_url = $button3['url'];
										$button3_title = $button3['title'];
										$button3_target = $button3['target'] ? $button3['target'] : '_self';
										?>
										<a class="btn-secondary" href="<?php echo esc_url( $button3_url ); ?>" target="<?php echo esc_attr( $button3_target ); ?>"><?php echo esc_html( $button3_title ); ?></a>
									<?php endif; ?>
									<?php 
									if( $button4 ): 
										$button4_url = $button4['url'];
										$button4_title = $button4['title'];
										$button4_target = $button4['target'] ? $button4['target'] : '_self';
										?>
										<a class="btn-secondary" href="<?php echo esc_url( $button4_url ); ?>" target="<?php echo esc_attr( $button4_target ); ?>"><?php echo esc_html( $button4_title ); ?></a>
									<?php endif; ?>
									<?php 
									if( $button5 ): 
										$button5_url = $button5['url'];
										$button5_title = $button5['title'];
										$button5_target = $button5['target'] ? $button5['target'] : '_self';
										?>
										<a class="btn-secondary" href="<?php echo esc_url( $button5_url ); ?>" target="<?php echo esc_attr( $button5_target ); ?>"><?php echo esc_html( $button5_title ); ?></a>
									<?php endif; ?>
									</div>
									<div class="text-wrapper"><?php echo $texteditor4 ?></div>
								</div>
							</div>
						</div>
					</section>
					
				<? elseif( get_row_layout() == 'side_by_side' ): 
					$texteditor1 = get_sub_field('texteditor1');
					$image = get_sub_field('image');
					$texteditor2 = get_sub_field('texteditor2');
					$button = get_sub_field('button'); ?>
					<div class="bg-color">
						<section class="section section--side-by-side">
							<div class="side-by-side-wrapper">
							<?php if( !empty( $texteditor1 ) ): ?>
								<div class="row">	
									<div class="col">
										<?php echo $texteditor1 ?>
									</div>
								</div>
							<?php endif; ?>
								<div class="row two-col">	
									<div class="col">
									<?php if( !empty( $image ) ): ?>
										<div class="image-wrapper">
											<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"  width="auto" height="auto" loading="lazy" />
										</div>
									<?php endif; ?>
									</div>
									<div class="col">
										<div class="text-wrapper"><?php echo $texteditor2 ?></div>
										<div class="btn-wrapper">
										<?php 
										if( $button ): 
											$button_url = $button['url'];
											$button_title = $button['title'];
											$button_target = $button['target'] ? $button['target'] : '_self';
											?>
											<a class="btn-secondary" href="<?php echo esc_url( $button_url ); ?>" target="<?php echo esc_attr( $button_target ); ?>"><?php echo esc_html( $button_title ); ?></a>
											<?php endif; ?>
										</div>
									</div>
								</div>
							</div>
						</section>
					</div>
				<? elseif( get_row_layout() == 'full_width_banner' ): 
					$bgimage = get_sub_field('background_image');
					$texteditor = get_sub_field('texteditor');
					$button1 = get_sub_field('button1');
					$button2 = get_sub_field('button2'); ?>
					<section class="section section--full-width full-width no-pad">
						<div class="full-width-wrapper" style="background-image: url(<?php echo $bgimage ?>); background-color: #00609C;">
							<div class="row">
								<div class="col">
									<div class="text-wrapper"><?php echo $texteditor ?></div>
									<div class="btn-wrapper">
									<?php 
									if( $button1 ): 
										$button1_url = $button1['url'];
										$button1_title = $button1['title'];
										$button1_target = $button1['target'] ? $button1['target'] : '_self';
										?>
										<a class="btn-secondary reverse" href="<?php echo esc_url( $button1_url ); ?>" target="<?php echo esc_attr( $button1_target ); ?>"><?php echo esc_html( $button1_title ); ?></a>
									<?php endif; ?>
									<?php 
									if( $button2 ): 
										$button2_url = $button2['url'];
										$button2_title = $button2['title'];
										$button2_target = $button2['target'] ? $button2['target'] : '_self';
										?>
										<a class="btn-secondary reverse" href="<?php echo esc_url( $button2_url ); ?>" target="<?php echo esc_attr( $button2_target ); ?>"><?php echo esc_html( $button2_title ); ?></a>
										<?php endif; ?>
									</div>
								</div>
							</div>
						</div>
					</section>
				<? elseif( get_row_layout() == 'side_by_side_reverse' ): 
					$texteditor = get_sub_field('texteditor');
					$image = get_sub_field('image');
					$button1 = get_sub_field('button1');
					$button2 = get_sub_field('button2'); ?>
					
						<section class="section section--side-by-side_reverse">
							<div class="side-by-side-wrapper">
								<div class="row two-col">	
									<div class="col order">
										<div class="text-wrapper"><?php echo $texteditor ?></div>
										<div class="btn-wrapper">
											<?php 
											if( $button1 ): 
												$button1_url = $button1['url'];
												$button1_title = $button1['title'];
												$button1_target = $button1['target'] ? $button1['target'] : '_self';
												?>
												<a class="btn-secondary" href="<?php echo esc_url( $button1_url ); ?>" target="<?php echo esc_attr( $button1_target ); ?>"><?php echo esc_html( $button1_title ); ?></a>
												<?php endif; ?>
												<?php 
											if( $button2 ): 
												$button2_url = $button2['url'];
												$button2_title = $button2['title'];
												$button2_target = $button2['target'] ? $button2['target'] : '_self';
												?>
												<a class="btn-secondary" href="<?php echo esc_url( $button2_url ); ?>" target="<?php echo esc_attr( $button2_target ); ?>"><?php echo esc_html( $button2_title ); ?></a>
												<?php endif; ?>
										</div>
									</div>
									<div class="col">
										<?php if( !empty( $image ) ): ?>
											<div class="image-wrapper">
												<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"  width="auto" height="auto" loading="lazy" />
											</div>
										<?php endif; ?>		
									</div>
								</div>
							</div>
						</section>
					
				<? elseif( get_row_layout() == 'slider' ): 
					$texteditor1 = get_sub_field('texteditor1'); ?>
					<div class="bg-color">
						<section class="section section--slider">
							<div class="row">
								<div class="col">
									<div class="text-wrapper"><?php echo $texteditor1 ?></div>
								</div>
							</div>
							<div class="row">
								<div class="col">
									<?php if( have_rows('slides') ): ?>
										<div class="review-slider">
										<?php while( have_rows('slides') ) : the_row();
											$texteditor2 = get_sub_field('texteditor2'); ?>
											<div class="slide">
												<div class="text-wrapper"><?php echo $texteditor2 ?></div>
											</div>
											<?php endwhile; ?>
										</div>
									<?php else : endif; ?>	
								</div>
							</div>
						</section>
					</div>
				<? elseif( get_row_layout() == 'three_panels' ): 
					$texteditor1 = get_sub_field('texteditor1'); ?>
					<section class="section section--three-panels">
							<div class="row">
								<div class="col">
									<div class="text-wrapper"><?php echo $texteditor1 ?></div>
								</div>
							</div>
							<div class="row">
								<div class="col">
								<?php if( have_rows('panels') ): ?>
									<div class="panels">
									<?php while( have_rows('panels') ) : the_row();
										$logo = get_sub_field('logo');
										$texteditor2 = get_sub_field('texteditor2'); 
										$officephone = get_sub_field('officephone'); 
										$fax = get_sub_field('fax');
										$button = get_sub_field('button'); ?>
										<div class="panel">
											<div class="logo-wrapper"><img src="<?php echo $logo ?>" alt="location logo" width="auto" height="auto" loading="lazy"></div>
											<div class="text-wrapper"><?php echo $texteditor2 ?></div>
											<div class="wrap">
												<div class="office-wrapper">
													<img src="/wp-content/uploads/2021/09/Icon-phone.png" alt="phone icon" width="auto" height="auto" loading="lazy">
													<span>OFFICE</span>
													<?php echo $officephone ?>
												</div>
												<div class="fax-wrapper">
													<img src="/wp-content/uploads/2021/09/Icon-fax.png" alt="fax icon" width="auto" height="auto" loading="lazy">
													<span>FAX</span>
													<?php echo $fax ?>
												</div>
											</div>
											<div class="btn-wrapper">
											<?php 
											if( $button ): 
												$button_url = $button['url'];
												$button_title = $button['title'];
												$button_target = $button['target'] ? $button['target'] : '_self';
												?>
												<a class="btn-secondary" href="<?php echo esc_url( $button_url ); ?>" target="<?php echo esc_attr( $button_target ); ?>"><?php echo esc_html( $button_title ); ?></a>
												<?php endif; ?>
											</div>
										</div>
									<?php endwhile; ?>
									</div>
								<?php else : endif; ?>	
								</div>
							</div>
					</section>
				<? elseif( get_row_layout() == 'grid_editor' ): 
					$texteditor = get_sub_field('texteditor'); ?>
					<section class="section section--grid-editor">
						<div class="Regular Editor">
							<div class="row">
								<div class="col">
									<div class="text-wrapper"><?php echo $texteditor ?></div>
								</div>
							</div>
							<div class="row">
								<div class="col">
									<?php if (get_sub_field('mobile-logo-grid') ) :?>
										<div class="mobile-only"><img src="<?php echo the_sub_field('mobile-logo-grid'); ?>" alt="mobile logo grid" /></div>
									<?php endif; ?>
									<?php if (get_sub_field('desktop-logo-grid') ) :?>
										<div class="desktop-only"><img src="<?php echo the_sub_field('desktop-logo-grid'); ?>" alt="desktop logo grid" /></div>
									<?php endif; ?>
								<!-- <?php if( have_rows('logo_repeater') ): ?>
									<div class="logo-grid">
									<?php while( have_rows('logo_repeater') ) : the_row();
										$logo = get_sub_field('logo');
										$link = get_sub_field('link'); ?>
										<div class="logo">
											<img src="<?php echo $logo ?>" alt="logo" width="auto" height="auto" loading="lazy" />
										</div>
									<?php endwhile;
								else : endif; ?> -->
									</div>
								</div>
							</div>
						</div>
					</section>
				<? elseif( get_row_layout() == 'five_tiles' ): 
					$texteditor1 = get_sub_field('texteditor1');
					$tile = get_sub_field('tile'); ?>
					<div class="bg-color">
						<section class="section section--five-tiles">
							<div class="row">
								<div class="col">
									<div class="text-wrapper"><?php echo $texteditor1 ?></div>
								</div>
							</div>
							<div class="row">
								<div class="col">
								<?php if( have_rows('service_repeater') ): ?>
									<div class="service-grid">
									<?php while( have_rows('service_repeater') ) : the_row();
										$icon = get_sub_field('icon');
										$texteditor2 = get_sub_field('texteditor2'); ?>
										<div class="service">
											<img src="<?php echo $icon ?>" alt="service icon" width="auto" height="auto" loading="lazy" />
											<div class="text-wrapper"><?php echo $texteditor2 ?></div>
										</div>
									<?php endwhile; ?>
									</div>
									<?php else : endif; ?>	
							</div>
						</section>
					</div>
				<? endif;

			endwhile;

		else :

		endif; ?>
	</main>

<?php get_footer();
