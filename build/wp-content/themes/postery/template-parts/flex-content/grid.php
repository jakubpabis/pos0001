<?php if (get_sub_field('posters')) : $i = 1; ?>

	<section id="allProductsGrid" class="py-8 py-md-11">
		<div class="container">
			<div class="row" id="portfolio" data-isotope='{"layoutMode": "masonry"}'>
				<?php foreach (get_sub_field('posters') as $item) :  ?>
					<?php
					$att_id = get_post_thumbnail_id($item);
					$thumb = wp_get_attachment_image_src($att_id, 'full');
					$url = $thumb[0];
					$alt = get_post_meta($att_id, '_wp_attachment_image_alt', true);
					$width = $thumb[1];
					$height = $thumb[2];
					if ($width > $height) {
						$column = 'col-md-8';
					} else if ($width < $height) {
						$column = 'col-md-4';
					} else {
						$column = 'col-md-6';
					}
					//var_dump($thumb);
					?>
					<div class="col-12 <?php echo $column; ?>">

						<!-- Card -->
						<a class="card shadow-light-lg mb-7 border-black" data-toggle="smooth-scroll" data-offset="0" href="#poster<?php echo $i; ?>">

							<!-- Image -->
							<div class="card-zoom border-white">
								<img class="card-img" src="<?php echo $url; ?>" alt="<?php echo $alt; ?>">
							</div>

							<!-- Overlay -->
							<div class="card-img-overlay card-img-overlay-hover">
								<div class="card-body bg-white pt-4 pb-5">

									<!-- Shape -->
									<div class="shape shape-bottom-100 shape-fluid-x svg-shim text-white">
										<svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M0 48h2880V0h-720C1442.5 52 720 0 720 0H0v48z" fill="currentColor" />
										</svg>
									</div>

									<!-- Heading -->
									<h4 class="mb-0 playfair font-weight-bold">
										<?php echo get_the_title($item); ?>
									</h4>

								</div>
							</div>

						</a>

					</div>
				<?php $i++;
				endforeach; ?>

			</div>
		</div>
	</section>
<?php endif; ?>