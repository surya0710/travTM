@extends('backend.layouts.app')
@section('content')
<main id="main" class="main" style="min-height:100vh;">

    <div class="pagetitle">
        <h1>Category</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Add Category</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
        <div class="card">
            
            <div class="card-body">
              <h5 class="card-title">Add New Category</h5>

              <!-- Vertical Form -->
              <form class="row g-3" action="" method="post">
                {{csrf_field()}}
                <div class="col-12">
                  <label for="inputNanme4" class="form-label"> Name</label>
                  <input type="text" name="name" required class="form-control" value="{{ old('name') }}" id="inputNanme4">
                  <div class="text-danger">{{ $errors->first('name') }}</div> 
                </div>
                <div class="col-12">
                  <label for="image" class="form-label">Image</label>
                  <input type="file" name="image" required class="form-control" accept=".png, .jpg, .jpeg">
                  <div class="text-danger">{{ $errors->first('image') }}</div>
                </div>
                <div class="col-12">
                  <label for="inputEmail4" class="form-label">Title</label>
                  <input type="text" name="title" required class="form-control" value="{{ old('title') }}" id="inputEmail4">
                  <div class="text-danger">{{ $errors->first('title') }}</div>
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
                  <textarea name="meta_description" required class="form-control" id="inputEmail4">
                    {{ old('meta_description') }}
                  </textarea>
                  <div class="text-danger">{{ $errors->first('meta_description') }}</div>
                </div>   
                <div class="col-12">
                    <label for="status">Is Menu</label>
                    <select class="form-control" required  name="is_menu">
                        <option {{ (old('is_menu') == 1) ? 'selected' : '' }} value="1">Yes</option>
                        <option {{ (old('is_menu') == 0) ? 'selected' : '' }} value="0">No</option>
                    </select>
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