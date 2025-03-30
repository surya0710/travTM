@extends('backend.layouts.app')
@section('content')
<main id="main" class="main" style="min-height:100vh;">

    <div class="pagetitle">
        <h1>Sub Category</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Edit Sub Category</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
        <div class="card">
            
            <div class="card-body">
              <h5 class="card-title">Edit Sub Category</h5>

              <!-- Vertical Form -->
              <form class="row g-3" action="" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="col-12">
                  <label for="inputNanme4" class="form-label"> Name</label>
                  <input type="text" name="name" class="form-control" value="{{ $getSingle->name }}" id="inputNanme4">
                  <div class="text-danger">{{ $errors->first('name') }}</div>
                </div>
                <div class="col-12">
                  <label for="inputPassword4" class="form-label">Slug</label>
                  <input type="text" name="slug" required class="form-control" value="{{ $getSingle->slug }}" id="inputPassword4">
                  <div class="text-danger">{{ $errors->first('slug') }}</div>
                </div>
                <div class="col-12">
                    <label for="subcategory" class="form-label">Select Category</label>
                    <select class="form-control" name="category_id" id="subcategory" required> 
                        <option value="">Select Category</option>
                        @foreach ($getCat as $category)
                            <option {{ ($category->id == $getSingle->category_id) ? 'selected' : '' }} value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-12">
                  <label for="inputEmail4" class="form-label">Title</label>
                  <input type="text" name="title" required class="form-control" value="{{ $getSingle->title }}" id="inputEmail4">
                  <div class="text-danger">{{ $errors->first('title') }}</div>
                </div>
                <div class="col-12">
                    <label class="form-label">Image</label>
                    <input type="file" name="image" class="form-control" value="{{ $getSingle->image }}" id="image">
                    <div class="text-danger">{{ $errors->first('image') }}</div>
                    @if (!empty($getSingle->image))
                        <img src="{{ url('upload/subcategory/'.$getSingle->image) }}" width="100" />
                    @endif
                </div>
                <div class="col-12">
                  <label class="form-label">Breadcrumb Content</label>
                  <input type="text" name="name_desc" required class="form-control" value="{{ $getSingle->name_desc }}">
                  <div class="text-danger">{{ $errors->first('name_desc') }}</div>
                </div>
                <div class="col-12">
                    <label for="inputPassword4" class="form-label">Description</label>
                    <div id="editor-container" style="height: 200px;"></div>
                    <textarea name="description" style="display:none" value="" id="content"></textarea>
                    <div class="text-danger">{{ $errors->first('description') }}</div>
                </div>
                <div class="col-12">
                  <label for="inputEmail4" class="form-label">Meta Title</label>
                  <input type="text" name="meta_title" required class="form-control" value="{{ $getSingle->meta_title }}" id="inputEmail4">
                  <div class="text-danger">{{ $errors->first('meta_title') }}</div>
                </div>
                <div class="col-12">
                  <label for="inputEmail4" class="form-label">Meta Keywords</label>
                  <input type="text" name="meta_keywords" required class="form-control" value="{{ $getSingle->meta_keywords }}" id="inputEmail4">
                  <div class="text-danger">{{ $errors->first('meta_keywords') }}</div>
                </div>
                <div class="col-12">
                  <label for="inputEmail4" class="form-label">Meta Description</label>
                  <input type="text" name="meta_description" required class="form-control" value="{{ $getSingle->meta_description }}" id="inputEmail4">
                  <div class="text-danger">{{ $errors->first('meta_description') }}</div>
                </div>   
                <div class="col-12">
                    <label for="status">Status</label>
                    <select class="form-control" required  name="status">
                        <option>Select Status</option>
                        <option {{ ($getSingle->status == 1) ? 'selected' : '' }} value="1">Active</option>
                        <option {{ ($getSingle->status == 0) ? 'selected' : '' }} value="0">Deactive</option>
                    </select>
                </div>
                <div class="col-12">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form><!-- Vertical Form -->

            </div>
          </div>
           

        </div>
    </section>

</main><!-- End #main -->

@endsection
@section('script')
<script type="text/javascript">
    $('#tags').tagsinput();

    quill.root.innerHTML = `{!! addslashes($getSingle->description) !!}`;
</script>
@endsection