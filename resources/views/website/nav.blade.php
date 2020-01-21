<!DOCTYPE html>
<html lang="en">
<head>
    @include('website.head')
</head>
<body>
<!-- nav start here -->
<nav id="navbar" class="push better-nav fixed-top">
  <div class="container">
    <div class="head">
    <a href="{{ route('home-page') }}" class="brand">
        <div class="logo">
          <img class="image" src="{{ asset('image/logo.png') }}" data2x="https://66.media.tumblr.com/avatar_2dcdc7cf5b47_128.png" alt="Ishasystems & software" />
        </div>
        {{-- <div class="title">
          <h3>Company</h3>
        </div> --}}
      </a>
    </div>
    <div class="body">
      <ul>
      <li class="home active"><a href="{{ route('home-page') }}">Home</a></li>
        <li class="page"><a href="{{ route('about') }}">About</a></li>
        <li class="page"><a href="{{ route('services') }}">Services</a></li>

        <li class="blog dropdown"><a href="#">Products</a>
          {{-- <i class="fa fa-arrow-down"></i> --}}
          <ul style="background: #fff;">
            @php
                $products= productMenu();
            @endphp
            @if (count($products)>0)
              @foreach ($products as $item)
          <li><a href="{{ route('product',$item->id) }}" style="color:#000 !important;">{{ $item->category_name }}</a></li>
              @endforeach
                
            @endif
            {{-- <li><a href="#">Biometrics</a></li>
            <li><a href="#">Biometrics & Access</a></li>
            <li><a href="#">Turnstile</a></li> --}}

            {{-- <li class="dropdown"><a href="#">Biometrics</a>
              <span class="selector"></span>
              <ul style="background:#000">
                <li><a href="#">X990</a></li>
                <li class="dropdown"><a href="#">CSS</a>
                  <span class="selector"></span>
                  <ul style="background:#000">
                    <li><a href="#">Something really long like a sentence or something!?</a></li>
                    <li><a href="#">CSS3</a></li>
                  </ul>
                </li>
                <li><a href="#">I9c</a></li>
                <li class="dropdown"><a href="#">Others</a>
                  <span class="selector"></span>
                  <ul style="background:#000">
                    <li><a href="#">Bootstrap</a></li>
                    <li><a href="#">JQuery</a></li>
                  </ul>
                </li>
              </ul>
            </li> --}}

          </ul>
        </li>
        <li class="page"><a href="{{ route('portfolio') }}">Portfolio</a></li>

        <li class="page"><a href="{{ route('contact') }}">Contacts</a></li>
        <!-- <li class="more dropdown"><a href="#"><i class="fa fa-ellipsis-v" aria-hidden="true"></i></a>
          <span class="selector"></span>
          <ul>
            <li><a href="#">RSS</a></li>
            <li class="search clearfix">
              <form>
                <input type="text" placeholder="Search" />
                <button><i class="fa fa-search" aria-hidden="true"></i></button>
              </form>
            </li>
          </ul>
        </li> -->
      </ul>
    </div>
    <div class="toggle">
      <a href="#navbar-slide">
        <i class="fa fa-bars" aria-hidden="true"></i>
      </a>
    </div>
  </div>
</nav>

<!-- nav end here  -->
    
