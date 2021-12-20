@extends('layouts.app')
@section('title', "Ta'aruf App Management")

@section('content')
    <!-- header -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-4 col-md-5 col-sm-12 text__hero">
                    <h2>Dilanjut Ta'aruf Terus <br> Khitbah Baru Nikah</h2>
                    <p class="text-muted">Bila Allah menginginkan dua hati untuk bersatu,
                        Dia akan menggerakkan keduanya,
                        bukan hanya satu</p>
                    <a href="{{ route('taaruf') }}" class="btn btn-primary">Mulai Ta'aruf</a>
                </div>
                <div class="col-xl-7 col-lg-8 col-md-7 mr-0 image__hero">
                    <img src="/front-end/assets/images/header_image.png" alt="">
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
                    <div class="col-xl-10 col-lg-10 col-md-12 col-sm-12 mx-auto my-5 text-center ">
                        <h3>Kajian Pranikah</h3>
                        <p class="mb-5 text-muted">Pertanyaan yang sering terlintas <br> sebelum memulai taaruf</p>
                        @if ($kajian)
                            <iframe class="video__pranikah" src="{{ $kajian->url }}" title="{{ $kajian->judul }}"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                        @endif
                    </div>
                </div>
            </section>

            <!-- quotes -->
            <section class="taaruf__quotes">
                <div class="row">
                    <div class="col-8 mx-auto text-center my-5">
                        <h3>Quotes Mingguan</h3>
                        <p class="text-muted">Tingkatkan motivasimu dalam menemukan jodoh <br> dengan jalan yang terbaik
                        </p>
                    </div>
                </div>
                <div class="row">
                    @forelse ($quotes as $quote)
                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6">
                            <img src="{{ Storage::url($quote->image) }}" alt="{{ $quote->judul }}">
                        </div>
                    @empty
                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6">
                        </div>
                    @endforelse


                </div>
            </section>

            <!-- stories / testimonial -->
            <section class="stories">
                <div class="row">
                    <div class="col-8 mx-auto text-center my-5">
                        <h3 class="testimonial__title">Testimonial</h3>
                        <p class="text-muted">Apa kesan mereka setelah menemukan <br> pasangan yang mereka impikan</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card__testimonial text-center">
                            <div class="testimonial__content">
                                <img src="/front-end/assets/images/users/user_img.png" data-caman="stackBlur(8)" width="100"
                                    height="100" alt="user" class="mb-4 rounded-circle" />
                                <h3 class="mx-4">Jainab Marfuah</h3>
                                <p class="testimonial">
                                    "Alhamdulillah dengan adanya platform ini saya dapat bertemu dengan cemimiw saya.
                                    terimakasih kepada konselator yang telah membantu selama proses ta’aruf"
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card__testimonial text-center">
                            <div class="testimonial__content">
                                <img src="/front-end/assets/images/users/user_img_2.png" data-caman="stackBlur(8)"
                                    width="100" height="100" alt="user" class="mb-4 rounded-circle" />
                                <h3 class="mx-4">Shohibul Anwar</h3>
                                <p class="testimonial">
                                    "Alhamdulillah dengan adanya platform ini saya dapat bertemu dengan cemimiw saya.
                                    terimakasih kepada konselator yang telah membantu selama proses ta’aruf"
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card__testimonial text-center">
                            <div class="testimonial__content">
                                <img src="/front-end/assets/images/users/user_img_3.png" data-caman="stackBlur(8)"
                                    width="100" height="100" alt="user" class="mb-4 rounded-circle" />
                                <h3 class="mx-4">Fitri Novalena</h3>
                                <p class="testimonial">
                                    "Alhamdulillah dengan adanya platform ini saya dapat bertemu dengan cemimiw saya.
                                    terimakasih kepada konselator yang telah membantu selama proses ta’aruf"
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row stories__btn">
                    <div class="col-12 text-center">
                        <a href="{{ route('taaruf') }}" class="btn btn-taaruf px-4 mt-4 mx-1">
                            Mulai Taaruf
                        </a>
                        <a href="{{ route('stories') }}" class="btn btn-primary px-4 mt-4 mx-1">
                            Testimonial
                        </a>
                    </div>
                </div>
            </section>
        </div>
    </main>
@endsection
