@extends('backend.layouts.app')
@section('content')
<main id="main" class="main" style="min-height:100vh;">

    <div class="pagetitle">
        <h1>Work Process </h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Edit Work Process </li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
        <div class="card">
        @include('layouts.message')
            <div class="card-body">
              <h5 class="card-title">Edit New Work Process </h5>

              <!-- Vertical Form -->
              <form class="row g-3" action="" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="col-md-12">
                  <label for="heading">Heading</label>
                  <input type="text" class="form-control" id="heading" name="heading" value="{{ $getRecord->title }}">
                  <div class="text-danger">{{$errors->first('title')}}</div>
                </div>
                <input type="hidden" value="{{$getRecord->sub_cat_id}}" id="page_id">
                <input type="hidden" value="{{$getRecord->service_id}}" id="ser_id">
                <div class="col-md-12">
                  <label for="description">Description</label>
                  <textarea class="form-control" id="description" name="description">{{ $getRecord->short_description }}</textarea>
                </div>
                <!--  -->
                <div class="row g-3">
                  <div class="col-4">
                      <label for="subcategory" class="form-label">Select Category</label>
                      <select class="form-control" name="category_id" id="ChangeCategory" required>
                          <option value="">Select Category</option>
                          @foreach ($getCat as $category)
                            <option {{ ($category->id == $getRecord->cat_id) ? 'selected' : '' }} value="{{ $category->id }}">{{ $category->name }}</option>
                          @endforeach
                      </select>
                      <div class="text-danger">{{ $errors->first('category_id') }}</div>
                  </div>
                  <div class="col-4">
                      <label for="subcategory" class="form-label">Select Sub Category</label>
                      <select class="form-control" name="sub_category_id" id="getSubCategory" > 
                          <option value="">Select Sub Category</option>
                              <option value=""></option>
                      </select>
                      <div class="text-danger">{{ $errors->first('sub_category_id') }}</div>
                  </div>
                  <div class="col-4">
                      <label for="getService" class="form-label">Select Service</label>
                      <select class="form-control" name="service" id="getService" > 
                          <option value="">Select Service</option>
                              <option value=""></option>
                      </select>
                      <div class="text-danger">{{ $errors->first('service') }}</div>
                  </div>
                </div>
                <div id="attr_box">
                @foreach ($getAttr as $index => $attr)
                  <div class="row align-items-center">
                    <div class="col-md-10">
                      
                      
                      <div class="row" id="attr_{{$index+1}}">                        
                        <div class="col-3">
                          <label for="inputEmail4" class="form-label">Order No.</label>
                          <input type="text" name="order[]" required class="form-control"  id="inputEmail4" value="{{ $attr->order_no}}">
                          <div class="text-danger">{{ $errors->first('order') }}</div>
                        </div>
                        
                        <div class="col-3">
                          <label for="inputEmail4" class="form-label">Title</label>
                          <input type="text" name="title[]" required class="form-control" value="{{ $attr->work_process_title }}"   id="inputEmail4">
                          <div class="text-danger">{{ $errors->first('title') }}</div>
                        </div>
                        <div class="col-3">
                            <label for="inputPassword4" class="form-label">Image</label>
                            <input type="file" name="image[]" class="form-control">
                            <div class="text-danger">{{ $errors->first('image') }}</div>
                            <img src="{{url('upload/workprocess/'.$attr->work_process_image)}}" width="100">
                        </div>
                        <div class="col-3">
                            <label for="inputPassword4" class="form-label">Content</label>
                            <textarea name="shortdesc[]" class="form-control"  id="inputPassword4" rows="2">{{$attr->work_process_desc}}</textarea>
                            <div class="text-danger">{{ $errors->first('shortdesc') }}</div>
                        </div>
                      </div>
                      
                    </div>
                    @if($index+1 == 1)
                    <div class="col-md-2">
                      <div class="d-flex justify-content-between">
                        <button class="btn btn-primary" type="button" onclick="addattri()" >Add</button>
                      </div>
                    </div>
                    @else
                    <div class="col-md-2">
                      <div class="d-flex justify-content-between">
                        <button class="btn btn-danger" type="button" onclick="removeattri({{ $index + 1 }} , {{ $attr->id }})" >Remove</button>
                      </div>
                    </div>
                    @endif
                  </div>
                  @endforeach
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
    $(window).on('load', function() {
      var id = $('#ChangeCategory').val(); // Reference the element directly
      var pg_id = $('#page_id').val();
      $.ajax({
        type: "POST",
        url: "{{ url('panel/get_edit_sub_category') }}",
        data: {
          "id": id,
          "pg_id": pg_id,
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
    $(window).on('load',function(){
      var id = $('#ChangeCategory').val(); // Reference the element directly
      var pg_id = $('#page_id').val();
      var ser_id = $('#ser_id').val();
      $.ajax({
        type: "POST",
        url: "{{ url('panel/edit_get_service') }}",
        data: {
          "id": pg_id,
          "ser_id": ser_id,
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
                    <input type="text" name="title[]" required class="form-control" id="inputEmail4">
                    <div class="text-danger">{{ $errors->first('title') }}</div>
                  </div>
                  <div class="col-3">
                    <label class="form-label">Image</label>
                    <input type="file" name="image[]" class="form-control">
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

    function removeattri(attr_count, id){
      jQuery.ajax({
        type: "POST",
        url: "{{ url('panel/remove_work_attr') }}",
        data: {
          id: id,
          _token: '{{ csrf_token() }}',
        },
        success: function(data) {
          jQuery('#attr_' + attr_count).remove();
        }
      });
    }
  </script>

@endsection