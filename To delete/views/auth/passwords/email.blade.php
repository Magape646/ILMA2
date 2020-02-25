@extends('layouts.loginregister')

@section('content')
  <!-- begin brand -->
  <div class="login-header">
    <div class="brand">
        <span class="logo" ><img src="{{ asset('assets/img/logo/Readit.png') }}" alt="" /></i></span> <b>Lexi</b>con <b>v</b>2.3

    </div>

</div>
<!-- end brand -->




<div class="login-content">


    <div class="login-content">

        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

        <form class="margin-bottom-0" method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form-group m-b-20">

                <div class="form-group m-b-20">
                    <input id="email" type="email" placeholder="Enter Email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
            </div>



            <div class="login-buttons">
                <div class="login-buttons">
                    <button type="submit" class="btn btn-success btn-block btn-lg">
                        {{ __('Send Password Reset Link') }}
                    </button>


                </div>
            </div>
        </form>
    </div>
</div>


















@endsection
