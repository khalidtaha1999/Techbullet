@extends('layouts.app')

@section('content')
    <section id="logInBigSection">
        <section id="logInFormContiner">
            <div id="logInDummyDiv">
                <img src="images/secu.svg">
            </div>
            <div id="logInForm">

                <form class="form-style" method="POST" action="{{ route('register') }}">
                    @csrf

                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                           value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Name">
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror

                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                           name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="E-mail">
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror

                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                           name="password" required autocomplete="new-password" placeholder="Password">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                           required autocomplete="new-password" placeholder="Confirm Password">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Register') }}
                    </button>
                    <a href="/login" id="log-in">Log In</a>
                </form>


            </div>
        </section>
        <img src="images/contact-left-dec.png">
        <img src="images/contact-dec.png">
    </section>




@endsection
