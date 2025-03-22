@extends('backend.layouts.app')
@section('content')
<main id="main" class="main" style="min-height:100vh;">

    <div class="pagetitle">
        <h1>Work Process </h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Add Work Process </li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
        <div class="card">
        @include('layouts.message')
            <div class="card-body">
              <h5 class="card-title">Add New Work Process </h5>

              <!-- Vertical Form -->
              <form class="row g-3" action="" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="col-md-12">
                  <label for="heading">Heading</label>
                  <input type="text" class="form-control" id="heading" name="heading">
                </div>
                <div class="col-md-12">
                  <label for="description">Description</label>
                  <textarea class="form-control" id="description" name="description"></textarea>
                </div>
                <div class="row g-3">
                  <div class="col-4">
                      <label for="subcategory" class="form-label">Select Category</label>
                      <select class="form-control" name="category_id" id="ChangeCategory" required> 
                          <option value="">Select Category</option>
                          @foreach ($getCat as $category)
                              <option {{ (old('category_id') == $category->id) ? 'selected' : '' }} value="{{ $category->id }}">{{ $category->name }}</option>
                          @endforeach
                      </select>
                  </div>
                  <div class="col-4">
                      <label for="subcategory" class="form-label">Select Sub Category</label>
                      <select class="form-control" name="sub_category_id" id="getSubCategory" > 
                          <option value="">Select Sub Category</option>
                              <option value=""></option>
                      </select>
                  </div>
                  <div class="col-4">
                      <label for="getService" class="form-label">Select Service</label>
                      <select class="form-control" name="service" id="getService" > 
                          <option value="">Select Service</option>
                              <option value=""></option>
                      </select>
                  </div>
                </div>
                <div id="attr_box">
                  <div class="row align-items-center">
                    <div class="col-md-10">
                      <div class="row">
                        <div class="col-3">
                          <label for="inputEmail4" class="form-label">Order No.</label>
                          <input type="text" name="order[]" required class="form-control"  id="inputEmail4">
                          <div class="text-danger">{{ $errors->first('order') }}</div>
                        </div>
                        <div class="col-3">
                          <label for="inputEmail4" class="form-label">Title</label>
                          <input type="text" name="title[]" required class="form-control"   id="inputEmail4">
                          <div class="text-danger">{{ $errors->first('title') }}</div>
                        </div>
                        <div class="col-3">
                            <label for="inputPassword4" class="form-label">Image</label>
                            <input type="file" name="image[]" class="form-control"  >
                            <div class="text-danger">{{ $errors->first('image') }}</div>
                        </div>
                        <div class="col-3">
                            <label for="inputPassword4" class="form-label">Content</label>
                            <textarea name="shortdesc[]" class="form-control"  id="inputPassword4" rows="2"></textarea>
                            <div class="text-danger">{{ $errors->first('shortdesc') }}</div>
                        </div>
                        
                      </div>
                    </div>
                    <div class="col-md-2">
                      <div class="d-flex justify-content-between">
                        <button class="btn btn-primary" type="button" onclick="addattri()" >Add</button>
                      </div>
                    </div>
                  </div>
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
  <script type="text/javascript">
    $('body').delegate('#getSubCategory', 'change', function(e){
      var id= $(this).val();
      $.ajax({
        type: "POST",
        url: "{{ url('panel/get_service') }}",
        data: {
          "id": id,
          "_token": "{{ csrf_token() }}",

        },
        dataType: "json",
        success: function(data){
          $('#getService').html(data.html);
        },
        error: function(data){

        }
      });
    });
  </script>
  <script>
    attr_count= 1;
    function addattri(){
      attr_count++;

      var html = `
            <div class="row align-items-center" id= "attr_${attr_count}">
              <div class="col-md-10">
                <div class="row">
                  <div class="col-3">
                    <label for="inputEmail4" class="form-label">Order No.</label>
                    <input type="text" name="order[]" required class="form-control"  id="inputEmail4">
                    <div class="text-danger">{{ $errors->first('order') }}</div>
                  </div>
                  <div class="col-3">
                    <label for="inputEmail4" class="form-label">Title</label>
                    <input type="text" name="title[]" required class="form-control"  id="inputEmail4">
                    <div class="text-danger">{{ $errors->first('title') }}</div>
                  </div>
                  <div class="col-3">
                    <label for="inputPassword4" class="form-label">Image</label>
                    <input type="file" name="image[]" class="form-control" >
                    <div class="text-danger">{{ $errors->first('image') }}</div>
                  </div>
                  <div class="col-3">
                    <label for="inputPassword4" class="form-label">Content</label>
                    <textarea name="shortdesc[]" class="form-control" id="inputPassword4" rows="2"></textarea>
                    <div class="text-danger">{{ $errors->first('shortdesc') }}</div>
                  </div>
                </div>
              </div>
              <div class="col-md-2">
                <div class="d-flex justify-content-between">
                  <button class="btn btn-danger" type="button" onclick="removeattri(${attr_count})">Remove</button>
                </div>
              </div>
            </div>`;


      jQuery('#attr_box').append(html);
    }

    function removeattri(attr_count){
      jQuery('#attr_' + attr_count).remove();
    }
  </script>

@endsection