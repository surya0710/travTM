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
              <h5 class="card-title">Service list</h5>
                <a href="{{url('panel/service/add')}}" class="btn btn-primary d-inline">Add New</a>
                </div>
              <!-- Table with stripped rows -->
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Image</th>
                    <th scope="col">Name</th>
                    <th scope="col">Category</th>
                    <th scope="col">Sub Category</th>
                    <th scope="col">Slug</th>
                    <th scope="col">Title </th>
                    <th scope="col">Meta Title</th>
                    <th scope="col">Meta Keyword</th>
                    <th scope="col">Meta Description</th>
                    <th scope="col">Status </th>
                    <th scope="col">Created At</th>
                    <th scope="col">Action</th>

                  </tr>
                </thead>
                <tbody>
                    @forelse ($getRecord as $value)
                  <tr>
                    <th scope="row">{{ $value->id }}</th>
                    <td><img src=" {{ url('upload/services/small/'.$value->image_small) }}" width="100"></td>
                    <td>{{ $value->name }}</td>
                    <td>{{ $value->category_name }}</td>
                    <td>{{ $value->sub_category_name }}</td>
                    <td>{{ $value->slug }}</td>
                    <td>{{ $value->title }}</td>
                    <td>{{ $value-> meta_title }}</td>
                    <td>{{ $value-> meta_keywords }}</td>
                    <td>{{ $value-> meta_description }}</td>
                    <td>{{ empty($value->status) ? 'Deactive' : 'Active' }}</td>
                    <td>{{ date('d-m-Y H:i A', strtotime( $value->created_at))}}</td>
                    <td>
                        <a href="{{url('panel/service/edit/'.$value->id)}}" class="btn btn-primary btn-sm">Edit</a>
                        <a onclick="return confirm('Are you sure want to delete?');" href="{{url('panel/service/delete/'.$value->id)}}" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                    
                  </tr>
                  @empty
                    <tr>
                        <td colspan="100%">Data not found</td>
                    </tr>
                  @endforelse
                </tbody>
              </table>
              {!! $getRecord->appends(Illuminate\Support\Facades\Request::except('page'))->links() !!}

            </div>
          </div>

        </div>
    </section>

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<!-- End Footer -->


@endsection