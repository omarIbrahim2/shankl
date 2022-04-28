<x-header/>

<body>
    <main class="colored-section">
        <nav class="sub-nav">
            <div class="container">
                <ul class="justify-content-center">
                    <li><img src="{{asset('auth')}}/assets/images/logo/Shankal.png" alt="shankal"></li>
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
                                    <h2 class="text-start">Sign Up Now</h2>
                                    <p class="text-start p-0">login to your account <a href="#">Click Here</a></p>
                                </div>
                                <div class="contact-form black-contact-form">
                                    <form>
                                        <div class="input-item me-auto ms-0">
                                            <input type="text" name="name" placeholder="name">
                                            <span>
                                                <i class="fa-solid fa-user"></i>
                                            </span>
                                        </div>
                                        <div class="input-item me-auto ms-0">

                                            <input type="email" name="email" placeholder="email">
                                            <span>
                                                <i class="fa-regular fa-envelope"></i>
                                            </span>
                                        </div>

                                        <div class="input-item me-auto ms-0">
                                            <input type="password" name="password" placeholder="password">
                                            <span>
                                                <i class="fa-solid fa-lock"></i>
                                            </span>
                                            <span class="second show-passowrd">
                                                <i class="fa-regular fa-eye-slash fa-flip-horizontal"></i>
                                            </span>
                                        </div>
                                        <div class="input-item me-auto ms-0">
                                            <input type="password" name="confirmPassword" placeholder="Confirm Password">
                                            <span>
                                                <i class="fa-solid fa-lock"></i>
                                            </span>
                                            <span class="second show-passowrd">
                                                <i class="fa-regular fa-eye-slash fa-flip-horizontal"></i>
                                            </span>
                                        </div>
                                        <div class="input-item me-auto ms-0">
                                            <input type="tel" name="phone" placeholder="phone">
                                            <span>
                                                <i class="fa-solid fa-phone"></i>
                                            </span>
                                        </div>
                                        <div class="input-item me-auto ms-0">
                                            <input type="text" name="address" placeholder="address">
                                            <span>
                                                <i class="fa-solid fa-location-dot"></i>
                                            </span>
                                        </div>
                                        <div class="input-item me-auto ms-0">
                                            <input type="text" name="type" placeholder="type">
                                            <span>
                                                <i class="fa-solid fa-sitemap"></i>
                                            </span>
                                        </div>
                                        <div class="input-item me-auto ms-0">
                                            <input type="text" name="orgnization" placeholder="orgnization name">
                                            <span>
                                                <i class="fa-solid fa-truck"></i>
                                            </span>
                                        </div>

                                        <div class="input-item me-auto ms-0">
                                            <button type="submit" class="custom-out-btn">
                                                Sign Up
                                            </button>
                                        </div>

                                    </form>
                                    <div class="social-auth">
                                        <h3>Sign Up with social media</h3>
                                        <div class="social-btns">
                                            <a href="#" class="btn-custom facebook">
                                                <span class="icon"><i class="fa-brands fa-facebook-f"></i></span>
                                                <span>Facebook</span>
                                            </a>
                                            <a href="#" class="btn-custom gmail">
                                                <span class="icon"><i class="fa-regular fa-envelope"></i></span>
                                                <span>gmail</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-4 col-12">
                            <div class="auth-logo">
                                <img src="{{asset('auth')}}/assets/images/logo/Shanklbig.png" alt="shankal">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
<x-footer/>
