@extends('backend.layouts.app')
@section('content')
<main id="main" class="main" style="min-height: 100vh;">

    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">

        <div class="card">
        @include('layouts.message')
            <div class="card-body">
                <div class="d-flex justify-content-between  align-items-center">
              <h5 class="card-title">Blog list</h5>
                <a href="{{url('panel/banners/add')}}" class="btn btn-primary d-inline">Add New</a>
                </div>
              <!-- Table with stripped rows -->
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Heading</th>
                    <th scope="col">Desciption</th>
                    <th scope="col">Image</th>
                    <th scope="col">Display Page</th>
                    <th scope="col">Status</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($banners as $banner)
                    <tr>
                        <th scope="row">{{$loop->index + 1 }}</th>
                        <td>{{$banner->heading}}</td>
                        <td>{{ strip_tags($banner->description) }}</td>
                        <td><img src="{{asset('images/banners/'.$banner->image)}}" width="100px" height="50px"></td>
                        <td>{{$banner->display_page}}</td>
                        <td>{{($banner->status == 1) ? 'Active' : 'Inactive' }}</td>
                        <td>{{$banner->created_at->diffForHumans()}}</td>
                        <td>
                            <a href="{{url('panel/banner/edit/'.$banner->id)}}" class="btn btn-primary btn-sm">Edit</a>
                            <a onclick="return confirm('Are you sure want to delete?');" href="{{url('panel/banner/delete/'.$banner->id)}}" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
              </table>
              <div class="pagination">
              {{ $banners->links() }}
              </div>
            </div>
          </div>

        </div>
    </section>

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<!-- End Footer -->


@endsection