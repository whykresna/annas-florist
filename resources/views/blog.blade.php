@extends('layouts.master')

@section('title')
    Blog
@endsection

@section('content')
    @if($articles->count() > 0)
    <!-- ##### Blog Area Start ##### -->
    <section class="alazea-blog-area mb-100">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-8">
                    <div class="row">
                        @foreach($articles as $article)
                        <!-- Single Blog Post Area -->
                            <div class="col-12 col-lg-6">
                                <div class="single-blog-post mb-50">
                                    <div class="post-thumbnail mb-30">
                                        <a href={{ url('/blog/' . $article->slug) }}><img src="{{ url('/storage/articles/'. $article->thumbnail) }}" alt=""></a>
                                    </div>
                                    <div class="post-content">
                                        <a href={{ url('/blog/' . $article->slug) }} class="post-title">
                                            <h5>{{ $article->title }}</h5>
                                        </a>
                                        <div class="post-meta">
                                            <a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i> {{ $article->updated_at->format('d-m-Y') }}</a>
                                            <a href="#"><i class="fa fa-user" aria-hidden="true"></i> Shandi Putra</a>
                                        </div>
                                        <p class="post-excerpt">{{ $article->excerpt }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <nav aria-label="Page navigation">
                                <ul class="pagination">
                                    {{ $articles->links() }}
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-4">
                    <div class="post-sidebar-area">

                        <!-- ##### Single Widget Area ##### -->
                        <div class="single-widget-area">
                            <form action="#" method="get" class="search-form">
                                <input type="search" name="search" id="widgetsearch" placeholder="Search...">
                                <button type="submit"><i class="icon_search"></i></button>
                            </form>
                        </div>

                        <!-- ##### Single Widget Area ##### -->
                        <div class="single-widget-area">
                            <!-- Title -->
                            <div class="widget-title">
                                <h4>Recent post</h4>
                            </div>
                        @foreach($articles->take(4) as $article)
                            <!-- Single Latest Posts -->
                                <div class="single-latest-post d-flex align-items-center">
                                    <div class="post-thumb">
                                        <img src="{{ url('/storage/articles/'. $article->thumbnail) }}" alt="">
                                    </div>
                                    <div class="post-content">
                                        <a href="{{ url('/blog/' . $article->slug) }}" class="post-title">
                                            <h6>{{ $article->title }}</h6>
                                        </a>
                                        <a href="#" class="post-date">{{ $article->updated_at->format('d-m-Y') }}</a>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <!-- ##### Single Widget Area ##### -->
{{--                        <div class="single-widget-area">--}}
{{--                            <!-- Title -->--}}
{{--                            <div class="widget-title">--}}
{{--                                <h4>BEST SELLER</h4>--}}
{{--                            </div>--}}

{{--                            <!-- Single Best Seller Products -->--}}
{{--                            <div class="single-best-seller-product d-flex align-items-center">--}}
{{--                                <div class="product-thumbnail">--}}
{{--                                    <a href="shop-details.html"><img src="img/bg-img/4.jpg" alt=""></a>--}}
{{--                                </div>--}}
{{--                                <div class="product-info">--}}
{{--                                    <a href="shop-details.html">Cactus Flower</a>--}}
{{--                                    <p>$10.99</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <!-- Single Best Seller Products -->--}}
{{--                            <div class="single-best-seller-product d-flex align-items-center">--}}
{{--                                <div class="product-thumbnail">--}}
{{--                                    <a href="shop-details.html"><img src="img/bg-img/5.jpg" alt=""></a>--}}
{{--                                </div>--}}
{{--                                <div class="product-info">--}}
{{--                                    <a href="shop-details.html">Tulip Flower</a>--}}
{{--                                    <p>$11.99</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <!-- Single Best Seller Products -->--}}
{{--                            <div class="single-best-seller-product d-flex align-items-center">--}}
{{--                                <div class="product-thumbnail">--}}
{{--                                    <a href="shop-details.html"><img src="img/bg-img/34.jpg" alt=""></a>--}}
{{--                                </div>--}}
{{--                                <div class="product-info">--}}
{{--                                    <a href="shop-details.html">Recuerdos Plant</a>--}}
{{--                                    <p>$9.99</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                        </div>--}}
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- ##### Blog Area End ##### -->
    @endif
@endsection
