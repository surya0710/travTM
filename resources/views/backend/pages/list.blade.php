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
                    <h5 class="card-title">Pages list</h5>
                    <a href="{{url('panel/pages/add')}}" class="btn btn-primary d-inline">Add New</a>
                </div>
              <!-- Table with stripped rows -->
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">SNO.</th>
                    <th scope="col">Name</th>
                    <th scope="col">Title</th>
                    <th scope="col">Slug</th>
                    <th scope="col">Image</th>
                    <th scope="col">Meta Keyword</th>
                    <th scope="col">Status </th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($pages as $page)
                    <tr>
                        <th scope="row">{{$loop->index + 1}}</th>
                        <td>{{$page->name}}</td>
                        <td>{{$page->title}}</td>
                        <td>{{$page->slug}}</td>
                        <td><img src="{{ asset('uploads/' . $page->image) }}" width="50px" height="50px"></td>
                        <td>{{$page->meta_keyword}}</td>
                        <td>
                            @if($page->status == 1)
                                <span class="badge bg-success">Active</span>
                            @else
                                <span class="badge bg-danger">Inactive</span>
                            @endif
                        </td>
                        <td>{{$page->created_at->diffForHumans()}}</td>
                        <td>
                            <a href="{{url('panel/page/edit/'.$page->id)}}" class="btn btn-primary d-inline">Edit</a>
                        </td>
                    </tr>
                    @endforeach
                    @if(count($pages) == 0)
                    <tr>
                        <td colspan="100%" class="text-center">No Pages Found</td>
                    </tr>
                    @endif
                </tbody>
              </table>
              <!-- End Table with stripped rows -->
              <div class="d-flex justify-content-center">
                  {{ $pages->links() }}
              </div>
            </div>
          </div>

        </div>
    </section>

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<!-- End Footer -->


@endsection