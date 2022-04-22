<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="shankal is the most important school management system in jordan">
    <title>SHANKAL</title>
    <!-- fav icon -->
    <link rel="icon" type="image/x-icon" href="{{asset('auth')}}/assets/images/logo/logo.png">
    <!-- bootstarp 5 -->
    <link rel="stylesheet" href="{{asset('auth')}}/assets/css/bootstrap.min.css">
    <!-- fontawesome 6 -->
    <link rel="stylesheet" href="{{asset('auth')}}/assets/css/all.min.css">
    <!-- swiper js -->
    <link rel="stylesheet" href="{{asset('auth')}}/assets/css/swiper-bundle.min.css" />
    <!-- custom css -->
    <link rel="stylesheet" href="{{asset('auth')}}/assets/css/main.css">
    <!-- custom responsive -->
    <link rel="stylesheet" href="{{asset('auth')}}/assets/css/responsive.css">
</head>

<body>
    <main class="colored-section">
        <nav class="sub-nav">
            <div class="container">
                <ul>
                    <li><img src="{{asset('auth')}}/assets/images/logo/logo.png" alt="shankal"></li>
                    <li><img src="{{asset('auth')}}/assets/images/logo/Shankal.png" alt="shankal"></li>
                    <li><a href="{{route('home')}}">Skip</a></li>
                </ul>
            </div>
        </nav>
        <section class="section select-user">
            <div class="inner">
                <div class="container">
                    <div class="section-title">
                        <h2>Select User</h2>
                    </div>

                    @yield("content")
                    
                </div>
            </div>
        </section>
    </main>
    <!-- jquery 3.6 -->
    <script src="{{asset('auth')}}/assets/js/jquery-3.6.0.min.js"></script>
    <!-- bootstrap 5 -->
    <script src="{{asset('auth')}}/assets/js/bootstrap.bundle.min.js"></script>
    <!-- fontawesome 6 -->
    <script src="{{asset('auth')}}/assets/js/all.min.js"></script>
    <!-- swiper js -->
    <script src="{{asset('auth')}}/assets/js/swiper-bundle.min.js"></script>
    <!-- custom js -->
    <script src="{{asset('auth')}}/assets/js/script.js"></script>
</body>

</html>
