@extends('layouts.check')
@section('title', "Ta'aruf App")
@section('content')
    <!-- main -->
    <main>
        <section class="section__detail__header">
        </section>
        <section class="section__detail__content">
            <div class="container">
                <div class="row">
                    <div class="col-0">
                        <div aria-label="breadcrumb">
                            <div class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item"><a href="taaruf.html">Ta'aruf</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Check</li>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-5 check__image">
                        <div class="row">
                            <div class="col-12 header__check__image">
                                <img src="{{ asset('front-end/assets/images/check_image_1.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6 col-md-6 footer__check__image">
                                <img src="{{ asset('front-end/assets/images/check_image_2.webp') }}" alt="">
                            </div>
                            <div class="col-xl-6 col-md-6 footer__check__image">
                                <img src="{{ asset('front-end/assets/images/check_image_3.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lx-5 col-lg-5 col-md-6 col-sm-10 col-10 mx-auto">
                        <div class="row">
                            <div class="pertanyaan__taaruf justify-content-center">
                                <div class="col-xl-10 col-lg-10 mx-auto mt-5">
                                    <h4 class="text-center"><strong>3 Pertanyaan Ta'aruf</strong></h4>
                                    <form action="{{ route('success') }}" method="POST">
                                        <div class="form-group">
                                            <label for="pertanyaan1">1. Apa sikap anda sebagai suami apabila saya
                                                sebagai istri melakukan
                                                kesalahan yang serius</label>
                                            <textarea class="form-control" id="pertanyaan1" name="pertanyaan1"
                                                required></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="pertanyaan2">2. Seperti apa pandangan anda mengenai hidup
                                                berumah tangga</label>
                                            <textarea class="form-control" id="pertanyaan2" name="pertanyaan2"
                                                required></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="pertanyaan3">3. Apakah anda berkeinginan untuk poligami ketika
                                                seandainya saya sudah
                                                menjadi istri anda ?</label>
                                            <textarea class="form-control" id="pertanyaan3" name="pertanyaan3"
                                                required></textarea>
                                        </div>
                                        <div class="form-group form-check text-center mb-5">
                                            <a href="{{ route('success') }}" type="submit"
                                                class="btn btn-success d-block">Mulai Ta'aruf</a>
                                            <a href="{{ route('detail') }}">Batal Ta'aruf</a>

                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
