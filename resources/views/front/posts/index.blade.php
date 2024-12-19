@extends('layouts.frontend.app')

@section('title', 'Blogs | Sistem Pakar Diagnosa Penyakit Ginjal')

@section('content')

<!--Page Title-->
<section class="page-title bg-color-1 text-center">
    <div class="pattern-layer" style="background-image: url({{ asset('assets/frontend') }}/images/shape/pattern-18.png);"></div>
    <div class="auto-container">
        <div class="content-box">
            <h1>Blog Expert System</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="/">Home</a></li>
                <li>Blog</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->


<!-- sidebar-page-container -->
<section class="sidebar-page-container">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                <div class="blog-grid-content">

                    @foreach ($posts as $post)
                        
                        <div class="news-block-one wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="image-holder">
                                    <figure class="image-box">
                                        <img src="{{ asset('storage/posts/' . $post->image) }}" alt="">
                                    </figure>
                                    <div class="post-date">
                                        <i class="fas fa-calendar-alt"></i>
                                        <p>{{ $post->created_at->diffForHumans() }}</p>
                                    </div>
                                    <div class="link">
                                        <a href="/blog/{{ $post->slug }}">
                                            <i class="fas fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="lower-content">
                                    <ul class="post-info">
                                        <li><i class="fas fa-user"></i>&nbsp; {{ $post->user->name }}</li>
                                        <li><a href="/blog/{{ $post->slug }}">{{ $post->comments->count() }} Comments</a></li>
                                    </ul>
                                    <h3><a href="/blog/{{ $post->slug }}">{{ $post->title }}</a></h3>
                                    <p>{!! substr($post->content, 0, 200) !!}</p>
                                </div>
                            </div>
                        </div>

                    @endforeach

                    <div class="mt-5">
                        {{ $posts->links('pagination::simple-tailwind') }}
                    </div>
                    
                </div>
            </div>
            
            @include('front.posts.partials.component')

        </div>
    </div>
</section>
<!-- sidebar-page-container end -->

@endsection