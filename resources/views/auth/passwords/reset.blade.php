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
                    <h2>Tiada satu pun cara yang dapat menyatukan dua manusia yang sedang jatuh cinta kecuali menikah.
                    </h2>
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
                        <form method="POST" action="{{ route('password.update') }}">
                            @csrf
                            <input type="hidden" name="token" value="{{ $token }}">
                            <h3>Ta'aruf.id</h3>
                            <div class="form-group ">
                                <label for="email">Email</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ $email ?? old('email') }}" required autocomplete="email"
                                    autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password" required
                                    autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="password-confirm">Confirm Password</label>
                                <input id="password-confirm" type="password" class="form-control"
                                    name="password_confirmation" required autocomplete="new-password">
                            </div>

                            <div class="form-group btn-signin text-center">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Reset Password') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
