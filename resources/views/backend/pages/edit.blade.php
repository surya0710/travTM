@extends('backend.layouts.app')
@section('content')
<main id="main" class="main" style="min-height:100vh;">

    <div class="pagetitle">
        <h1>Pages </h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item active">Edit Page</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
        <div class="card">
            <div class="card-body">
              <h5 class="card-title">Edit Page </h5>
              <form class="row g-3" action="" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="col-6">
                  <label for="inputNanme4" class="form-label">Name</label>
                  <input type="text" name="name" class="form-control" value="{{ $page->name ?? old('name') }}" id="inputNanme4">
                  <div class="text-danger">{{ $errors->first('name') }}</div>
                </div>
                <div class="col-6">
                  <label for="inputNanme4" class="form-label">Title</label>
                  <input type="text" name="title" class="form-control" value="{{ $page->title ?? old('title') }}" id="inputNanme4">
                  <div class="text-danger">{{ $errors->first('title') }}</div>
                </div>

                <div class="col-6">
                    <label for="inputUrl4" class="form-label">Slug</label>
                    <input type="text" name="slug" class="form-control" value="{{ $page->slug ?? old('slug') }}" id="inputUrl4">
                    <div class="text-danger">{{ $errors->first('slug') }}</div>
                </div>
                <div class="col-6">
                    <label for="inputMetaKeywords4" class="form-label">Meta Keywords</label>
                    <input type="text" name="meta_keywords" class="form-control" value="{{ $page->meta_keywords ?? old('meta_keywords') }}" id="inputMetaKeywords4">
                    <div class="text-danger">{{ $errors->first('meta_keywords') }}</div>
                </div>
                <div class="col-6">
                    <label for="inputMetaDescription4" class="form-label">Meta Description</label>
                    <textarea name="meta_description" class="form-control" id="inputMetaDescription4">{{ $page->meta_description ?? old('meta_description') }}</textarea>
                    <div class="text-danger">{{ $errors->first('meta_description') }}</div>
                </div>
                <div class="col-6">
                    <label for="inputMetaImage4" class="form-label">Meta Image</label>
                    <input type="file" name="meta_image" class="form-control" accept=".png, .jpg, .jpeg">
                    <img src="{{ asset('uploads/'.$page->meta_image) }}" alt="" height="50" width="50">
                    <div class="text-danger">{{ $errors->first('meta_image') }}</div>
                </div>
                
                <div class="col-6">
                  <label for="inputEmail4" class="form-label">Image</label>
                  <input type="file" name="image" class="form-control" accept=".png, .jpg, .jpeg">
                  <img src="{{ asset('uploads/'.$page->image) }}" alt="" height="50" width="50">
                  <div class="text-danger">{{ $errors->first('image') }}</div>
                </div>
                <div class="col-6">
                  <label for="status" class="form-label">Status</label>
                  <select class="form-control" name="status">
                    <option value="1" {{ $page->status == 1 ? 'selected' : '' }}>Active</option>
                    <option value="0" {{ $page->status == 0 ? 'selected' : '' }}>Deactive</option>
                  </select>
                  <div class="text-danger">{{ $errors->first('status') }}</div>
                </div>
                <div class="col-12" id="sections">
                  @php $contents = json_decode($page->content); @endphp
                  @foreach($contents as $content)
                    <div class="col-12 @if($loop->index > 0) mt-4 @endif">
                        <input type="text" name="heading[]" class="form-control" value="{{ htmlspecialchars($content->heading) }}" placeholder="Heading">
                        <textarea name="description[]" class="form-control mt-2" placeholder="Description" rows="5">{{ htmlspecialchars($content->description) }}</textarea>
                      </div>
                  @endforeach
                </div>
                <div class="col-12">
                  <button type="button" class="btn btn-secondary float-end" onclick="addSection()">Add More Sections</button>
                </div>
                <div class="col-12">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>

            </div>
          </div>
           

        </div>
    </section>

</main><!-- End #main -->

@endsection
@section('script')
<script type="text/javascript">
    $('#tags').tagsinput();

    function addSection() {
        $('#sections').append(`
          <div class="col-12 mt-4">
            <input type="text" name="heading[]" class="form-control" placeholder="Heading">
            <textarea name="description[]" class="form-control mt-2" placeholder="Description" rows="5"></textarea>
          </div>
        `);
    }
</script>
@endsection