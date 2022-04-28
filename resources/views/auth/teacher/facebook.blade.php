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
                                    <form method="POST" action="{{url("teacher/facebook")}}">
                                        @csrf
                                        @include('inc.messages')

                                        <div class="input-item me-auto ms-0">
                                            <input type="tel" name="phone" placeholder="phone">
                                            <span>
                                                <i class="fa-solid fa-phone"></i>
                                            </span>
                                        </div>

                                        <div class="input-item me-auto ms-0">
                                            <input type="text" name="field" placeholder="phone">
                                            <span>
                                                <i class="fa-solid fa-phone"></i>
                                            </span>
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
                                <img src="{{asset('auth')}}/assets/images/logo/Shanklbig.png" alt="shankal">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
  <x-footer/>
