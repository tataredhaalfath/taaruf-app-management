@extends('layouts.auth')

@section('content')
    <div class="container">
        <div class="col-3 ml-auto">
            <div class="signin__gradasi">
            </div>
        </div>
    </div>
    <main class="signin">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-10 col-10 signin__title">
                    <h2>Menikah adalah separuh perjalanan ketakwaan kepada Allah dan bagian dari sunnah Rasulullah</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-7 col-lg-7 col-md-7 col-sm-6">
                    <div class="row signin__image no-gutters">
                        <div class="col-xl-7 col-lg-7 col-md-7 col-sm-7">
                            <img src="/front-end/assets/images/signin-1.jpg" alt="signin-image">
                            <img src="/front-end/assets/images/signin-2.jpg" alt="signin-image">
                        </div>
                        <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5">
                            <img src="/front-end/assets/images/signin-3.jpg" alt="signin-image">
                            <img src="/front-end/assets/images/signin-4.png" alt="signin-image">
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-5 col-md-5 col-sm-6 col-10 mx-auto">
                    <div class="form-signin">
                        <form action="{{ route('login') }}" method="POST">
                            @csrf
                            <h3>Ta'aruf.id</h3>
                            <div class="form-group ">
                                <label for="email">{{ __('E-Mail Address') }}</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                                    name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="password">{{ __('Password') }}</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror"
                                    id="password" name="password" required autocomplete="current-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                    {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                            <div class="form-group btn-signin text-center">
                                <button type="submit" class="btn btn-primary mb-3">{{ __('Login') }}</button>
                                <a class="btn btn-regist" width="100" href="/register">Register</a>
                                <br>
                                <hr>
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
