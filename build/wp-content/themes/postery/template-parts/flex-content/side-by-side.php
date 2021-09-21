<?php
$i = get_sub_field('link')[0];

if (get_sub_field('image_position') === 'left') {
	$even = true;
} else {
	$even = false;
}

?>

<section id="poster<?php echo $i; ?>">
	<div class="container">
		<div class="row justify-content-between align-items-stretch">
			<div class="<?php echo $even === true ? 'order-12 ' : null; ?>col-12 col-md-4 py-8 py-md-10 min-vh-100 d-flex align-items-center">

				<div>
					<!-- Heading -->
					<h1 class="playfair font-weight-bold">
						<?php echo get_the_title($i); ?>
					</h1>

					<!-- Text -->
					<p class="font-size-lg text-gray-700 mb-5">
						<?php echo get_sub_field('text'); ?>
					</p>

					<h6 class="text-muted text-uppercase mt-0 mb-4">
						<?php echo get_sub_field('sizes'); ?>
					</h6>

					<!-- Button -->
					<div class="d-flex">

						<a href="<?php echo get_the_permalink($i); ?>" class="btn btn-sm btn-secondary text-white lift font-weight-bolder mr-4">
							<i class="fe fe-image mr-2"></i>
							Learn more
						</a>

						<?php if (get_sub_field('additional_link')) : ?>
							<a href="<?php echo get_sub_field('additional_link')['url']; ?>" class="btn btn-sm btn-primary text-white lift font-weight-bolder">
								<i class="fe fe-shopping-cart mr-2"></i>
								<?php echo get_sub_field('additional_link')['title']; ?>
							</a>
						<?php endif; ?>

					</div>

				</div>

			</div>
			<div class="<?php echo $even === true ? 'order-1 ' : null; ?>col-12 col-md-8 min-vh-100">

				<?php $even === true ? $class = 'position-relative h-100 vw-75 bg-cover float-right' : $class = 'position-relative h-100 vw-75 bg-cover right'; ?>
				<!-- Image -->
				<div class="<?php echo $class; ?>" data-jarallax data-speed=".8" style="background-image: url('<?php echo get_sub_field('image')['url']; ?>');">

					<?php if ($even) : ?>
						<!-- Shape -->
						<div class="shape shape-right shape-fluid-y svg-shim text-white">
							<svg viewBox="0 0 100 1544" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M0 386V0h100v1544H50v-386L0 386z" fill="currentColor" />
							</svg>
						</div>
					<?php else : ?>
						<!-- Shape -->
						<div class="shape shape-left shape-fluid-y svg-shim text-white">
							<svg viewBox="0 0 100 1544" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M0 0h100v386l-50 772v386H0V0z" fill="currentColor" />
							</svg>
						</div>
					<?php endif; ?>

				</div>

				<a href="<?php echo get_permalink($i); ?>" class="whole-element-link"></a>

			</div>
		</div> <!-- / .row -->
	</div> <!-- / .container -->
</section>