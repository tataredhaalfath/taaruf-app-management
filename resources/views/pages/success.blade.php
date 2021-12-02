@extends('layouts.check');
@section('title', 'Success Page');
@section('content')
    <!-- main -->
    <main>
        <div class="success d-flex align-items-center mb-5">
            <div class="col text-center">
                <img src="{{ asset('front-end/assets/images/icon/icon_mail@2x.png') }}" alt="success image">
                <h3>Permintaan Ta’aruf terkirim</h3>
                <div class="col-xl-4 col-6 mx-auto">
                    <p>Semoaga niat baik anda dapat tersampaikan dan segera mendapatkan kabar baik dari calon pasangan</p>

                </div>
                <a href="{{ route('home') }}" class="btn btn-primary mb-5">Home Page</a>
            </div>
        </div>
    </main>
@endsection
