<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ e(isset($pageContent) ? $pageContent->meta_title : '') }}</title>
    <meta name="description" content="{{ e(isset($pageContent) ? $pageContent->meta_description : '') }}">
    <meta name="keywords" content="{{ e(isset($pageContent) ? $pageContent->meta_keywords : '') }}">
    <meta property="og:image" content="{{ asset(isset($pageContent) ? 'uploads/' . $pageContent->meta_image : '') }}" />
    @if (request()->routeIs('home') || request()->routeIs('blog.index') || request()->routeIs('blog.details'))
    <link rel="stylesheet" href="{{ asset('assets/styles.css') }}" />
      @else
    <link rel="stylesheet" href="{{ asset('assets/index.css') }}" />
    @endif
    
    <link rel="icon" href="{{ asset($webSettings->website_favicon) }}" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet"/>
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
    <!-- splide -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.6.11/dist/css/splide.min.css"/>
  </head>
  <body>
    <!-- Navigation Bar -->
    <nav class="navbar">
      <div class="nav-header">
        <div class="nav-social">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
          <a href="#"><i class="fab fa-linkedin-in"></i></a>
        </div>
        <div class="nav-detail">
          <ul>
            <li><a href="{{ route('aboutUs') }}">About Us</a></li>
            <li><a href="{{ route('contact') }}">Contact Us</a></li>
          </ul>
        </div>
      </div>
      <!-- <div class="container"> -->
      <div class="nav-container">
        <a href="{{ route('home') }}" class="logo">
          <img src="{{ asset($webSettings->website_logo) }}" alt="Trav-TM Logo" class="logo-img"/>
        </a>
        <div class="menu-toggle">
          <i class="fas fa-bars"></i>
        </div>
        <ul class="nav-menu">
          @foreach($menu as $list)
          <!-- <li class="@if(isset($list->subcategories) && count($list->subcategories) > 0) dropdown @endif "> -->
          <li class=" ">
            <!-- <a href="@if(isset($list->subcategories) && count($list->subcategories) > 0) # @else {{ url($list->slug) }} @endif">{{ $list->name }}  -->
            <a href="{{ url($list->slug) }}">{{ $list->name }} 
              @if(isset($list->subcategories) && count($list->subcategories) > 0)
              <!-- <i class="fas fa-chevron-down"></i> -->
              @endif
            </a>
            @if(isset($list->subcategories) && count($list->subcategories) > 0)
            <!-- <ul class="dropdown-menu">
              @foreach($list->subcategories as $sub)
              <li><a href="{{ url($list->slug . '/' . $sub->slug) }}">{{ $sub->name }}</a></li>
              @endforeach
            </ul> -->
            @endif
          </li>
          <!-- <li><a href="#">Travel Insurance</a></li> -->
          @endforeach
        </ul>
      </div>
    </nav>