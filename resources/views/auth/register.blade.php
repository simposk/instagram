@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-md-7">
        <img id="home_logo" src="{{ URL::asset('images/instagram.png')}}">
    </div>
    <div class="col-md-5 instagram_welcome">
        <h1>Instagram</h1>
        <p>Sign up to see photos and videos from your friends.</p>

        <form method="POST" action="{{ route('register') }}">
            {{ csrf_field() }}

            <div class="{{ $errors->has('email') ? ' has-error' : '' }}">
                <input id="email" type="email" placeholder="Email" class="form-control" name="email" value="{{ old('email') }}" required>

                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>

            <div class="{{ $errors->has('fullname') ? ' has-error' : '' }}">            
                <input id="fullname" type="text" placeholder="Full Name" class="form-control" name="fullname" value="{{ old('fullname') }}" required autofocus>

                @if ($errors->has('fullname'))
                    <span class="help-block">
                        <strong>{{ $errors->first('fullname') }}</strong>
                    </span>
                @endif
            </div>

            <div class="{{ $errors->has('username') ? ' has-error' : '' }}">            
                <input id="username" type="text" placeholder="Username" class="form-control" name="username" value="{{ old('username') }}" required autofocus>

                @if ($errors->has('username'))
                    <span class="help-block">
                        <strong>{{ $errors->first('username') }}</strong>
                    </span>
                @endif
            </div>

            <div class="{{ $errors->has('password') ? ' has-error' : '' }}">
                <input id="password" type="password" placeholder="Password" class="form-control" name="password" required>

                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>

            <div>
                <input id="password-confirm" type="password" placeholder="Confirm Password" class="form-control" name="password_confirmation" required>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">
                    Sign Up
                </button>
            </div>
        </form>
        <p>By signing up, you agree to our <br> Terms & Privacy Policy.</p>
    </div>
    <div>
        <p>Have an account? <a href="/login">Log In</a></p>
    </div>
</div>


@endsection