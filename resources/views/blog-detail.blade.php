@extends('layouts.master')

@section('title')
    Blog
@endsection

@section('content')
    <!-- ##### Blog Content Area Start ##### -->
    <section class="blog-content-area section-padding-0-100">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Blog Posts Area -->
                <div class="col-12">
                    <div class="blog-posts-area">

                        <!-- Post Details Area -->
                        <div class="single-post-details-area">
                            <div class="post-content">
                                <h4 class="post-title">{{ $article->title }}</h4>
                                <div class="post-meta mb-30">
                                    <a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i> {{ $article->updated_at->format('d-m-Y') }}</a>
                                    <a href="#"><i class="fa fa-user" aria-hidden="true"></i> Shandi Putra</a>
                                </div>
                                <div class="post-thumbnail mb-30">
                                    <img src="{{ url('/storage/articles/'. $article->thumbnail) }}" alt="">
                                </div>
                                {!! $article->detail !!}
                            </div>
                        </div>

                        <!-- Post Tags & Share -->
                        <div class="post-tags-share d-flex justify-content-between align-items-center">
                            <!-- Share -->
                            <div class="post-share">
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Blog Content Area End ##### -->
@endsection
