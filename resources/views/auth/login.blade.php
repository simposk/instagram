@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-md-7">
            <img id="home_logo" src="{{ URL::asset('images/instagram.png')}}">
        </div>

        <div class="col-md-5 instagram_welcome">
            <h1>Instagram</h1>
            <p>Sign in to see photos and videos from your friends.</p>

            <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}

                <div class="{{ $errors->has('email') ? ' has-error' : '' }}">
                    <input id="email" type="email" placeholder="Email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
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

                
                
                <!-- <div class="checkbox">
                    <label>
                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                    </label>
                </div> -->
                
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">
                        Login
                    </button>
                </div>
                
            </form>

            <div>
                <p>Don't have an account? <a href="/register">Sign Up</a></p>
            </div>
        </div>

        <div>
            <a href="{{ route('password.request') }}">Forgot Your Password?</a>
        </div>
    </div>

@endsection
