@extends("layouts.main")

@section("title")
home
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
                    <img src="{{asset('auth')}}/assets/images/logo/logo.png" alt="shankal">
                </a>
                <div class="auth-btn">
                    <a href="{{route('selectUserRegister')}}" class="custom-out-btn">
                        Sign Up
                    </a>
                </div>

                <div class="auth-btn">
                    <a href="{{route('selectUserLogin')}}" class="custom-out-btn">
                        login
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
                            <a class="nav-link" href="#about">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#faq">FAQ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#gallery">Gallery</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Contact Us</a>
                        </li>

                    </ul>
                </div>

            </div>
        </nav>
        <!-- banner slider -->
        <div class="home-slider" id="header">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide" style="background-image:url('{{asset('auth')}}/assets/images/banner/banner.webp')">
                        <div class="container">
                            <div claas="row">
                                <div class="col-lg-6 col-md-8 col-12">
                                    <div class="slider-content">
                                        <h1>SHANKAL</h1>
                                        <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio possimus
                                            maxime eaque laudantium at, soluta sunt omnis aspernatur et blanditiis sequi
                                            ea culpa. Aliquid mollitia reiciendis totam minima dolores illo.</P>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" style="background-image:url('{{asset('auth')}}/assets/images/banner/banner.webp')">
                        <div class="container">
                            <div claas="row">
                                <div class="col-lg-6 col-md-8 col-12">
                                    <div class="slider-content">
                                        <h1>SHANKAL</h1>
                                        <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio possimus
                                            maxime eaque laudantium at, soluta sunt omnis aspernatur et blanditiis sequi
                                            ea culpa. Aliquid mollitia reiciendis totam minima dolores illo.</P>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" style="background-image:url('{{asset('auth')}}/assets/images/banner/banner.webp')">
                        <div class="container">
                            <div claas="row">
                                <div class="col-lg-6 col-md-8 col-12">
                                    <div class="slider-content">
                                        <h1>SHANKAL</h1>
                                        <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio possimus
                                            maxime eaque laudantium at, soluta sunt omnis aspernatur et blanditiis sequi
                                            ea culpa. Aliquid mollitia reiciendis totam minima dolores illo.</P>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" style="background-image:url('{{asset('auth')}}/assets/images/banner/banner.webp')">
                        <div class="container">
                            <div claas="row">
                                <div class="col-lg-6 col-md-8 col-12">
                                    <div class="slider-content">
                                        <h1>SHANKAL</h1>
                                        <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio possimus
                                            maxime eaque laudantium at, soluta sunt omnis aspernatur et blanditiis sequi
                                            ea culpa. Aliquid mollitia reiciendis totam minima dolores illo.</P>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </header>
    <!-- ***************** -->

    <!-- features -->
    <section class="section">
        <div class="inner">
            <div class="container">
                <div class="section-title">
                    <h2>Features</h2>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Hic eum laborum dignissimos accusantium
                        quaerat odio commodi quos quisquam! Ad, dicta.</p>
                </div>
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-4 col-12">
                            <div class="feature-item">
                                <span><i class="fa-regular fa-credit-card"></i></span>
                                <h3>Secure payment</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam, tempora.</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-12">
                            <div class="feature-item">
                                <span><i class="fa-solid fa-laptop"></i></span>
                                <h3>Easy Usage</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam, tempora.</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-12">
                            <div class="feature-item">
                                <span><i class="fa-solid fa-book-medical"></i></span>
                                <h3>Easy Booking</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam, tempora.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ****************** -->
    <!-- services -->
    <section class="section colored-section">
        <div class="inner">
            <div class="container">
                <div class="section-title">
                    <h2>Services</h2>
                </div>
                <div class="section-content">
                    <div class="row align-items-center">
                        <div class="col-lg-4 col-12">
                            <div class="services-left">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima rem totam officia,
                                    harum
                                    quidem, voluptatem esse voluptatum, a maxime porro cumque similique deserunt magnam?
                                    Delectus sint ullam quidem ipsam laboriosam maiores unde necessitatibus quaerat
                                    eveniet.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-8 col-12">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="service">
                                        <div class="service-title">
                                            <img src="{{asset('auth')}}/assets/images/services/1.svg">
                                            <h3>Easy Add Your Child</h3>
                                        </div>
                                        <div class="service-content">
                                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vitae
                                                exercitationem aut voluptates dolorem id illum praesentium, dolor sint
                                                est libero, facilis autem harum doloribus officia voluptate, earum cum
                                                fuga quaerat!</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="service">
                                        <div class="service-title">
                                            <img src="{{asset('auth')}}/assets/images/services/2.svg">
                                            <h3>Easy Order From Supplier</h3>
                                        </div>
                                        <div class="service-content">
                                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vitae
                                                exercitationem aut voluptates dolorem id illum praesentium, dolor sint
                                                est libero, facilis autem harum doloribus officia voluptate, earum cum
                                                fuga quaerat!</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="service">
                                        <div class="service-title">
                                            <img src="{{asset('auth')}}/assets/images/services/3.svg">
                                            <h3>Easy For Search</h3>
                                        </div>
                                        <div class="service-content">
                                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vitae
                                                exercitationem aut voluptates dolorem id illum praesentium, dolor sint
                                                est libero, facilis autem harum doloribus officia voluptate, earum cum
                                                fuga quaerat!</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="service">
                                        <div class="service-title">
                                            <img src="{{asset('auth')}}/assets/images/services/4.svg">
                                            <h3>Easy Add Your School</h3>
                                        </div>
                                        <div class="service-content">
                                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vitae
                                                exercitationem aut voluptates dolorem id illum praesentium, dolor sint
                                                est libero, facilis autem harum doloribus officia voluptate, earum cum
                                                fuga quaerat!</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ****************** -->
    <!-- about us -->
    <section class="section" id="about">
        <div class="inner">
            <div class="container">
                <div class="section-title">
                    <h2>About Us</h2>
                </div>
                <div class="section-content">
                    <div class="about-welcome">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="welcome">
                                    <h3>Welcome To Shankal</h3>
                                </div>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus nihil labore esse
                                    ex
                                    cupiditate numquam est velit minima molestiae! Est a illo eius sapiente labore
                                    consectetur, eaque modi blanditiis molestiae velit debitis ab laborum quos.</p>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident pariatur
                                    cupiditate ullam voluptates beatae rerum, enim sequi quae laudantium nam dolore
                                    alias iure, quo aut et quos blanditiis facere, obcaecati illo possimus laborum.
                                    Assumenda, illo quasi blanditiis repellat temporibus nemo eligendi reprehenderit
                                    maxime exercitationem magnam id perferendis, corrupti impedit eveniet.</p>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt officia
                                    exercitationem nemo voluptates sit ipsa similique voluptatibus libero maxime facere?
                                </p>
                            </div>
                            <div class="col-lg-6 order-lg-0 order-first">
                                <img src="{{asset('auth')}}/assets/images/about/pexels-artem-podrez-6941450 1.webp" alt="about us">
                            </div>
                        </div>
                    </div>
                    <div class="about-points">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="about-point">
                                    <h4>
                                        why choose us
                                    </h4>
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit magni neque iure
                                        assumenda iste nulla ratione deleniti. Doloremque maiores fugit saepe modi
                                        officia
                                        odio voluptate pariatur, explicabo unde enim. Recusandae perferendis optio
                                        delectus
                                        quaerat nobis!
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="about-point">
                                    <h4>
                                        our missions
                                    </h4>
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit magni neque iure
                                        assumenda iste nulla ratione deleniti. Doloremque maiores fugit saepe modi
                                        officia
                                        odio voluptate pariatur, explicabo unde enim. Recusandae perferendis optio
                                        delectus
                                        quaerat nobis!
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="about-point">
                                    <h4>
                                        our vission
                                    </h4>
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit magni neque iure
                                        assumenda iste nulla ratione deleniti. Doloremque maiores fugit saepe modi
                                        officia
                                        odio voluptate pariatur, explicabo unde enim. Recusandae perferendis optio
                                        delectus
                                        quaerat nobis!
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ****************** -->
    <!-- FAQ -->
    <section class="section colored-section" id="faq">
        <div class="inner">
            <div class="container">
                <div class="section-title">
                    <h2>FAQ</h2>
                </div>
                <div class="subtitle">
                    <h3>
                        Frequently Asked Questions
                    </h3>
                </div>
                <div class="q-slider">
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="question">
                                    <h4>
                                        General
                                    </h4>
                                    <p>
                                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quod a nulla, eaque ab
                                        dignissimos ut voluptatibus! Beatae perferendis, voluptatem exercitationem
                                        tenetur inventore neque officia odit?
                                    </p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="question">
                                    <h4>
                                        How I USe?
                                    </h4>
                                    <p>
                                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quod a nulla, eaque ab
                                        dignissimos ut voluptatibus! Beatae perferendis, voluptatem exercitationem
                                        tenetur inventore neque officia odit?
                                    </p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="question">
                                    <h4>
                                       How Contact?
                                    </h4>
                                    <p>
                                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quod a nulla, eaque ab
                                        dignissimos ut voluptatibus! Beatae perferendis, voluptatem exercitationem
                                        tenetur inventore neque officia odit?
                                    </p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="question">
                                    <h4>
                                        Book Teacher Section
                                    </h4>
                                    <p>
                                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quod a nulla, eaque ab
                                        dignissimos ut voluptatibus! Beatae perferendis, voluptatem exercitationem
                                        tenetur inventore neque officia odit?
                                    </p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="question">
                                    <h4>
                                        Payment Method
                                    </h4>
                                    <p>
                                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quod a nulla, eaque ab
                                        dignissimos ut voluptatibus! Beatae perferendis, voluptatem exercitationem
                                        tenetur inventore neque officia odit?
                                    </p>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="question">
                                    <h4>
                                        Add My Children
                                    </h4>
                                    <p>
                                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quod a nulla, eaque ab
                                        dignissimos ut voluptatibus! Beatae perferendis, voluptatem exercitationem
                                        tenetur inventore neque officia odit?
                                    </p>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="question">
                                    <h4>
                                        General
                                    </h4>
                                    <p>
                                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quod a nulla, eaque ab
                                        dignissimos ut voluptatibus! Beatae perferendis, voluptatem exercitationem
                                        tenetur inventore neque officia odit?
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ****************** -->
    <!-- reviews -->
    <section class="section">
        <div class="inner">
            <div class="container">
                <div class="section-title">
                    <h2>Reviews</h2>
                </div>
                <div class="reviews-slider">
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="review-container">
                                    <div class="r-avatar">
                                        <img src="{{asset('auth')}}/assets/images/reviews/avatar2.png" alt="hossam mansour">
                                    </div>
                                    <div class="r-name">
                                        <h4>Hossam Mansour</h4>
                                    </div>
                                    <div class="rating">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                    </div>
                                    <div class="review">
                                        <p>
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati numquam cupiditate amet, libero laborum maiores sunt soluta! Sed, fuga placeat?
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="review-container">
                                    <div class="r-avatar">
                                        <img src="{{asset('auth')}}/assets/images/reviews/avatar2.png" alt="hossam mansour">
                                    </div>
                                    <div class="r-name">
                                        <h4>Hossam Mansour</h4>
                                    </div>
                                    <div class="rating">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                    </div>
                                    <div class="review">
                                        <p>
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati numquam cupiditate amet, libero laborum maiores sunt soluta! Sed, fuga placeat?
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="review-container">
                                    <div class="r-avatar">
                                        <img src="{{asset('auth')}}/assets/images/reviews/avatar2.png" alt="hossam mansour">
                                    </div>
                                    <div class="r-name">
                                        <h4>Hossam Mansour</h4>
                                    </div>
                                    <div class="rating">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                    </div>
                                    <div class="review">
                                        <p>
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati numquam cupiditate amet, libero laborum maiores sunt soluta! Sed, fuga placeat?
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="review-container">
                                    <div class="r-avatar">
                                        <img src="{{asset('auth')}}/assets/images/reviews/avatar2.png" alt="hossam mansour">
                                    </div>
                                    <div class="r-name">
                                        <h4>Hossam Mansour</h4>
                                    </div>
                                    <div class="rating">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                    </div>
                                    <div class="review">
                                        <p>
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati numquam cupiditate amet, libero laborum maiores sunt soluta! Sed, fuga placeat?
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="review-container">
                                    <div class="r-avatar">
                                        <img src="{{asset('auth')}}/assets/images/reviews/avatar2.png" alt="hossam mansour">
                                    </div>
                                    <div class="r-name">
                                        <h4>Hossam Mansour</h4>
                                    </div>
                                    <div class="rating">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                    </div>
                                    <div class="review">
                                        <p>
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati numquam cupiditate amet, libero laborum maiores sunt soluta! Sed, fuga placeat?
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="review-container">
                                    <div class="r-avatar">
                                        <img src="{{asset('auth')}}/assets/images/reviews/avatar2.png" alt="hossam mansour">
                                    </div>
                                    <div class="r-name">
                                        <h4>Hossam Mansour</h4>
                                    </div>
                                    <div class="rating">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                    </div>
                                    <div class="review">
                                        <p>
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati numquam cupiditate amet, libero laborum maiores sunt soluta! Sed, fuga placeat?
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ****************** -->
    <!-- gallery -->
    <section class="section colored-section" id="gallery">
        <div class="inner">
            <div class="container">
                <div class="section-title">
                    <h2>Gallery</h2>
                </div>
                <div class="gallery-images">
                    <div class="row">
                        <div class="col-md-4 col-12">
                            <div class="gallery-img">
                                <img src="{{asset('auth')}}/assets/images/gallery/1.png" alt="gallery img">
                            </div>
                        </div>
                        <div class="col-md-4 col-12">
                            <div class="gallery-img">
                                <img src="{{asset('auth')}}/assets/images/gallery/2.png" alt="gallery img">
                            </div>
                        </div>
                        <div class="col-md-4 col-12">
                            <div class="gallery-img">
                                <img src="{{asset('auth')}}/assets/images/gallery/3.png" alt="gallery img">
                            </div>
                        </div>
                        <div class="col-md-4 col-12">
                            <div class="gallery-img">
                                <img src="{{asset('auth')}}/assets/images/gallery/1.png" alt="gallery img">
                            </div>
                        </div>
                        <div class="col-md-4 col-12">
                            <div class="gallery-img">
                                <img src="{{asset('auth')}}/assets/images/gallery/2.png" alt="gallery img">
                            </div>
                        </div>
                        <div class="col-md-4 col-12">
                            <div class="gallery-img">
                                <img src="{{asset('auth')}}/assets/images/gallery/3.png" alt="gallery img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ****************** -->
    <!-- partners -->
    <section class="section">
        <div class="inner">
            <div class="container">
                <div class="section-title">
                    <h2>Partners</h2>
                </div>
                <div class="pratners-data">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="partner">
                                <img src="{{asset('auth')}}/assets/images/partners/1.png" alt="partner">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="partner">
                                <img src="{{asset('auth')}}/assets/images/partners/2.png" alt="partner">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="partner">
                                <img src="{{asset('auth')}}/assets/images/partners/3.png" alt="partner">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="partner">
                                <img src="{{asset('auth')}}/assets/images/partners/4.png" alt="partner">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="partner">
                                <img src="{{asset('auth')}}/assets/images/partners/5.png" alt="partner">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="partner">
                                <img src="{{asset('auth')}}/assets/images/partners/6.png" alt="partner">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ****************** -->
    <!-- contact us -->
    <section class="section colored-section p-0 contact-us" id="contact">
        <div class="inner">
            <div class="row">
                <div class="col-lg-4 col-md-5 col-12">
                    <div class="contacts-container">
                        <div class="contacts">
                            <div class="contact-item">
                                <i class="fa-solid fa-location-dot"></i>
                                <a href="https://goo.gl/maps/629oZPALLVBQkjya7">
                                    Amman - Wasfi Al-Tal Street - Al-Waha Roundabout
                                </a>
                            </div>
                            <div class="contact-item">
                                <i class="fa-solid fa-phone"></i>
                                <a href="tel:+962 6 5669933">
                                    +962 6 5669933
                                </a>
                            </div>
                            <div class="contact-item">
                                <i class="fa-regular fa-envelope"></i>
                                <a href="mailto:shankal@gmail.com">
                                    shankal@gmail.com
                                </a>
                            </div>
                        </div>
                        <div class="social">
                            <div class="section-title">
                                <h2>Follow Us</h2>
                            </div>
                            <div class="social-icons">
                                <div class="social-item">
                                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                </div>
                                <div class="social-item">
                                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                </div>
                                <div class="social-item">
                                    <a href="#"><i class="fa-solid fa-m"></i></a>
                                </div>
                                <div class="social-item">
                                    <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-7 col-12">
                    <div class="section contact-form-container">
                        <div class="section-title ">
                            <h2 class="text-start">Contact Us</h2>
                        </div>
                        <div class="contact-form ">
                         @livewire('contacts')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ****************** -->
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
                                <li><a href="#header">Home</a></li>
                                <li><a href="#about">About Us</a></li>
                                <li><a href="#faq">FAQ</a></li>
                                <li><a href="#gallery">Gallery</a></li>
                                <li><a href="#contact">Contact Us</a></li>
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
    @livewireScripts
   @endsection
