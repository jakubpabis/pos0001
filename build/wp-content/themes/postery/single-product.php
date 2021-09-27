<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package postery
 */

get_header('shop');
global $product;
?>

<!-- CONTENT
    ================================================== -->
<div class="container-fluid px-md-0">
	<div class="row justify-content-between no-gutters mx-md-0">
		<div class="col-12 col-md-4 position-md-sticky d-flex align-items-center vh-md-100 mx-auto" style="top: 0;">

			<!-- Sidebar -->
			<aside class="flex-grow-1 py-8 py-md-10">
				<a href="/#allProducts" class="position-absolute top-0 left-0 mt-11 pt-2">
					<h6 class="text-uppercase font-weight-bolder"><i class="fe fe-corner-up-left"></i> Go back</h6>
				</a>

				<!-- Heading -->
				<?php the_title('<h1 class="playfair font-weight-bold">', '</h1>'); ?>

				<!-- Text -->
				<p class="font-size-lg text-gray-700 mb-3">
					<?php echo strip_tags(get_the_content()); ?>
				</p>

				<?php do_action('woocommerce_single_product_summary'); ?>

				<ul class="list-group list-group-flush mt-6 mb-8 variations d-none">
					<li class="list-group-item pb-4">
						<!-- Heading -->
						<div class="d-flex align-items-center">
							<h6 class="mb-0 text-uppercase label">
								Poster size
							</h6>
							<div class="dropdown show ml-auto mt-n1">
								<a class="btn btn-xs btn-link dropdown-toggle pr-0" href="#" role="button" id="dropdownMenuSize" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Choose the size
								</a>
								<div class="dropdown-menu dropdown-menu-xs dropdown-menu-right text-right" aria-labelledby="dropdownMenuSize">
									<?php foreach ($options as $option) : ?>
										<a class="dropdown-item" data-option="<?php echo $option; ?>" href="javascript:void(0)"><?php echo wc_attribute_label($attribute_name); ?></a>
									<?php endforeach; ?>
								</div>

							</div>
						</div>

					</li>
				</ul>

				<div class="d-flex justify-content-between">

					<div class="d-flex mt-2">
						<span class="mr-5 text-center">
							<i class="fe fe-rotate-ccw mb-2 h3"></i>
							<h6 class="my-0">30 day return</h6>
						</span>
						<span class="text-center">
							<i class="fe fe-package mb-2 h3"></i>
							<h6 class="my-0">Free UK shipping</h6>
						</span>
					</div>

					<div class="text-right">
						<a href="!#" class="btn btn-primary text-white lift font-weight-bolder mb-4">
							<i class="fe fe-shopping-cart mr-2"></i>
							Add to cart
						</a>
						<div>
							<i class="fab fa-apple-pay pay-icon text-gray-700 my-0 ml-2"></i>
							<i class="fab fa-google-pay pay-icon text-gray-700 my-0 ml-2"></i>
							<i class="fab fa-cc-visa pay-icon text-gray-700 my-0 ml-2"></i>
							<i class="fab fa-cc-mastercard pay-icon text-gray-700 my-0 ml-2"></i>
							<i class="fab fa-cc-paypal pay-icon text-gray-700 my-0 ml-2"></i>
						</div>
					</div>

				</div>

			</aside>

		</div>
		<div class="col-12 col-md-7">

			<?php $images = $product->get_gallery_image_ids(); ?>

			<!-- Images -->
			<section class="pt-md-10">
				<?php foreach ($images as $image) : ?>
					<img class="w-100 h-auto mb-5" src="<?php echo wp_get_attachment_url($image); ?>" alt="...">
				<?php endforeach; ?>
				<img class="w-100 h-auto" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="...">
			</section>

		</div>
	</div>
</div>

<!-- SHAPE
    ================================================== -->
<div class="position-relative" style="z-index: 1;">
	<div class="shape shape-bottom shape-fluid-x svg-shim text-light">
		<svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M0 48h2880V0h-720C1442.5 52 720 0 720 0H0v48z" fill="currentColor" />
		</svg>
	</div>
</div>

<?php $array = wc_get_related_products($product->get_id(), 3, $product->get_id()); ?>
<?php if (isset($array) && !empty($array)) : ?>
	<?php if (($key = array_search($product->get_id(), $array)) !== false) {
		unset($array[$key]);
	} ?>
	<?php if (!empty($array)) : ?>
		<!-- RELATED
    ================================================== -->
		<section class="pt-7 pt-md-10 bg-light">
			<div class="container">
				<div class="row align-items-center mb-5">
					<div class="col-12 col-md">

						<!-- Heading -->
						<h3 class="mb-0 playfair font-weight-bolds">
							Related Posters
						</h3>

						<!-- Text -->
						<p class="mb-0 text-muted">
							Other goodies that are similar to this one.
						</p>

					</div>
					<div class="col-12 col-md-auto">

						<!-- Button -->
						<a href="/#allProducts" class="btn btn-sm btn-outline-gray-300 d-none d-md-inline">
							View all
						</a>

					</div>
				</div> <!-- / .row -->
				<div class="row">
					<?php foreach ($array as $related) : if (wc_get_product($related)->get_id() !== $product->get_id()) : ?>
							<div class="col-12 col-md-6 col-lg-4 d-flex">
								<?php $rel = wc_get_product($related); ?>
								<!-- Card -->
								<a class="card mb-6 mb-lg-0 shadow-light-lg" href="<?php echo get_permalink($rel->get_id()); ?>">

									<!-- Image -->
									<div class="card-zoom">
										<img class="card-img-top" src="<?php echo get_the_post_thumbnail_url($rel->get_id()); ?>" alt="...">
									</div>

									<!-- Body -->
									<div class="card-body">

										<!-- Shape -->
										<div class="shape shape-bottom-100 shape-fluid-x svg-shim text-white">
											<svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M0 48h2880V0h-720C1442.5 52 720 0 720 0H0v48z" fill="currentColor" />
											</svg>
										</div>

										<!-- Heading -->
										<h4 class="mb-0 playfair font-weight-bolds">
											<?php echo $rel->get_name(); ?>
										</h4>

									</div>

								</a>

							</div>
					<?php endif;
					endforeach; ?>
				</div> <!-- / .row -->
			</div> <!-- / .container -->
		</section>
	<?php endif; ?>
<?php endif; ?>

<?php
get_footer();
