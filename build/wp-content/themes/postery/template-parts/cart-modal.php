<div class="modal fade" id="modalCart" tabindex="-1" role="dialog" aria-labelledby="modalCartTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="card">

				<!-- Close -->
				<button type="button" class="modal-close close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>

				<?php if (WC()->cart->get_cart_contents_count() == 0) : ?>

					<!-- Image -->
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/photos/photo-7.jpg" alt="..." class="card-img-top">

					<!-- Shape -->
					<div class="position-relative">
						<div class="shape shape-bottom shape-fluid-x svg-shim text-white">
							<svg viewBox="0 0 2880 480" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" clip-rule="evenodd" d="M2160 0C1440 240 720 240 720 240H0v240h2880V0h-720z" fill="currentColor" />
							</svg>
						</div>
					</div>

				<?php endif; ?>

				<!-- Body -->
				<div class="card-body">

					<!-- Heading -->
					<h2 class="font-weight-bold playfair" id="modalCartTitle">
						Cart
					</h2>

					<div class="widget_shopping_cart_content"><?php woocommerce_mini_cart(); ?></div>

				</div>

			</div>
		</div>
	</div>
</div>