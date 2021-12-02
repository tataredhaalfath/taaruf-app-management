@extends('layouts.app');
@section('title', "Ta'aruf App Management")

@section('content')
    <!-- header -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-4 col-md-5 col-sm-12 text__hero">
                    <h2>Dilanjut Ta'aruf Terus <br> Khitbah Baru Nikah</h2>
                    <p>Bila Allah menginginkan dua hati untuk bersatu,
                        Dia akan menggerakkan keduanya,
                        bukan hanya satu</p>
                    <a href="taaruf.html" class="btn btn-primary">Mulai Ta'aruf</a>
                </div>
                <div class="col-xl-7 col-lg-8 col-md-7 mr-0 image__hero">
                    <img src="{{ asset('front-end/assets/images/header_image.png') }}" alt="">
                </div>
            </div>
        </div>
    </header>
    <!-- main -->
    <main>
        <div class="container">
            <!-- kajian pranikah -->
            <section class="kajian__pranikah">
                <div class="row">
                    <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12">
                        <h3>Kajian Pranikah</h3>
                        <iframe class="video__pranikah" src="https://www.youtube.com/embed/N-VM3Ts_gdU"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                    <div class="col-xl-4 col-lg-42"></div>
                </div>
            </section>

            <!-- quotes -->
            <section class="taaruf__quotes">
                <div class="row">
                    <div class="col-8">
                        <h3>Quotes Mingguan</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6">
                        <img src="assets/images/quote.jpg" alt="qoutes" srcset="">
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6">
                        <img src="assets/images/quote.jpg" alt="qoutes" srcset="">
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6">
                        <img src="assets/images/quote.jpg" alt="qoutes" srcset="">
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6">
                        <img src="assets/images/quote.jpg" alt="qoutes" srcset="">
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6">
                        <img src="assets/images/quote.jpg" alt="qoutes" srcset="">
                    </div>
                </div>
            </section>

            <!-- stories / testimonial -->
            <section class="stories">
                <div class="row">
                    <div class="col-8">
                        <h3>Testimonial</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-10 xol-lg-10 col-md-12">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                                <img src="{{ asset('front-end/assets/images/stories.pn') }}g" alt="stories">
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-6">
                                <h5>Happy Family</h5>
                                <p>⭐️⭐️⭐️⭐️⭐️</p>
                                <p>Alhamdulillah, atas izin Allah melalui app ini saya dpat bertemu dgn jodoh saya dn
                                    dengan jalan yg insyaAllah sangat terjaga sesuai syariat islam. Yg terpenting
                                    luruskan niat kita yaaa jomblowan dan jomblowatih</p>
                                <a href="stories.html" class="btn btn-primary">Read Story</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>
@endsection
