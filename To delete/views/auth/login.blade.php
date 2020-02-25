@extends('layouts.loginregister')





@section('title')

ILMA | Login
@endsection



@section('content')
  <!-- begin brand -->
  <div class="login-header">
    <div class="brand">
        <span class="logo" ><img src="{{ asset('assets/img/logo/Readit.png') }}" alt="" /></i></span> <b>LMA</b> Login

    </div>

</div>
<!-- end brand -->




<div class="login-content">


    <div class="login-content">
        <form class="margin-bottom-0" method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form-group m-b-20">

                <div class="form-group m-b-20">
                    <input id="email" type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group m-b-20">

                <div class="form-group m-b-20">
                    <input id="password" type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="checkbox checkbox-css m-b-20">
                <div class="checkbox checkbox-css m-b-20">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                </div>
            </div>

            <div class="login-buttons">
                <div class="login-buttons">
                    <button type="submit" class="btn btn-success btn-block btn-lg">
                        {{ __('Sign me in') }}
                    </button>

                    @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('register') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
                </div>
            </div>
        </form>
    </div>
</div>


















@endsection
