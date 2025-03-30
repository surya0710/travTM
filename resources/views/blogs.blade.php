@include('layouts.header')
    <!-- Blog Highlights Section -->
    <section class="blog-section section-padding blog-section-margin mt-100">
      <div class="container">
        <div class="blog-header">
          <div>
            <h2>Latest from Our Blog</h2>
            <p>
              Travel stories, tips, and insights to inspire your next adventure.
            </p>
          </div>
        </div>

        <div class="blog-grid" id="blogGrid">
          <!-- Blog cards go here -->
          @foreach($blogs as $blog)
          <a href="{{ route('blog.detail' , ['slug' => $blog->slug]) }}" class="blog-card" data-page="1">
            @if($blog->image_file != null)
            <div class="blog-image">
              <img src="{{  asset('upload/blog/' . $blog->image_file) }}" alt="{{  $blog->title }}" />
            </div>
            @endif
            <div class="blog-content">
              <div class="blog-meta">
                <!-- <span class="blog-category">Travel Tips</span> -->
                <span class="blog-date">{{ $blog->created_at->format('M d, Y') }}</span>
              </div>
              <h3>{{ $blog->title }}</h3>
              <p>{{ Str::limit(strip_tags($blog->description), 150) }}</p>
              <span class="read-more">Read More <i class="fas fa-arrow-right"></i></span>
            </div>
          </a>
          @endforeach
        </div>

        <!-- Pagination Controls -->
        <div class="pagination" id="pagination">
          <!-- Pagination buttons will be added here dynamically -->
           {{  $blogs->links() }}
        </div>
      </div>
    </section>
@include('layouts.footer2')