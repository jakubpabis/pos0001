<?php
/**
 * Template Name: Homepage
 */

get_header(); ?>

    <!-- WELCOME
    ================================================== -->
    <header class="overlay overlay-black overlay-30" data-jarallax data-speed=".8" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/header1.jpg')">
        <div class="container d-flex flex-column">
            <div class="row align-items-center min-vh-100 py-8 py-md-11">
                <div class="col-12 col-md-8 col-lg-7 mt-auto">

                    <h1 class="display-1 playfair text-gray-400 font-weight-bolds">
                        The one-off exclusive posters 
                    </h1>

                    <!-- Heading -->
                    <h3 class="text-gray-200 pr-12">
                        Each and every poster is made in only <strong>10 copies</strong>.
                        That's it! If you don't buy it now, you'll never do!
                    </h3>

                    <a data-toggle="smooth-scroll" data-offset="0" href="#allProducts" class="btn btn-primary text-gray-200 lift display-2 font-weight-bolder mt-3">
                        Shop now!
                    </a>

                </div>
                <div class="col-12 mt-auto text-center">

                    <!-- Button -->
                    <a class="btn btn-white btn-rounded-circle shadow" data-toggle="smooth-scroll" data-offset="0" href="#allProducts">
                        <i class="fe fe-arrow-down"></i>
                    </a>

                </div>
            </div> <!-- / .row -->
        </div> <!-- / .container -->
    </header>

    <?php

        $args = array(
            'post_type'             => 'product',
            'post_status'           => 'publish',
            'ignore_sticky_posts'   => true,
            'posts_per_page'        => -1,
        );
        $home_products = new WP_Query($args);
        //var_dump($products);
    
    ?>

    <!-- All Products
    ================================================== -->
    <?php if($home_products->have_posts()) : ?>

    <section id="allProducts" class="py-8 py-md-11">
        <div class="container">
            <div class="row" id="portfolio" data-isotope='{"layoutMode": "masonry"}'>
                <?php $i = 1; while($home_products->have_posts()) : $home_products->the_post(); ?>
                    <div class="col-12 <?php echo get_field('direction') === 'vertical' ? 'col-md-4' : 'col-md-8' ?>">

                        <!-- Card -->
                        <a class="card shadow-light-lg mb-7 border-black" data-toggle="smooth-scroll" data-offset="0" href="#poster<?php echo $i; ?>">

                            <!-- Image -->
                            <div class="card-zoom border-white">
                                <img class="card-img" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="...">
                            </div>

                            <!-- Overlay -->
                            <div class="card-img-overlay card-img-overlay-hover">
                                <div class="card-body bg-white pt-4 pb-5">

                                <!-- Shape -->
                                <div class="shape shape-bottom-100 shape-fluid-x svg-shim text-white">
                                    <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 48h2880V0h-720C1442.5 52 720 0 720 0H0v48z" fill="currentColor"/></svg>
                                </div>

                                <!-- Heading -->
                                <h4 class="mb-0 playfair font-weight-bold">
                                    <?php echo get_the_title(); ?>
                                </h4>

                                </div>
                            </div>

                        </a>

                    </div>
                <?php $i++; endwhile; ?>

            </div>
        </div>
    </section>

    <?php $i = 1; while($home_products->have_posts()) : $home_products->the_post(); ?>

    <?php

        if( $i % 2 === 0 ) {
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
                                <?php echo get_the_title(); ?>
                            </h1>

                            <!-- Text -->
                            <p class="font-size-lg text-gray-700 mb-3">
                                <?php echo strip_tags( get_the_content() ); ?>
                            </p>

                            <?php $sizes = $product->get_attribute( 'pa_size' ); ?>

                            <h6 class="text-muted text-uppercase mt-0 mb-5">
                                <strong>Available sizes:</strong><br/>
                                <?php echo str_replace( ', ', '<br/>', $sizes ); ?>
                            </h6>

                            <h6 class="mb-2 text-muted">
                                Left in stock: <span class="text-gray-800"><?php echo $product->get_stock_quantity(); ?> out of 10</span>
                            </h6>

                            <!-- Button -->
                            <div class="d-flex">
                                
                                <a href="<?php echo get_the_permalink(); ?>" class="btn btn-sm btn-secondary text-white lift font-weight-bolder mr-4">
                                    <i class="fe fe-image mr-2"></i>
                                    Learn more
                                </a>
                                
                                <a href="!#" class="btn btn-sm btn-primary text-white lift font-weight-bolder">
                                    <i class="fe fe-shopping-cart mr-2"></i>
                                    Add to cart
                                </a>

                            </div>
                        
                        </div>

                    </div>
                    <div class="<?php echo $even === true ? 'order-1 ' : null; ?>col-12 col-md-8 min-vh-100">

                        <?php $even === true ? $class = 'position-relative h-100 vw-75 bg-cover float-right' : $class = 'position-relative h-100 vw-75 bg-cover right'; ?>
                        <!-- Image -->
                        <div class="<?php echo $class; ?>" data-jarallax data-speed=".8" style="background-image: url('<?php echo get_field('mockup')['url']; ?>');">

                        <?php if( $even ): ?>
                        <!-- Shape -->
                        <div class="shape shape-right shape-fluid-y svg-shim text-white">
                            <svg viewBox="0 0 100 1544" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 386V0h100v1544H50v-386L0 386z" fill="currentColor"/></svg>
                        </div>
                        <?php else: ?>
                        <!-- Shape -->
                        <div class="shape shape-left shape-fluid-y svg-shim text-white">
                            <svg viewBox="0 0 100 1544" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h100v386l-50 772v386H0V0z" fill="currentColor"/></svg>
                        </div>
                        <?php endif; ?>

                        </div>

                    </div>
                </div> <!-- / .row -->
            </div> <!-- / .container -->
        </section>

    <?php $i++; endwhile; ?>

    <?php endif; ?>

<?php get_footer();