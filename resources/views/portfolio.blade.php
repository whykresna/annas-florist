@extends('layouts.master')

@section('title')
    Portfolio
@endsection

@section('content')
    @if($portfolios->count() > 0)
    <!-- ##### Portfolio Area Start ##### -->
    <section class="alazea-portfolio-area portfolio-page section-padding-0-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section Heading -->
                    <div class="section-heading text-center">
                        <h2>OUR PORTFOLIO</h2>
                        <p>Kami mencurahkan semua pengalaman dan upaya kami untuk menciptakan karya terbaik.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row alazea-portfolio">
                @foreach($portfolios as $portfolio)
                <!-- Single Portfolio Area -->
                <div class="col-12 col-sm-6 {{ $portfolio->size }} single_portfolio_item design home-design">
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
    @endif
@endsection
