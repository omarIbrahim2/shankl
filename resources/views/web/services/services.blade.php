@extends('layouts.main')


@section("title")
  services

@endsection
@livewireStyles

@section("section")
<body>
    <!-- img light box -->
    <div class="lightbox">
        <div class="inner">
            <img src="" alt="">
        </div>
        <div class="close">
            <span>&times;</span>
        </div>
    </div>
    <!-- ************* -->
    <!-- header -->
    <header>
        <!-- navbar -->
        <nav class="navbar navbar-expand-lg navbar-light ">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="assets/images/logo/logo.png" alt="shankal">
                </a>
                <div class="auth-btn">
                    <a href="#" class="custom-out-btn">
                        Sign Out
                    </a>
                    <a class="icons" href="#">
                        <i class="fa-solid fa-cart-shopping"></i>
                    </a>
                    <a class="icons m-0 noti-icon" href="#">
                        <i class="fa-regular fa-bell"></i>
                        <div class="notification">
                            <ul>
                                <li>
                                    <a href="#">
                                        <img src="assets/images/logo/noti.png" alt="notification icon">
                                        <h5 class="not-author">@hussien</h5>
                                        <p class="not-action">see your request</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="assets/images/logo/noti.png" alt="notification icon">
                                        <h5 class="not-author">@hussien</h5>
                                        <p class="not-action">see your request</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="assets/images/logo/noti.png" alt="notification icon">
                                        <h5 class="not-author">@hussien</h5>
                                        <p class="not-action">see your request</p>
                                    </a>
                                </li>
                                <li class="border-0">
                                    <a href="#">

                                        <p class="not-action">All Notificaation</p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </a>
                    <a class="icons" href="{{route("parentProfile")}}">
                        @if ($loginParent->image == null)
                          <img src="{{asset("auth")}}/assets/images/logo/user.png" alt="user avatar">
                         @else
                         <img style="width: 50px" src="{{'storage/'.$loginParent->image}}" alt="user avatar">

                        @endif

                    </a>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav m-auto">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#header">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#services">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about">About Us</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Contact Us</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              My Orgnization
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <li><a class="dropdown-item" href="#">Edit Profile</a></li>
                              <li><a class="dropdown-item" href="#">Show Profile</a></li>

                            </ul>
                          </li>
                    </ul>
                </div>

            </div>
        </nav>
    </header>
    <!-- ***************** -->
    <!-- services -->
    <section class="section">
        <div class="inner">
  @livewire("services")

        </div>
    </section>
    <!-- ***************** -->
     <!-- footer -->
     <footer class="footer">
         <div class="inner">
             <div class="container">
                 <div class="row">
                     <div class="col-md-2">
                         <div class="logo">
                             <img src="{{asset('auth')}}/assets/images/logo/logo.png" alt="logo">
                         </div>
                     </div>
                     <div class="col-md-8">
                         <div class="footer-nav">
                             <ul>
                                 <li><a href="#">Services</a></li>
                                 <li><a href="#">About Us</a></li>
                                 <li><a href="#">Contact Us</a></li>
                                 <li><a href="#">Pricing</a></li>
                             </ul>
                         </div>
                     </div>
                     <div class="col-md-2">
                         <div class="custom-logo">
                             <img src="{{asset('auth')}}/assets/images/logo/Shankal.png" alt="shankal">
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </footer>


@endsection


@livewireScripts
