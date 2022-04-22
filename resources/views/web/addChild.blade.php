<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="shankal is the most important school management system in jordan">
    <title>SHANKAL</title>
    <!-- fav icon -->
    <link rel="icon" type="image/x-icon" href="{{asset("auth")}}/assets/images/logo/logo.png">
    <!-- bootstarp 5 -->
    <link rel="stylesheet" href="{{asset("auth")}}/assets/css/bootstrap.min.css">
    <!-- fontawesome 6 -->
    <link rel="stylesheet" href="{{asset("auth")}}/assets/css/all.min.css">
    <!-- swiper js -->
    <link rel="stylesheet" href="{{asset("auth")}}/assets/css/swiper-bundle.min.css" />
    <!-- custom css -->
    <link rel="stylesheet" href="{{asset("auth")}}/assets/css/main.css">
    <!-- custom responsive -->
    <link rel="stylesheet" href="{{asset("auth")}}/assets/css/responsive.css">
</head>

<body>
    <main class="colored-section">
        <nav class="sub-nav">
            <div class="container">
                <ul class="justify-content-center">
                    <li><img src="{{asset("auth")}}/assets/images/logo/Shankal.png" alt="shankal"></li>
                </ul>
            </div>
        </nav>
        <section class="section ">
            <div class="inner">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-8 col-12">
                            <div class="left-side">
                                <div class="section-title">
                                    <h2 class="text-start">Add Your Kids Now</h2>
                                    <p class="text-start p-0">You Must Add Your Child</p>
                                </div>
                                <div class="contact-form black-contact-form">
                                    <form method="POST" action="{{url("/store/child")}}">
                                        @csrf
                                        @include('inc.messages')
                                        <div class="input-item me-auto ms-0">
                                            <input type="text" name="name" placeholder="name">
                                            <span>
                                                <i class="fa-solid fa-user"></i>
                                            </span>
                                        </div>
                                        <div class="input-item me-auto ms-0">

                                            <input type="number" name="age" placeholder="age">
                                            <span>
                                                <i class="fa-regular fa-hourglass"></i>
                                            </span>
                                        </div>

                                        <div class="input-item me-auto ms-0">
                                            <select name="birth_date" placeholder="MM">
                                                <option selected disabled aria-hidden="true">MM</option>
                                                <option  value="January">Jan</option>
                                                <option  value="February">Feb</option>
                                                <option  value="March">Mar</option>
                                                <option  value="April">Apr</option>
                                                <option value="May">May</option>
                                                <option value="June">Jun</option>
                                                <option value="July">Jul</option>
                                                <option  value="August">Aug</option>
                                                <option value="September">Sep</option>
                                                <option  value="October">Oct</option>
                                                <option  value="November">Nov</option>
                                                <option  value="December">Dec</option>
                                              </select>

                                            <span>
                                                <i class="fa-regular fa-calendar-days"></i>
                                            </span>

                                        </div>
                                        <div class="input-item me-auto ms-0">
                                            <input type="text" name="grade" placeholder="Grade">
                                            <span>
                                                <i class="fa-solid fa-graduation-cap"></i>
                                            </span>

                                        </div>

                                        <input type="hidden" name="parentt_id" value="{{$parent}}">


                                        <div class="social-auth">
                                            <h3>Sign Up with social media</h3>
                                            <div class="social-btns">
                                                <div class="input-item m-0 mb-3 charcter">
                                                    <input type="radio" name="Avatar" value="public/auth/assets/images/charcters/shankola.png" id="male">
                                                    <label for="male" class="icon-animate">
                                                        <img src="{{asset("auth")}}/assets/images/charcters/shankal.png" alt="shankal">
                                                        <span><i class="fa-solid fa-check"></i></span>
                                                    </label>

                                                </div>
                                                <div class="input-item m-0 mb-3 charcter">
                                                    <input type="radio" name="Avatar" value="public/auth/assets/images/charcters/shankola.png" id="female">
                                                    <label for="female" class="icon-animate">
                                                        <img src="{{asset("auth")}}/assets/images/charcters/shankola.png" alt="shankola">
                                                        <span><i class="fa-solid fa-check"></i></span>
                                                    </label>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-item me-auto ms-0">
                                            <button type="submit" class="custom-out-btn">
                                                Sign Up
                                            </button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-4 col-12">
                            <div class="auth-logo">
                                <img src="{{asset("auth")}}/assets/images/logo/Shanklbig.png" alt="shankal">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- jquery 3.6 -->
    <script src="{{asset("auth")}}/assets/js/jquery-3.6.0.min.js"></script>
    <!-- bootstrap 5 -->
    <script src="{{asset("auth")}}/assets/js/bootstrap.bundle.min.js"></script>
    <!-- fontawesome 6 -->
    <script src="{{asset("auth")}}/assets/js/all.min.js"></script>
    <!-- swiper js -->
    <script src="{{asset("auth")}}/assets/js/swiper-bundle.min.js"></script>
    <!-- custom js -->
    <script src="{{asset("auth")}}/assets/js/script.js"></script>
</body>

</html>
