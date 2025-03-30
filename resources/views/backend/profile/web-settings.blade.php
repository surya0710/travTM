@extends('backend.layouts.app')
@section('content')
<main id="main" class="main" style="min-height:100vh;">

    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Website Settings</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
        <div class="card">
            @include('layouts.message')
            <div class="card-body">
              <h5 class="card-title">Website Settings</h5>
              <!-- Vertical Form -->
              <form class="row g-3" action="" method="post" action="{{ route('websettings.update') }}" enctype="multipart/form-data">
                {{csrf_field()}}
                
                <div class="col-12">
                  <label for="inputNanme4" class="form-label">Website Name</label>
                  <input type="text" name="website_name" required class="form-control" value="{{ old('website_name', $website->website_name ?? '') }}">
                  @error('website_name')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>

                <div class="col-6">
                  <label for="inputNanme4" class="form-label">Website Logo</label>
                  <input type="file" name="website_logo" class="form-control">
                  <img src="{{ asset( $website->website_logo ?? '') }}" width="100" alt="">
                  @error('website_logo')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                
                <div class="col-6">
                  <label for="inputNanme4" class="form-label">Website Favicon</label>
                  <input type="file" name="website_favicon" class="form-control">
                  <img src="{{ asset($website->website_favicon ?? '') }}" width="100" alt="">
                  @error('website_favicon')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>

                <div class="col-6">
                  <label for="inputNanme4" class="form-label">Website Email</label>
                  <input type="email" name="website_email" required class="form-control" value="{{ old('website_email', $website->website_email ?? '') }}">
                  @error('website_email')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>

                <div class="col-6">
                  <label for="inputNanme4" class="form-label">Website Phone</label>
                  <input type="text" name="website_phone" required class="form-control" value="{{ old('website_phone', $website->website_phone ?? '') }}">
                  @error('website_phone')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>

                <div class="col-12">
                  <label for="inputNanme4" class="form-label">Website Address</label>
                  <textarea name="website_address" required class="form-control" rows="3">{{ old('website_address', $website->website_address ?? '') }}</textarea>
                    @error('website_address')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="col-6">
                  <label for="facebookUrl" class="form-label">Facebook URL</label>
                  <input type="url" name="website_facebook" class="form-control" value="{{ old('website_facebook', $website->website_facebook ?? '') }}">
                  @error('website_facebook')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>

                <div class="col-6">
                  <label for="twitterUrl" class="form-label">Twitter URL</label>
                  <input type="url" name="website_twitter" class="form-control" value="{{ old('website_twitter', $website->website_twitter ?? '') }}">
                  @error('website_twitter')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>

                <div class="col-6">
                  <label for="instagramUrl" class="form-label">Instagram URL</label>
                  <input type="url" name="website_instagram" class="form-control " value="{{ old('website_instagram', $website->website_instagram ?? '') }}">
                  @error('website_instagram')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>

                <div class="col-6">
                  <label for="linkedinUrl" class="form-label">LinkedIn URL</label>
                  <input type="url" name="website_linkedin" class="form-control" value="{{ old('website_linkedin', $website->website_linkedin ?? '') }}">
                  @error('website_linkedin')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>

                <div class="col-6">
                  <label for="pinterestUrl" class="form-label">Pinterest URL</label>
                  <input type="url" name="website_pinterest" class="form-control" value="{{ old('website_pinterest', $website->website_pinterest ?? '') }}">
                  @error('website_pinterest')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>

                <div class="col-6">
                  <label for="youtubeUrl" class="form-label">YouTube URL</label>
                  <input type="url" name="website_youtube" class="form-control" value="{{ old('website_youtube', $website->website_youtube ?? '') }}">
                  @error('website_youtube')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>

                <div class="col-6">
                  <label for="whatsappNumber" class="form-label">WhatsApp Number</label>
                  <input type="text" name="website_whatsapp" class="form-control" value="{{ old('website_whatsapp', $website->website_whatsapp ?? '') }}">
                  @error('website_whatsapp')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>

                <div class="col-6">
                    <label for="iframeUrl" class="form-label">Iframe URL</label>
                    <input type="url" name="website_iframe" class="form-control " value="{{ old('website_iframe', $website->website_map ?? '') }}">
                    @error('website_iframe')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                </div>

                <div class="col-12">
                    <label for="copyrightText" class="form-label">Copyright Text</label>
                    <textarea name="website_copyright_text" class="form-control" rows="2">{{ old('website_copyright_text', $website->website_copyright_text ?? '') }}</textarea>
                    @error('website_copyright_text')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
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