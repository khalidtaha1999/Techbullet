@extends('layouts.app')
@section('content')
    <section id="logInBigSection">
        <section id="logInFormContiner">
            <div id="logInDummyDiv">
                <img src="images/secu.svg">
            </div>
            <div id="logInForm">
                <form class="form-style" method="POST" action="{{ route('login') }}">
                    @csrf
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                           name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    <div class="col-md-6">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                           name="password" required autocomplete="current-password">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                    <button type="submit" class="btn btn-primary">
                        {{ __('Login') }}
                    </button>
                    <a href="/register" id="sign-up">Sign Up</a>
                </form>
            </div>
        </section>
        <img src="images/contact-left-dec.png">
        <img src="images/contact-dec.png">
    </section>
@endsection
