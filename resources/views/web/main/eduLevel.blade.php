@extends("layouts.main")

@section('title')

 education Level
@endsection

@section("section")
<body>
    <main class="">
        <nav class="sub-nav">
            <div class="container">
                <ul>
                    <li><img src="{{asset("auth")}}/assets/images/logo/logo.png" alt="shankal"></li>
                    <li><img src="{{asset("auth")}}/assets/images/logo/Shankal.png" alt="shankal"></li>
                    <li><a href="{{route('home')}}">Skip</a></li>
                </ul>
            </div>
        </nav>
        <section class="section select-user">
            <div class="inner">
                <div class="container">
                    <div class="section-title">
                        <h2>Select Education Level</h2>
                    </div>
                    <div class="user-levels">
                        <a href="{{url('provider/register')}}" class="user-level" >
                            <div class="level-img" style="border: 1px solid #AF62A6;">
                                <img src="{{asset("auth")}}/assets/images/logo/nurs.png" alt="level">
                            </div>
                            <div class="level-name">
                                <h3 style="color:#AF62A6;">Nurseries</h3>
                            </div>
                        </a>
                        <a href="{{url('provider/register')}}" class="user-level" >
                            <div class="level-img" style="border: 1px solid #FF2BB3;">
                                <img src="{{asset("auth")}}/assets/images/logo/kind.png" alt="level">
                            </div>
                            <div class="level-name">
                                <h3 style="color:#FF2BB3;">Kindergarten</h3>
                            </div>
                        </a>
                        <a href="{{url('provider/register')}}" class="user-level" >
                            <div class="level-img" style="border: 1px solid #BCCF01;">
                                <img src="{{asset("auth")}}/assets/images/logo/logo.png" alt="level">
                            </div>
                            <div class="level-name">
                                <h3 style="color:#BCCF01;">School</h3>
                            </div>
                        </a>

                    </div>
                </div>
            </div>
        </section>
    </main>


@endsection
