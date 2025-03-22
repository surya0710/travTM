@extends('backend.layouts.app')
@section('content')
<main id="main" class="main" style="min-height:100vh;">

    <div class="pagetitle">
        <h1>Service </h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Add Service </li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
        <div class="card">
            
            <div class="card-body">
              <h5 class="card-title">Add New Service </h5>

              <!-- Vertical Form -->
              <form class="row g-3" action="" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="col-12">
                  <label for="inputNanme4" class="form-label"> Name</label>
                  <input type="text" name="name" class="form-control" value="{{ old('name') }}" id="inputNanme4">
                  <div class="text-danger">{{ $errors->first('name') }}</div>
                </div>
                <!-- <div class="col-12">
                  <label for="inputPassword4" class="form-label">Slug</label>
                  <input type="text" name="slug" required class="form-control" value="{{ old('slug') }}" id="inputPassword4">
                  <div class="text-danger">{{ $errors->first('slug') }}</div>
                </div> -->
                <div class="col-6">
                    <label for="subcategory" class="form-label">Select Category</label>
                    <select class="form-control" name="category_id" id="ChangeCategory" required> 
                        <option value="">Select Category</option>
                        @foreach ($getCat as $category)
                            <option {{ (old('category_id') == $category->id) ? 'selected' : '' }} value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-6">
                    <label for="subcategory" class="form-label">Select Sub Category</label>
                    <select class="form-control" name="sub_category_id" id="getSubCategory" > 
                        <option value="">Select Sub Category</option>
                            <option value=""></option>
                    </select>
                </div>
                <div class="col-12">
                  <label for="inputEmail4" class="form-label">Title</label>
                  <input type="text" name="title" required class="form-control" value="{{ old('title') }}" id="inputEmail4">
                  <div class="text-danger">{{ $errors->first('title') }}</div>
                </div>
                <div class="col-12">
                    <label for="inputPassword4" class="form-label">Image (small) </label>
                    <input type="file" name="image_small" class="form-control" value="{{ old('image_small') }}">
                    <div class="text-danger">{{ $errors->first('image_small') }}</div>
                </div>
                <div class="col-12">
                    <label for="inputPassword4" class="form-label">Image</label>
                    <input type="file" name="image" class="form-control" value="{{ old('image') }}">
                    <div class="text-danger">{{ $errors->first('image') }}</div>
                </div>
                <div class="col-12">
                    <label class="form-label">Color Code</label>
                    <input type="color" name="color_code" class="form-control" value="{{ old('color_code') }}">
                    <div class="text-danger">{{ $errors->first('color_code') }}</div>
                </div>
                <div class="col-12">
                    <label class="form-label">Breadcrumb Description</label>
                    <input type="text" name="name_desc" class="form-control" value="{{ old('name_desc') }}">
                    <div class="text-danger">{{ $errors->first('name_desc') }}</div>
                </div>
                <div class="col-12">
                    <label for="inputPassword4" class="form-label">Description</label>
                    <textarea name="description" class="tinymce-editor" value="{{ old('description') }}" id="mce_0" rows="10">{{ old('description') }}</textarea>
                    <div class="text-danger">{{ $errors->first('description') }}</div>
                </div>
                <div class="col-12">
                  <label for="inputEmail4" class="form-label">Meta Title</label>
                  <input type="text" name="meta_title" required class="form-control" value="{{ old('meta_title') }}" id="inputEmail4">
                  <div class="text-danger">{{ $errors->first('meta_title') }}</div>
                </div>
                <div class="col-12">
                  <label for="inputEmail4" class="form-label">Meta Keywords</label>
                  <input type="text" name="meta_keywords" required class="form-control" value="{{ old('meta_keywords') }}" id="inputEmail4">
                  <div class="text-danger">{{ $errors->first('meta_keywords') }}</div>
                </div>
                <div class="col-12">
                  <label for="inputEmail4" class="form-label">Meta Description</label>
                  <input type="text" name="meta_description" required class="form-control" value="{{ old('meta_description') }}" id="inputEmail4">
                  <div class="text-danger">{{ $errors->first('meta_description') }}</div>
                </div>   
                <div class="col-12">
                    <label for="status">Status</label>
                    <select class="form-control" required  name="status">
                        <option>Select Status</option>
                        <option {{ (old('status') == 1) ? 'selected' : '' }} value="1">Active</option>
                        <option {{ (old('status') == 0) ? 'selected' : '' }} value="0">Deactive</option>
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
    $('body').delegate('#ChangeCategory', 'change', function(e){
      var id= $(this).val();
      $.ajax({
        type: "POST",
        url: "{{ url('panel/get_sub_category') }}",
        data: {
          "id": id,
          "_token": "{{ csrf_token() }}",

        },
        dataType: "json",
        success: function(data){
          $('#getSubCategory').html(data.html);
        },
        error: function(data){

        }
      });
    });
  </script>

@endsection