@include('layouts.header')
    <div class="blog-detail-container">
      <div class="blog-detail-header">
        <h1 class="blog-detail-title">
          {{ $pageContent->title }}
        </h1>
      </div>

      <div class="blog-detail-featured-image">
        <img src="{{ asset('upload/blog/'. $pageContent->image_file) }}" alt="Hidden Gems: Unexplored Destinations Worth Visiting" />
      </div>

      <div class="blog-detail-content">
        {!! $pageContent->description !!}
      </div>

      <div class="blog-detail-related">
        <h3>You might also enjoy</h3>
        <div class="blog-detail-related-posts">
          @foreach($latestBlogs as $blog)
          <a href="{{ route('blog.detail' , ['slug' => $blog->slug]) }}" class="blog-card" data-page="1">
            <div class="blog-image">
              <img src="{{ asset('upload/blog/' . $blog->image_file) }}" />
            </div>
            <div class="blog-content">
              <div class="blog-meta">
                <span class="blog-date">{{ $blog->created_at->format('M d, Y') }}</span>
              </div>
              <h3>{{ $blog->title }}</h3>
              <p>{{ Str::limit(strip_tags($blog->description), 150) }}</p>
              <span class="read-more"
                >Read More <i class="fas fa-arrow-right"></i
              ></span>
            </div>
          </a>
          @endforeach
        </div>
      </div>

      <div class="blog-detail-footer">
        <a href="{{ route('blog.index') }}" class="return-home-button">
          <i class="fas fa-arrow-left icon"></i>
          Back to All Posts
        </a>
      </div>
    </div>
@include('layouts.footer')