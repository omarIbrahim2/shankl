@extends('layouts.login')


@section('form')
@include("inc.messages")
<form method="POST" action="{{url("provider/login")}}">
    @csrf
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
    <div class="remember">
        <div class="checkbox">
            <input type="checkbox" value="remeber">
            <label>
                remember me
            </label>
        </div>
        <div class="auth">
            <a href="#">Forgot Password</a>
        </div>
    </div>
    <div class="input-item me-auto ms-0">
        <button type="submit" class="custom-out-btn">
            login
        </button>
    </div>

</form>

@endsection
