@extends('backend.layouts.app')
@section('content')
<main id="main" class="main" style="min-height:100vh;">

    <div class="pagetitle">
        <h1>Blog </h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{  route('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item active">Edit Blog </li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
        <div class="card">
            
            <div class="card-body">
              <h5 class="card-title">Edit New Blog </h5>

              <!-- Vertical Form -->
              <form class="row g-3" action="" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="col-12">
                  <label for="inputNanme4" class="form-label"> Title</label>
                  <input type="text" name="title" class="form-control" value="{{ $getRecord->title }}" id="inputNanme4">
                  <div class="text-danger">{{ $errors->first('title') }}</div>
                </div>
                
                <div class="col-12">
                    <label for="inputPassword4" class="form-label">Image</label>
                    <input type="file" name="image" class="form-control" value="{{ $getRecord->image }}">
                    <img src="{{ url('upload/blog/'.$getRecord->image_file) }}" width="100">
                    <div class="text-danger">{{ $errors->first('image') }}</div>
                </div>

                <div class="col-12">
                    <label for="inputPassword4" class="form-label">Description</label>
                    <div id="editor-container" style="height: 200px;"></div>
                    <textarea name="description" style="display: none;" id="content"></textarea>
                    <div class="text-danger">{{ $errors->first('description') }}</div>
                </div>
                <div class="col-12">
                  <label class="form-label">Tags</label>
                  @php
                  $tags= '';
                    foreach ($getRecord->getTag as $value){
                        $tags .= $value->name .',';
                    }
                  @endphp
                  <input type="text" name="tags" required class="form-control" value="{{ $tags  }}" id="tags">
                  <div class="text-danger">{{ $errors->first('tags') }}</div>
                </div>
                <div class="col-12">
                  <label for="inputEmail4" class="form-label">Meta Keywords</label>
                  <input type="text" name="meta_keywords" required class="form-control" value="{{ $getRecord->meta_keywords }}" id="inputEmail4">
                  <div class="text-danger">{{ $errors->first('meta_keywords') }}</div>
                </div>
                <div class="col-12">
                  <label for="inputEmail4" class="form-label">Meta Description</label>
                  <input type="text" name="meta_description" required class="form-control" value="{{ $getRecord->meta_description }}" id="inputEmail4">
                  <div class="text-danger">{{ $errors->first('meta_description') }}</div>
                </div>   
                <div class="col-12">
                    <label for="status">Status</label>
                    <select class="form-control" required  name="status">
                        <option>Select Status</option>
                        <option {{ ($getRecord->status == 1) ? 'selected' : '' }} value="1">Active</option>
                        <option {{ ($getRecord->status == 0) ? 'selected' : '' }} value="0">Deactive</option>
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
  <script src="{{url('admin/asset/tagsinput/bootstrap-tagsinput.js')}}"></script>
  
  <script type="text/javascript">
    $('#tags').tagsinput();

    quill.root.innerHTML = `{!! addslashes($getRecord->description) !!}`;
  </script>
@endsection