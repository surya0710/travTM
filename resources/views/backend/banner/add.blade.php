@extends('backend.layouts.app')
@section('content')
<main id="main" class="main" style="min-height:100vh;">

    <div class="pagetitle">
        <h1>Banners </h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{  route('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item active">Add Banner </li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
        <div class="card">
            
            <div class="card-body">
              <h5 class="card-title">Add New Banner </h5>

              <!-- Vertical Form -->
              <form class="row g-3" action="" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="col-12">
                  <label for="inputNanme4" class="form-label"> Heading</label>
                  <input type="text" name="heading" class="form-control" value="{{ old('heading') }}" id="inputNanme4">
                  <div class="text-danger">{{ $errors->first('heading') }}</div>
                </div>
                
                <div class="col-12">
                    <label for="inputPassword4" class="form-label">Image</label>
                    <input type="file" name="image" class="form-control" value="{{ old('image') }}" required>
                    <div class="text-danger">{{ $errors->first('image') }}</div>
                </div>
                <div class="col-12">
                    <label for="inputPassword4" class="form-label">Description</label>
                    <textarea name="description" class="form-control" value="{{ old('description') }}" rows="3">{{ old('description') }}</textarea>
                    <div class="text-danger">{{ $errors->first('description') }}</div>
                </div>
                <div class="col-12">
                    <label for="inputPassword4" class="form-label">Display On</label>
                    <select class="form-control" required  name="display_page">
                        <option>Select Page</option>
                        <option {{ (old('display_page') == 'home') ? 'selected' : '' }} value="home">Home</option>
                        <option {{ (old('display_page') == 'about') ? 'selected' : '' }} value="about">About</option>
                        <option {{ (old('display_page') == 'contact') ? 'selected' : '' }} value="contact">Contact</option>
                    </select>
                    <div class="text-danger">{{ $errors->first('display_page') }}</div>
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