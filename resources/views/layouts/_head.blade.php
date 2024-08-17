<!--
Author: ABSOFT
Author URL: WWW.ABSOFT-BD.COM
-->
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Green IT::Home</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@300;400;700&display=swap" rel="stylesheet">

    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
  </head>
  <body>
<!--header-->
<header id="site-header" class="fixed-top nav-fixed">
  <div class="container">
      <nav class="navbar navbar-expand-lg navbar-dark stroke">
          <h1>
            <a class="navbar-brand" href="index.php">
                <img src="assets/images/logo.png" alt="Your logo" title="Your logo" style="height:50px;top: -3px;position: relative;" />
            </a>
          </h1>
          <!-- if logo is image enable this   
          <a class="navbar-brand" href="#index.html">
              <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
          </a> -->
          <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
              data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
              aria-label="Toggle navigation">
              <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
              <span class="navbar-toggler-icon fa icon-close fa-times"></span>
              </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
              <ul class="navbar-nav ml-auto mr-5">
                  <li class="nav-item {{$data['page_name'] == 'home' ? 'active' : ''}}">
                      <a class="nav-link" href="{{route('home')}}">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item {{$data['page_name'] == 'about' ? 'active' : ''}}">
                      <a class="nav-link" href="{{route('about')}}">About</a>
                  </li>
                  <li class="nav-item {{$data['page_name'] == 'services' ? 'active' : ''}}">
                      <a class="nav-link" href="{{route('services')}}">Our Services</a>
                  </li>
                  <li class="nav-item {{$data['page_name'] == 'courses' ? 'active' : ''}}">
                      <a class="nav-link" href="{{route('courses')}}">Our Courses</a>
                  </li>
                  <li class="nav-item {{$data['page_name'] == 'contact' ? 'active' : ''}}">
                      <a class="nav-link" href="{{route('contact')}}">Contact</a>
                  </li>
                  <nav class="ml-lg-3">
                      <div class="search-bar">
                          <form action="#" method="GET" class="search">
                              <input type="search" class="search__input" name="search"
                                  placeholder="Search here.." onload="equalWidth()" required>
                              <span class="fa fa-search search__icon"></span>
                          </form>
                      </div>
                  </nav>
              </ul>
          </div>
          <!-- toggle switch for light and dark theme -->

          <div class="mobile-position">
              <nav class="navigation">
                  <div class="theme-switch-wrapper">
                      <label class="theme-switch" for="checkbox">
                          <input type="checkbox" id="checkbox">
                          <div class="mode-container py-1">
                              <i class="gg-sun"></i>
                              <i class="gg-moon"></i>
                          </div>
                      </label>
                  </div>
              </nav>
          </div>
          <!-- //toggle switch for light and dark theme -->
      </nav>
  </div>
</header>