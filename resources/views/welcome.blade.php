<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Annas Florist</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('img/core-img/favicon.ico') }}">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="{{ asset('style.css') }}">

</head>

<body>
<!-- Preloader -->
@include('layouts.preloader')

<!-- ##### Header Area Start ##### -->
@include('layouts.header')
<!-- ##### Header Area End ##### -->

<!-- ##### Hero Area Start ##### -->
<section class="hero-area">
    <div class="hero-post-slides owl-carousel">

        <!-- Single Hero Post -->
        <div class="single-hero-post bg-overlay">
            <!-- Post Image -->
            <div class="slide-img bg-img" style="background-image: url({{ asset('img/bg-img/1.jpg') }});"></div>
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <!-- Post Content -->
                        <div class="hero-slides-content text-center">
                            <h2>ANNAS FLORIST</h2>
                            <p>HOUSE OF CACTUS & MONSTERA</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Single Hero Post -->
        <div class="single-hero-post bg-overlay">
            <!-- Post Image -->
            <div class="slide-img bg-img" style="background-image: url({{ asset('img/bg-img/2.jpg') }});"></div>
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <!-- Post Content -->
                        <div class="hero-slides-content text-center">
                            <h2>ANNAS FLORIST</h2>
                            <p>HOUSE OF CACTUS & MONSTERA</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- ##### Hero Area End ##### -->

<!-- ##### Cool Facts Area Start ##### -->
<section class="cool-facts-area bg-img section-padding-100-0" style="background-image: url({{ asset('img/bg-img/cool-facts.png') }});">
    <div class="container">
        <div class="row">

            <!-- Single Cool Facts Area -->
            <div class="col-12 col-sm-6 col-md-3">
                <div class="single-cool-fact d-flex align-items-center justify-content-center mb-100">
                    <div class="cf-icon">
                        <img src="{{ asset('img/core-img/cf1.png') }}" alt="">
                    </div>
                    <div class="cf-content">
                        <h2><span class="counter">20</span></h2>
                        <h6>AWARDS</h6>
                    </div>
                </div>
            </div>

            <!-- Single Cool Facts Area -->
            <div class="col-12 col-sm-6 col-md-3">
                <div class="single-cool-fact d-flex align-items-center justify-content-center mb-100">
                    <div class="cf-icon">
                        <img src="{{ asset('img/core-img/cf2.png') }}" alt="">
                    </div>
                    <div class="cf-content">
                        <h2><span class="counter">70</span></h2>
                        <h6>PROJECTS</h6>
                    </div>
                </div>
            </div>

            <!-- Single Cool Facts Area -->
            <div class="col-12 col-sm-6 col-md-3">
                <div class="single-cool-fact d-flex align-items-center justify-content-center mb-100">
                    <div class="cf-icon">
                        <img src="{{ asset('img/core-img/cf3.png') }}" alt="">
                    </div>
                    <div class="cf-content">
                        <h2><span class="counter">30</span>+</h2>
                        <h6>HAPPY CLIENTS</h6>
                    </div>
                </div>
            </div>

            <!-- Single Cool Facts Area -->
            <div class="col-12 col-sm-6 col-md-3">
                <div class="single-cool-fact d-flex align-items-center justify-content-center mb-100">
                    <div class="cf-icon">
                        <img src="{{ asset('img/core-img/cf4.png') }}" alt="">
                    </div>
                    <div class="cf-content">
                        <h2><span class="counter">80</span>K+</h2>
                        <h6>REVENUE</h6>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Side Image -->
    <div class="side-img wow fadeInUp" data-wow-delay="500ms">
        <img src="{{ asset('img/core-img/pot.png') }}" alt="">
    </div>
</section>
<!-- ##### Cool Facts Area End ##### -->

<!-- ##### Service Area Start ##### -->
<section class="our-services-area section-padding-100-0">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- Section Heading -->
                <div class="section-heading text-center">
                    <h2>OUR SERVICES</h2>
                    <p>Kami memberikan layanan yang terbaik untuk Anda.</p>
                </div>
            </div>
        </div>

        <div class="row justify-content-between">
            <div class="col-12 col-lg-5">
                <div class="alazea-service-area mb-100">

                    <!-- Single Service Area -->
                    <div class="single-service-area d-flex align-items-center wow fadeInUp" data-wow-delay="100ms">
                        <!-- Icon -->
                        <div class="service-icon mr-30">
                            <img src="{{ asset('img/core-img/s1.png') }}" alt="">
                        </div>
                        <!-- Content -->
                        <div class="service-content">
                            <h5>Plant Sales</h5>
                            <p>Menjual berbagai tanaman hias kaktus dan monstera untuk kebutuhan dekorasi indoor / outdoor</p>
                        </div>
                    </div>

                    <!-- Single Service Area -->
                    <div class="single-service-area d-flex align-items-center wow fadeInUp" data-wow-delay="300ms">
                        <!-- Icon -->
                        <div class="service-icon mr-30">
                            <img src="{{ asset('img/core-img/b3.png') }}" alt="">
                        </div>
                        <!-- Content -->
                        <div class="service-content">
                            <h5>Plant Decor</h5>
                            <p>Menyediakan paket dekorasi tanaman hias untuk kebutuhan pesta, pernikahan, ulang tahun, dan lain - lain</p>
                        </div>
                    </div>

                    <!-- Single Service Area -->
                    <div class="single-service-area d-flex align-items-center wow fadeInUp" data-wow-delay="500ms">
                        <!-- Icon -->
                        <div class="service-icon mr-30">
                            <img src="{{ asset('img/core-img/s3.png') }}" alt="">
                        </div>
                        <!-- Content -->
                        <div class="service-content">
                            <h5>Plant Souvenir</h5>
                            <p>Menyediakan souvenir tanaman hias yang cocok untuk berbagai acara maupun hiasan indoor / outdoor</p>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-12 col-lg-6">
                <div class="alazea-video-area bg-overlay mb-100">
                    <img src="{{ asset('img/bg-img/23.jpg') }}" alt="">
                    <a href="https://youtu.be/aRGPbl2-pk8" class="video-icon">
                        <i class="fa fa-play" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Service Area End ##### -->

<!-- ##### Product Area Start ##### -->
<section class="new-arrivals-products-area bg-gray section-padding-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- Section Heading -->
                <div class="section-heading text-center">
                    <h2>NEW ARRIVALS</h2>
                    <p>Produk terbaru dari kami untuk Anda.</p>
                </div>
            </div>
        </div>

        <div class="row">
            @foreach($products as $product)
            <!-- Single Product Area -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="single-product-area mb-50 wow fadeInUp" data-wow-delay="100ms">
                    <!-- Product Image -->
                    <div class="product-img">
                        <a href="{{ url('/shop/' . $product->slug) }}"><img src="{{ url('/storage/products/' . $product->image) }}" alt=""></a>
                        <!-- Product Tag -->
                        {!! $product->status_label !!}
                        <div class="product-meta d-flex">
                            <a href="#" class="wishlist-btn"><i class="icon_heart_alt"></i></a>
                            <a href="#" class="add-to-cart-btn">Add to cart</a>
                            <a href="#" class="compare-btn"><i class="arrow_left-right_alt"></i></a>
                        </div>
                    </div>
                    <!-- Product Info -->
                    <div class="product-info mt-15 text-center">
                        <a href="{{ url('/shop/' . $product->slug) }}">
                            <p>{{$product->name}}</p>
                        </a>
                        <h6>Rp {{number_format($product->price)}}</h6>
                    </div>
                </div>
            </div>
            @endforeach
            <div class="col-12 text-center">
                <a href="{{ url('/shop') }}" class="btn alazea-btn">View All</a>
            </div>

        </div>
    </div>
</section>
<!-- ##### Product Area End ##### -->

<!-- ##### Portfolio Area Start ##### -->
<section class="alazea-portfolio-area section-padding-100-0">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- Section Heading -->
                <div class="section-heading text-center">
                    <h2>OUR PORTFOLIO</h2>
                    <p>
                        Kami mencurahkan semua pengalaman dan upaya kami untuk menciptakan karya terbaik.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">

        <div class="row alazea-portfolio">
            @foreach($portfolios->take(8) as $portfolio)
            <!-- Single Portfolio Area -->
            <div class="col-12 col-sm-6 {{ $portfolio->size }} single_portfolio_item design home-design wow fadeInUp" data-wow-delay="100ms">
                <!-- Portfolio Thumbnail -->
                <div class="portfolio-thumbnail bg-img" style="background-image: url('{{ url('/storage/portfolios/'. $portfolio->image) }}');"></div>
                <!-- Portfolio Hover Text -->
                <div class="portfolio-hover-overlay">
                    <a href="{{ url('/storage/portfolios/'. $portfolio->image) }}" class="portfolio-img d-flex align-items-center justify-content-center" title="Portfolio 1">
                        <div class="port-hover-text">
                            <h3>{{ $portfolio->name }}</h3>
                        </div>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- ##### Portfolio Area End ##### -->

<!-- ##### Testimonial Area Start ##### -->
<section class="testimonial-area section-padding-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="testimonials-slides owl-carousel">

                    <!-- Single Testimonial Slide -->
                    <div class="single-testimonial-slide">
                        <div class="row align-items-center">
                            <div class="col-12 col-md-6">
                                <div class="testimonial-thumb">
                                    <img src="img/bg-img/13.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="testimonial-content">
                                    <!-- Section Heading -->
                                    <div class="section-heading">
                                        <h2>TESTIMONIAL</h2>
                                        <p>Kata klien tentang Annas Florist.</p>
                                    </div>
                                    <p>“Alazea is a pleasure to work with. Their ideas are creative, they came up with imaginative solutions to some tricky issues, their landscaping and planting contacts are equally excellent we have a beautiful but also manageable garden as a result. Thank you!”</p>
                                    <div class="testimonial-author-info">
                                        <h6>Mr. Nick Jonas</h6>
                                        <p>CEO of NAVATECH</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Single Testimonial Slide -->
                    <div class="single-testimonial-slide">
                        <div class="row align-items-center">
                            <div class="col-12 col-md-6">
                                <div class="testimonial-thumb">
                                    <img src="img/bg-img/14.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="testimonial-content">
                                    <!-- Section Heading -->
                                    <div class="section-heading">
                                        <h2>TESTIMONIAL</h2>
                                        <p>Kata klien tentang Annas Florist</p>
                                    </div>
                                    <p>“Alazea is a pleasure to work with. Their ideas are creative, they came up with imaginative solutions to some tricky issues, their landscaping and planting contacts are equally excellent we have a beautiful but also manageable garden as a result. Thank you!”</p>
                                    <div class="testimonial-author-info">
                                        <h6>Mr. Nazrul Islam</h6>
                                        <p>CEO of NAVATECH</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Single Testimonial Slide -->
                    <div class="single-testimonial-slide">
                        <div class="row align-items-center">
                            <div class="col-12 col-md-6">
                                <div class="testimonial-thumb">
                                    <img src="img/bg-img/15.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="testimonial-content">
                                    <!-- Section Heading -->
                                    <div class="section-heading">
                                        <h2>TESTIMONIAL</h2>
                                        <p>Kata klien tentang Annas Florist</p>
                                    </div>
                                    <p>“Alazea is a pleasure to work with. Their ideas are creative, they came up with imaginative solutions to some tricky issues, their landscaping and planting contacts are equally excellent we have a beautiful but also manageable garden as a result. Thank you!”</p>
                                    <div class="testimonial-author-info">
                                        <h6>Mr. Jonas Nick</h6>
                                        <p>CEO of NAVATECH</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Testimonial Area End ##### -->

<!-- ##### Subscribe Area Start ##### -->
<section class="subscribe-newsletter-area" style="background-image: url({{ asset('img/bg-img/subscribe.png') }});">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-12 col-lg-5">
                <!-- Section Heading -->
                <div class="section-heading mb-0">
                    <h2>Join the Newsletter</h2>
                    <p>Subscribe untuk mendapatkan informasi terbaru dari kami</p>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="subscribe-form">
                    <form action="#" method="get">
                        <input type="email" name="subscribe-email" id="subscribeEmail" placeholder="Enter your email">
                        <button type="submit" class="btn alazea-btn">SUBSCRIBE</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Subscribe Side Thumbnail -->
    <div class="subscribe-side-thumb wow fadeInUp" data-wow-delay="500ms">
        <img class="first-img" src="{{ asset('img/core-img/leaf.png') }}" alt="">
    </div>
</section>
<!-- ##### Subscribe Area End ##### -->

<!-- ##### Blog Area Start ##### -->
<section class="alazea-blog-area section-padding-100-0">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- Section Heading -->
                <div class="section-heading text-center">
                    <h2>LATEST NEWS</h2>
                    <p>Berita terkini dari Annas Florist.</p>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            @foreach($articles->take(3) as $article)
            <!-- Single Blog Post Area -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="single-blog-post mb-100">
                    <div class="post-thumbnail mb-30">
                        <a href="{{ url('/blog/' . $article->slug) }}"><img src="{{ url('/storage/articles/'. $article->thumbnail) }}" alt=""></a>
                    </div>
                    <div class="post-content">
                        <a href="{{ url('/blog/' . $article->slug) }}" class="post-title">
                            <h5>{{ $article->title }}</h5>
                        </a>
                        <div class="post-meta">
                            <a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i>{{ $article->updated_at->format('d-m-Y') }}</a>
                            <a href="#"><i class="fa fa-user" aria-hidden="true"></i> Shandi Putra</a>
                        </div>
                        <p class="post-excerpt">{{ $article->excerpt }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- ##### Blog Area End ##### -->

<!-- ##### Footer Area Start ##### -->
@include('layouts.footer')
<!-- ##### Footer Area End ##### -->

<!-- ##### All Javascript Files ##### -->
<!-- jQuery-2.2.4 js -->
<script src="{{ asset('js/jquery/jquery-2.2.4.min.js') }}"></script>
<!-- Popper js -->
<script src="{{ asset('js/bootstrap/popper.min.js') }}"></script>
<!-- Bootstrap js -->
<script src="{{ asset('js/bootstrap/bootstrap.min.js') }}"></script>
<!-- All Plugins js -->
<script src="{{ asset('js/plugins/plugins.js') }}"></script>
<!-- Active js -->
<script src="{{ asset('js/active.js') }}"></script>
</body>

</html>
