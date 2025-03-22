<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Trav-TM</title>

    @if (request()->routeIs('home'))
      <link rel="stylesheet" href="{{ asset('assets/styles.css') }}" />
      @else
      <link rel="stylesheet" href="{{ asset('assets/index.css') }}" />
    @endif
    
    <link rel="icon" href="{{ asset('assets/trav__tm 01.png') }}" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet"
    />
    <!-- Font Awesome for icons -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    />
    <!-- splide -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.6.11/dist/css/splide.min.css"
    />
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
          <img src="{{ asset('assets/trav__tm 01.png') }}" alt="Trav-TM Logo" class="logo-img"/>
        </a>
        <div class="menu-toggle">
          <i class="fas fa-bars"></i>
        </div>
        <ul class="nav-menu">
          <li class="dropdown">
            <a href="{{ route('visaServices') }}">Visa Services <i class="fas fa-chevron-down"></i></a>
            <!-- <ul class="dropdown-menu">
              <li><a href="#">Hotels</a></li>
              <li>
                <a href="#">International Hotels</a>
              </li>
              <li><a href="#">Domestic Hotels</a></li>
            </ul> -->
          </li>
          <li class="dropdown">
            <a href="{{ route('flights') }}">Flights <i class="fas fa-chevron-down"></i></a>
            <!-- <ul class="dropdown-menu">
              <li><a href="#">Flight</a></li>
              <li><a href="./">Domestic Flights</a></li>
              <li><a href="#">International Flights</a></li>
            </ul> -->
          </li>
          <li class="dropdown">
            <a href="#">Holidays <i class="fas fa-chevron-down"></i></a>
            <ul class="dropdown-menu">
              <li><a href="{{ route('holidays') }}">Holiday</a></li>
              <li><a href="{{ route('domestic.Holidays') }}">Domestic Holiday</a></li>
              <li>
                <a href="{{ route('international.Holidays') }}">International Holiday</a>
              </li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="{{ route('hotels') }}">Hotels <i class="fas fa-chevron-down"></i></a>
            <!-- <ul class="dropdown-menu">
              <li><a href="#">Hotels</a></li>
              <li>
                <a href="#">International Hotels</a>
              </li>
              <li><a href="#">Domestic Hotels</a></li>
            </ul> -->
          </li>
          <li><a href="#">Passport Services</a></li>
          <li><a href="#">Events</a></li>
          <li><a href="#">Travel Insurance</a></li>
        </ul>
      </div>
    </nav>