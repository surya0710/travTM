@extends('backend.layouts.app')
@section('content')
<main id="main" class="main" style="min-height:100vh;">

    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Account setting</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
        <div class="card">
            @include('layouts.message')
            <div class="card-body">
              <h5 class="card-title">Account setting</h5>

              <!-- Vertical Form -->
              <form class="row g-3" action="" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="col-12">
                  <label for="inputNanme4" class="form-label"> Name</label>
                  <input type="text" name="name" required class="form-control" value="{{ $getUser->name }}">
                </div>
                <div class="col-12">
                  <label class="form-label"> Name</label>
                  <input type="email" readonly class="form-control" disabled value="{{ $getUser->email }}"  >
                </div>
                <div class="col-12">
                  <label for="inputEmail4" class="form-label">Profile Image</label>
                  <input type="file" name="image"  class="form-control" id="inputEmail4">
                  <img src="{{ $getUser->getProfile() }}">
                </div>
                
                <div class="col-12">
                  <button type="submit" class="btn btn-primary">Update</button>
                </div>
              </form><!-- Vertical Form -->

            </div>
          </div>
           

        </div>
    </section>

</main><!-- End #main -->

@endsection