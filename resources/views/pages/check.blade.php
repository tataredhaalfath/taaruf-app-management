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
                                    <form action="{{ route('check-store') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="uq_id" value="{{ $question->id }}">
                                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                        <div class="form-group">
                                            <label for="pertanyaan1">1. {{ $question->pertanyaan_1 }}</label>
                                            <textarea class="form-control" id="jawaban_1" name="jawaban_1"
                                                required></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="pertanyaan2">2. {{ $question->pertanyaan_2 }}</label>
                                            <textarea class="form-control" id="jawaban_2" name="jawaban_2"
                                                required></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="pertanyaan3">3. {{ $question->pertanyaan_3 }}</label>
                                            <textarea class="form-control" id="jawaban_3" name="jawaban_3"
                                                required></textarea>
                                        </div>
                                        <div class="form-group form-check text-center mb-5">
                                            <button type="submit" class="btn btn-success d-block">Mulai Ta'aruf</button>
                                            <a href="{{ route('detail', $cv->slug) }}">Batal Ta'aruf</a>
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
