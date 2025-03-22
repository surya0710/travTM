@extends('backend.layouts.app')
@section('content')
<main id="main" class="main" style="min-height: 100vh;">

    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Blog Comments</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">

        <div class="card">
        @include('layouts.message')
            <div class="card-body">
                <div class="d-flex justify-content-between  align-items-center">
              <h5 class="card-title">Blog Comments</h5>
                </div>
              <!-- Table with stripped rows -->
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Comment</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Action</th>

                  </tr>
                </thead>
                <tbody>
                    @forelse ($getRecord as $value)
                  <tr>
                    <th>{{ $value->id }}</th>
                    <td>{{ $value->name }}</td>
                    <td>{{ $value->email }}</td>
                    <td>{{ $value-> comment }}</td>
                    <td>{{ date('d-m-Y H:i A', strtotime( $value->created_at))}}</td>
                    <td>
                      @if($value->status == 0)
                      <a onclick="return confirm('Are you sure want to Active?');" href="{{url('panel/blogcomment/active/'.$value->id)}}" class="btn btn-secondary btn-sm">Deactive</a>
                      @else
                      <a onclick="return confirm('Are you sure want to Dective?');" href="{{url('panel/blogcomment/deactive/'.$value->id)}}" class="btn btn-success btn-sm">Active</a>
                      @endif
                        <a onclick="return confirm('Are you sure want to delete?');" href="{{url('panel/blogcomment/delete/'.$value->id)}}" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                  </tr>
                  @foreach ($value->blog_comment_reply as $comment_reply)
                  <tr class="ps-5">
                    <th style="padding-left: inherit;">{{ $comment_reply->id }}</th>
                    <td>{{ $comment_reply->name }}</td>
                    <td>{{ $comment_reply->email }}</td>
                    <td>{{ $comment_reply-> comment }}</td>
                    <td>{{ date('d-m-Y H:i A', strtotime( $comment_reply->created_at))}}</td>
                    <td>
                      @if($comment_reply->status == 0)
                      <a onclick="return confirm('Are you sure want to Active?');" href="{{url('panel/blogcommentreply/active/'.$comment_reply->id)}}" class="btn btn-secondary btn-sm">Deactive</a>
                      @else
                      <a onclick="return confirm('Are you sure want to Dective?');" href="{{url('panel/blogcommentreply/deactive/'.$comment_reply->id)}}" class="btn btn-success btn-sm">Active</a>
                      @endif
                        <a onclick="return confirm('Are you sure want to delete?');" href="{{url('panel/blogcommentreply/delete/'.$comment_reply->id)}}" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                  </tr>
                  @endforeach
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