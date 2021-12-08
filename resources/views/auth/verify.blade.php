@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center" style="min-height: 50vh;">
            <div class="col-md-8 mx-auto my-auto">
                <div class="card" style="width: 100%; background-color:#eeb405; color:white;">
                    <div class="card-header" style="background-color:#bd8e03;">{{ __('Verify Your Email Address') }}
                    </div>

                    <div class="card-body">
                        @if (session('resent'))
                            <div class="alert alert-success" role="alert">
                                {{ __('Tautan verifikasi baru telah dikirim ke alamat email Anda.') }}
                            </div>
                        @endif

                        {{ __('Sebelum melanjutkan, harap periksa email Anda untuk tautan verifikasi.') }}
                        {{ __('Jika Anda tidak menerima email') }},
                        <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                            @csrf
                            <button type="submit"
                                class="btn btn-link p-0 m-0 align-baseline">{{ __('klik di sini untuk meminta tautan yang lain') }}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
