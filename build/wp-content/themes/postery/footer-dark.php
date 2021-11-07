<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package postery
 */

?>

<!-- SHAPE
    ================================================== -->
<div class="position-relative mt-n16">
	<div class="shape shape-bottom shape-fluid-x svg-shim text-dark">
		<svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M0 48h2880V0h-720C1442.5 52 720 0 720 0H0v48z" fill="currentColor" />
		</svg>
	</div>
</div>

<!-- FOOTER
    ================================================== -->
<section class="pt-16 bg-dark">
	<footer class="py-8 py-md-11 bg-dark border-top border-gray-800-50">
		<div class="container">
			<div class="row">
				<div class="col-12 col-md-4 col-lg-3">

					<!-- Brand -->
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-h.svg" alt="Postery.studio logo" class="footer-brand img-fluid mb-2">

					<!-- Text -->
					<h6 class="text-gray-700 mb-5">
						The one-off exclusive posters.
					</h6>

					<!-- Social -->
					<ul class="list-unstyled list-inline list-social mb-6 mb-md-0">
						<li class="list-inline-item list-social-item mr-3">
							<a href="" class="text-decoration-none" target="_blank">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<g clip-path="url(#clip0)">
										<path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z" fill="#869AB8" />
									</g>
									<defs>
										<clipPath id="clip0">
											<path fill="#fff" d="M0 0h24v24H0z" />
										</clipPath>
									</defs>
								</svg>
							</a>
						</li>
						<li class="list-inline-item list-social-item mr-3">
							<a href="" class="text-decoration-none" target="_blank">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<g clip-path="url(#clip0)">
										<path d="M22.675 0H1.325C.593 0 0 .593 0 1.325v21.351C0 23.407.593 24 1.325 24H12.82v-9.294H9.692v-3.622h3.128V8.413c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.795.143v3.24l-1.918.001c-1.504 0-1.795.715-1.795 1.763v2.313h3.587l-.467 3.622h-3.12V24h6.116c.73 0 1.323-.593 1.323-1.325V1.325C24 .593 23.407 0 22.675 0z" fill="#869AB8" />
									</g>
									<defs>
										<clipPath id="clip0">
											<path fill="#fff" d="M0 0h24v24H0z" />
										</clipPath>
									</defs>
								</svg>
							</a>
						</li>
						<li class="list-inline-item list-social-item">
							<a href="" class="text-decoration-none" target="_blank">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd" clip-rule="evenodd" d="M12 0C5.373 0 0 5.372 0 12c0 5.084 3.163 9.426 7.627 11.174-.105-.949-.2-2.405.042-3.441.218-.937 1.407-5.965 1.407-5.965s-.359-.719-.359-1.782c0-1.668.967-2.914 2.171-2.914 1.023 0 1.518.769 1.518 1.69 0 1.029-.655 2.568-.994 3.995-.283 1.194.599 2.169 1.777 2.169 2.133 0 3.772-2.249 3.772-5.495 0-2.873-2.064-4.882-5.012-4.882-3.414 0-5.418 2.561-5.418 5.207 0 1.031.397 2.138.893 2.738a.36.36 0 01.083.345l-.333 1.36c-.053.22-.174.267-.402.161-1.499-.698-2.436-2.889-2.436-4.649 0-3.785 2.75-7.262 7.929-7.262 4.163 0 7.398 2.967 7.398 6.931 0 4.136-2.607 7.464-6.227 7.464-1.216 0-2.359-.631-2.75-1.378l-.748 2.853c-.271 1.043-1.002 2.35-1.492 3.146C9.57 23.812 10.763 24 12 24c6.627 0 12-5.373 12-12 0-6.628-5.373-12-12-12z" fill="#869AB8" />
								</svg>
							</a>
						</li>
					</ul>

				</div>
				<div class="col-lg-8 offset-lg-1">
					<div class="row">
						<div class="col-6 col-md-4">

							<!-- Heading -->
							<h6 class="font-weight-bold text-uppercase text-gray-700 mb-3">
								Help
							</h6>

							<!-- List -->
							<ul class="list-unstyled text-muted mb-6 mb-md-8 mb-lg-0">
								<li class="mb-2">
									<a href="#!" class="text-reset">
										FAQ
									</a>
								</li>
								<li class="mb-2">
									<a href="#!" class="text-reset">
										Size guide
									</a>
								</li>
								<li class="mb-2">
									<a href="#!" class="text-reset">
										Customer Service
									</a>
								</li>
								<li>
									<a href="#!" class="text-reset">
										Contact
									</a>
								</li>
							</ul>

						</div>
						<div class="col-6 col-md-4">

							<!-- Heading -->
							<h6 class="font-weight-bold text-uppercase text-gray-700 mb-3">
								Sitemap
							</h6>

							<!-- List -->
							<ul class="list-unstyled text-muted mb-6 mb-md-8 mb-lg-0">
								<li class="mb-2">
									<a href="#!" class="text-reset">
										Posters
									</a>
								</li>
								<li class="mb-2">
									<a href="#!" class="text-reset">
										Cart
									</a>
								</li>
								<li class="mb-2">
									<a href="#!" class="text-reset">
										Checkout
									</a>
								</li>
								<li>
									<a href="#!" class="text-reset">
										Your account
									</a>
								</li>
							</ul>

						</div>
						<div class="col-6 col-md-4">

							<!-- Heading -->
							<h6 class="font-weight-bold text-uppercase text-gray-700 mb-3">
								Legal
							</h6>

							<!-- List -->
							<ul class="list-unstyled text-muted mb-0">
								<li class="mb-2">
									<a href="#!" class="text-reset">
										Returns Policy
									</a>
								</li>
								<li class="mb-2">
									<a href="#!" class="text-reset">
										Terms and Conditions
									</a>
								</li>
								<li>
									<a href="#!" class="text-reset">
										Cookie Policy
									</a>
								</li>
							</ul>

						</div>
					</div>
				</div>
			</div> <!-- / .row -->
		</div> <!-- / .container -->
	</footer>
</section>

<?php get_template_part('template-parts/cart-modal'); ?>

<?php wp_footer(); ?>

<!-- JAVASCRIPT
	================================================== -->
<!-- Libs JS -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/libs/jquery/dist/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/libs/@fancyapps/fancybox/dist/jquery.fancybox.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/libs/aos/dist/aos.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/libs/choices.js/public/assets/scripts/choices.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/libs/countup.js/dist/countUp.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/libs/dropzone/dist/min/dropzone.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/libs/flickity/dist/flickity.pkgd.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/libs/flickity-fade/flickity-fade.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/libs/highlightjs/highlight.pack.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/libs/imagesloaded/imagesloaded.pkgd.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/libs/isotope-layout/dist/isotope.pkgd.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/libs/jarallax/dist/jarallax.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/libs/jarallax/dist/jarallax-video.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/libs/jarallax/dist/jarallax-element.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/libs/quill/dist/quill.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/libs/smooth-scroll/dist/smooth-scroll.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/libs/typed.js/lib/typed.min.js"></script>

<script src="https://kit.fontawesome.com/7acc43e0e6.js" crossorigin="anonymous"></script>

<!-- Theme JS -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/theme.min.js?v=1.0.7"></script>

</body>

</html>