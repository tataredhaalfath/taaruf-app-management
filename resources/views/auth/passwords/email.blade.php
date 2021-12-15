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
                <div class="col-xl-5 col-lg-5 col-md-5 col-sm-6 col-8 mx-auto">
                    <div class="" style="height:auto;
                                    background: #ffffff;
                                    border: 1px solid #c9c4c4;
                                    box-sizing: border-box;
                                    box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
                                    border-radius: 8px;
                                    padding: 20px 50px;
                                    margin-bottom: 50px;">

                        <form method="POST" action="{{ route('password.email') }}" class="text-center">
                            @csrf
                            <h3>Ta'aruf.id</h3>
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <div class="form-group ">
                                <label for="email">{{ __('E-Mail Address') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group btn-signin text-center">
                                <button type="submit"
                                    class="btn btn-primary btn-block mb-3">{{ __('Send Password Reset Link') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
