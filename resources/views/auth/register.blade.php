@extends('layouts.app')

@section('auth-header','Register new account' )

@section('content')
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <input type="hidden" id="userRole" name="userRole" value="l">
        <div class="checkbox_big">
            <div  class="inner">

                <a href="#!" id="markerCategory" >
                    <span class="img"></span>
                    <span class="text">AS A MARKER</span>
                </a>
            </div>
            <div class="inner">
                <a href="#!" id="studentCategory" class="active" >
                    <span class="img"></span>
                    <span class="text">AS A STUDENT</span>
                </a>
            </div>

        </div>


        <div class="form-group">
            <label for="name">Name</label>
            <input type="name" id="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

            @error('name')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="email">Email Address</label>
            <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Enter email address">
            @error('email')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror

        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <div class="with-icon">
                <input type="password" id="password"
                       class="form-control @error('password')
                               is-invalid @enderror" name="password"
                       required autocomplete="new-password">

                    <a href="#" class="show-password">
                <img src="images/icons/eye.svg" alt="">
                </a>
                @error('password')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group">
            <label for="password-confirm">Confirm Password</label>
            <div class="with-icon">
                <input type="password" id="password_confirm" name="password_confirmation" class="form-control" placeholder="Enter password again" required autocomplete="new-password">

                <a href="#" class="show-password">
                    <img src="images/icons/eye.svg" alt="">
                </a>
            </div>
        </div>

        <button type="submit" id="submitButton" class="btn btn-primary btn-block" >BECOME A STUDENT</button>

        <div class="terms-text">
            By enrolling at Trish Academy, you agree to our <a href="#">Terms of Use</a> and <a href="#">Privacy Policy</a>.
        </div>




    </form>
    <div class="or-container">
        <span>or</span>
    </div>

    <div class="social-login">
        <a href="{{url('/auth/redirect/google')}}">
            <span class="img"><img src="images/social/google.svg" alt=""></span>
            <span>Sign in with Google</span>
        </a>

        <a href="{{url('/auth/redirect/facebook')}}">
            <span class="img"><img src="images/social/fb.svg" alt=""></span>
            <span>Sign in with Facebook</span>
        </a>

    </div>

    <div class="session-footer">
        Already have an account? <a href="{{ route('login') }}">Log In</a>
    </div>
@endsection



