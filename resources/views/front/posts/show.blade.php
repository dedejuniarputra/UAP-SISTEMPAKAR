@extends('layouts.frontend.app')

@section('title')
{{ $post->title }}
@endsection

@section('content')

<!--Page Title-->
<section class="page-title bg-color-1 text-center">
    <div class="pattern-layer" style="background-image: url(assets/images/shape/pattern-18.png);"></div>
    <div class="auto-container">
        <div class="content-box">
            <h1>Blog Details</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="/">Home</a></li>
                <li>Blog Details</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->


<!-- blog-details -->
<section class="sidebar-page-container blog-details">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                <div class="blog-details-content">
                    <div class="news-block-one">
                        <div class="inner-box">
                            <div class="image-holder">
                                <figure class="image-box">
                                    <img src="{{ asset('storage/posts/' . $post->image) }}" alt="">
                                </figure>
                                <div class="post-date">
                                    <i class="fas fa-calendar-alt"></i>
                                    <p>{{ $post->created_at->diffForHumans() }}</p>
                                </div>
                            </div>
                            <div class="lower-content">
                                <div class="upper-box">
                                    <ul class="post-info">
                                        <li><i class="fas fa-user"></i>&nbsp; {{ $post->user->name }}</li>
                                        <li>{{ $post->comments->count() }} Comments</li>
                                    </ul>
                                    <h3>{{ $post->title }}</h3>
                                    <div class="text">
                                        <p>{!! $post->content !!}</p>
                                    </div>
                                </div>
                                
                                <div class="post-share-option">
                                    <ul class="tags-list clearfix">
                                        <li><h5>Tags:</h5></li>
                                        @foreach ($post->tags as $tag)
                                        <li><a href="/tag/{{ $tag->slug }}" class="badge badge-primary text-white">{{ $tag->name }}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="comments-area">
                        <div class="group-title">
                            <h3>Comments <span class="badge badge-primary">{{ $post->comments->count() }}</span></h3>
                        </div>

                        @foreach ($post->comments as $comment)
                            
                        <div class="comment-box">
                            <div class="comment">
                                <figure class="thumb-box">
                                    <img src="{{ asset('storage/users/' . $comment->user->image) }}" alt="">
                                </figure>
                                <div class="comment-inner">
                                    <div class="clearfix">
                                        <div class="comment-info pull-left">
                                            <h5>{{ $comment->user->name }}</h5>
                                            <span class="comment-time">Publish {{ $comment->created_at->diffForHumans() }}</span>
                                        </div>
                                    </div>
                                    <div class="text">{{ $comment->comment }}</div>
                                </div>
                            </div>
                        </div>

                        @endforeach
                        
                    </div>
                    <div class="comments-form-area">
                        <div class="group-title">
                            <h3>Leave a Comment</h3>
                        </div>
                        <form action="{{ url('blog/comments/' . $post->id) }}" method="post" class="comment-form default-form">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <textarea name="comment" class="@error('comment') is-invalid @enderror" placeholder="Your Comment here..."></textarea>
                                    @error('comment')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn">
                                    @guest
                                    <a href="/login" class="theme-btn style-one">Comment</a>
                                    @else
                                    <button type="submit" class="theme-btn style-one">Comment</a>
                                    @endguest
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            
            @include('front.posts.partials.component')

        </div>
    </div>
</section>
<!-- blog-details end -->

@endsection