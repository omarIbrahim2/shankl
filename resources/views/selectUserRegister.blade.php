@extends("layout.selectUser")


@section("content")



<div class="user-levels">
    <a href="{{url("show/register")}}" class="user-level">
        <div class="level-img">
            <img src="{{asset('auth')}}/assets/images/user/Group.png" alt="level">
        </div>
        <div class="level-name">
            <h3>Parent</h3>
        </div>
    </a>
    <a href="{{url("supplier/show/register")}}" class="user-level">
        <div class="level-img">
            <img src="{{asset('auth')}}/assets/images/user/Vector.png" alt="level">
        </div>
        <div class="level-name">
            <h3>Supplier</h3>
        </div>
    </a>
    <a href="{{url("provider/show/register")}}" class="user-level">
        <div class="level-img">
            <img src="{{asset('auth')}}/assets/images/user/Vector2.png" alt="level">
        </div>
        <div class="level-name">
            <h3>Provider</h3>
        </div>
    </a>
    <a href="{{url("teacher/show/register")}}" class="user-level">
        <div class="level-img">
            <img src="{{asset('auth')}}/assets/images/user/teach.png" alt="level">
        </div>
        <div class="level-name">
            <h3>Teacher</h3>
        </div>
    </a>
</div>

@endsection
