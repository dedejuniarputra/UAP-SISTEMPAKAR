<div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
    <div class="sidebar">
        <div class="sidebar-widget sidebar-search">
            <div class="widget-title">
                <h3>Search</h3>
            </div>

            <div class="widget-content">
                <form action="/search" method="get">
                    <div class="form-group">
                        <input type="search" name="query" placeholder="Search">
                        <button type="submit"><i class="fas fa-search"></i></button>
                    </div>
                </form>
            </div>
        </div>

        
        <div class="sidebar-widget sidebar-categories">
            <div class="widget-title">
                <h3>Categories</h3>
            </div>
            <div class="widget-content">
                <ul class="clearfix">
                    @foreach ($categories as $category)
                    <li><a href="/category/{{ $category->slug }}">{{ $category->name }}<span>({{ $category->posts->count() }})</span></a></li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="sidebar-widget sidebar-post">
            <div class="widget-title">
                <h3>Latest News</h3>
            </div>
            <div class="post-inner">

                @foreach ($posts as $post)
                    
                    <div class="post">
                        <figure class="image-box">
                            <a href="blog-details.html">
                                <img src="{{ asset('storage/posts/' . $post->image) }}" alt="">
                            </a>
                        </figure>
                        <div class="post-date">
                            <i class="far fa-calendar-alt"></i>
                            &nbsp;<p>{{ $post->created_at->diffForHumans() }}</p>
                        </div>
                        <h5>
                            <a href="/blog/{{ $post->slug }}">{{ substr($post->title, 0, 30) }}</a>
                        </h5>
                    </div>
                
                @endforeach

            </div>
        </div>
        <div class="sidebar-widget sidebar-tags">
            <div class="widget-title">
                <h3>Popular Tags</h3>
                <div class="widget-content">
                    <ul class="clearfix">
                        @foreach ($tags as $tag)
                        <li><a href="/tag/{{ $tag->slug }}">{{ $tag->name }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>