@extends('layouts.login_layout')
@section('content')
<div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <h3>Welcome to CITY NET EMPLOYMENT</h3>
            <p>Login in. To see it in action.</p>
            <form class="m-t" role="form" id="login" method="POST" action="{{ route('login') }}">
                <div class="form-group">
                    <input type="email" class="form-control" placeholder="email" name="email" required="">
                </div>
                {{ csrf_field() }}
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Password" required="">
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">Login</button>
                <a href="#"><small>Forgot password?</small></a>
                <!-- <p class="text-muted text-center"><small>Do not have an account?</small></p> -->
                <!-- <a class="btn btn-sm btn-white btn-block" href="javascript:;">Create an account</a> -->
            </form>
            <p class="m-t"> <small>CITY NET EMPLOYMENT  &copy; {{ date('Y') }}</small> </p>
        </div>
    </div>
@endsection
