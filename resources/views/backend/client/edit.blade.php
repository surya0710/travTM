@extends('backend.layouts.app')
@section('content')
<main id="main" class="main" style="min-height:100vh;">

    <div class="pagetitle">
        <h1>Clients</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Edit Clients</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
        <div class="card">
            
            <div class="card-body">
              <h5 class="card-title">Edit New Clients</h5>

              <!-- Vertical Form -->
              <form class="row g-3" action="" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="col-12">
                  <label for="inputNanme4" class="form-label"> Name</label>
                  <input type="text" name="name" required class="form-control" value="{{ $getRecord->name }}" id="inputNanme4">
                  <div class="text-danger">{{ $errors->first('name') }}</div> 
                </div>
                <div class="col-12">
                  <label class="form-label">Image</label>
                    <input type="file" name="image" class="form-control" value="{{ $getRecord->image }}" required>
                    <div class="text-danger">{{ $errors->first('image') }}</div>
                    @if (!empty($getRecord->image))
                        <img src="{{ asset('upload/clients/'.$getRecord->image) }}" width="100">
                    @endif
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