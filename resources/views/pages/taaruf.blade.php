@extends('layouts.app')
@section('title', "Ta'aruf Page")
@section('content')
    <!-- main -->
    <main>
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-8 col-8">
                    <aside>
                        <div class="row">
                            <div class="col-8 mx-auto my-3">
                                <h3 class="filter">Filter</h3>
                                <form action="">
                                    <div class="filter__umur my-3">
                                        <h5>Umur</h5>
                                        <input type="checkbox" class="d-inline" name="usia1" id="usia1"> <label
                                            for="usia1">18 - 30</label>
                                        <br>
                                        <input type="checkbox" class="d-inline" name="usia2" id="usia2"> <label
                                            for="usia2">31 - 40</label>
                                        <br>
                                        <input type="checkbox" class="d-inline" name="usia3" id="usia3"> <label
                                            for="usia3">41 - 50</label>
                                        <br>
                                        <input type="checkbox" class="d-inline" name="usia4" id="usia4"> <label
                                            for="usia4">50 keatas</label>
                                        <br>
                                    </div>
                                    <div class="filter__pendidikan my-3">
                                        <h5>Pendidikan Ahir</h5>
                                        <input type="checkbox" class="d-inline" name="sd" id="sd"> <label
                                            for="sd">SD/Sederajat</label> <br>
                                        <input type="checkbox" class="d-inline" name="smp" id="smp"> <label
                                            for="smp">SMP/Sederajat</label>
                                        <br>
                                        <input type="checkbox" class="d-inline" name="sma" id="sma"> <label
                                            for="sma">SMA/Sederajat</label>
                                        <br>
                                        <input type="checkbox" class="d-inline" name="d3/s1" id="d3/s1"> <label
                                            for="d3/s1">D3/S1</label> <br>
                                        <input type="checkbox" class="d-inline" name="s2" id="s2"> <label
                                            for="s2">S2</label> <br>
                                        <input type="checkbox" class="d-inline" name="s3" id="s3"> <label
                                            for="s3">S3</label> <br>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </aside>
                </div>
                <div class="col-xl-9 col-lg-9 col-md-12">
                    <div class="content">
                        <div class="row">
                            <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6 col-10">
                                <div class="card" style="width: 18rem;">
                                    <img src="{{ asset('front-end/assets/images/users/user_img.png') }}" width="100%"
                                        data-caman="stackBlur(8)" class="card-img-top" id="render-img" alt="user image">
                                    <div class="card-body">
                                        <h5 class="card-title">Rika Safika</h5>
                                        <p class="text-muted">Banjarmasin, 21 Tahun</p>
                                        <p class="card-text"><strong>Tagline : </strong> Cari pria yang sholeh, baik,
                                            bisa memimpin, punya
                                            pendirian, mengayomi, calon ayah yang baik</p>
                                        <a href="{{ route('detail') }}" class="btn btn-sm btn-success">Lihat CV</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6 col-10">
                                <div class="card" style="width: 18rem;">
                                    <img src="{{ asset('front-end/assets/images/users/user_img.png') }}" width="100%"
                                        data-caman="stackBlur(8)" class="card-img-top" id="render-img" alt="user image">
                                    <div class="card-body">
                                        <h5 class="card-title">Rika Safika</h5>
                                        <p class="text-muted">Banjarmasin, 21 Tahun</p>
                                        <p class="card-text"><strong>Tagline : </strong> Cari pria yang sholeh, baik,
                                            bisa memimpin, punya
                                            pendirian, mengayomi, calon ayah yang baik</p>
                                        <a href="detail.html" class="btn btn-sm btn-success">Lihat CV</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6 col-10">
                                <div class="card" style="width: 18rem;">
                                    <img src="{{ asset('front-end/assets/images/users/user_img.png') }}" width="100%"
                                        data-caman="stackBlur(8)" class="card-img-top" id="render-img" alt="user image">
                                    <div class="card-body">
                                        <h5 class="card-title">Rika Safika</h5>
                                        <p class="text-muted">Banjarmasin, 21 Tahun</p>
                                        <p class="card-text"><strong>Tagline : </strong> Cari pria yang sholeh, baik,
                                            bisa memimpin, punya
                                            pendirian, mengayomi, calon ayah yang baik</p>
                                        <a href="detail.html" class="btn btn-sm btn-success">Lihat CV</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6 col-10">
                                <div class="card" style="width: 18rem;">
                                    <img src="{{ asset('front-end/assets/images/users/user_img.png') }}" width="100%"
                                        data-caman="stackBlur(8)" class="card-img-top" id="render-img" alt="user image">
                                    <div class="card-body">
                                        <h5 class="card-title">Rika Safika</h5>
                                        <p class="text-muted">Banjarmasin, 21 Tahun</p>
                                        <p class="card-text"><strong>Tagline : </strong> Cari pria yang sholeh, baik,
                                            bisa memimpin, punya
                                            pendirian, mengayomi, calon ayah yang baik</p>
                                        <a href="detail.html" class="btn btn-sm btn-success">Lihat CV</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6 col-10">
                                <div class="card" style="width: 18rem;">
                                    <img src="{{ asset('front-end/assets/images/users/user_img.png') }}" width="100%"
                                        data-caman="stackBlur(8)" class="card-img-top" id="render-img" alt="user image">
                                    <div class="card-body">
                                        <h5 class="card-title">Rika Safika</h5>
                                        <p class="text-muted">Banjarmasin, 21 Tahun</p>
                                        <p class="card-text"><strong>Tagline : </strong> Cari pria yang sholeh, baik,
                                            bisa memimpin, punya
                                            pendirian, mengayomi, calon ayah yang baik</p>
                                        <a href="detail.html" class="btn btn-sm btn-success">Lihat CV</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6 col-10">
                                <div class="card" style="width: 18rem;">
                                    <img src="{{ asset('front-end/assets/images/users/user_img.png') }}" width="100%"
                                        data-caman="stackBlur(8)" class="card-img-top" id="render-img" alt="user image">
                                    <div class="card-body">
                                        <h5 class="card-title">Rika Safika</h5>
                                        <p class="text-muted">Banjarmasin, 21 Tahun</p>
                                        <p class="card-text"><strong>Tagline : </strong> Cari pria yang sholeh, baik,
                                            bisa memimpin, punya
                                            pendirian, mengayomi, calon ayah yang baik</p>
                                        <a href="detail.html" class="btn btn-sm btn-success">Lihat CV</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6 col-10">
                                <div class="card" style="width: 18rem;">
                                    <img src="{{ asset('front-end/assets/images/users/user_img.png') }}" width="100%"
                                        data-caman="stackBlur(8)" class="card-img-top" id="render-img" alt="user image">
                                    <div class="card-body">
                                        <h5 class="card-title">Rika Safika</h5>
                                        <p class="text-muted">Banjarmasin, 21 Tahun</p>
                                        <p class="card-text"><strong>Tagline : </strong> Cari pria yang sholeh, baik,
                                            bisa memimpin, punya
                                            pendirian, mengayomi, calon ayah yang baik</p>
                                        <a href="detail.html" class="btn btn-sm btn-success">Lihat CV</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6 col-10">
                                <div class="card" style="width: 18rem;">
                                    <img src="{{ asset('front-end/assets/images/users/user_img.png') }}" width="100%"
                                        data-caman="stackBlur(8)" class="card-img-top" id="render-img" alt="user image">
                                    <div class="card-body">
                                        <h5 class="card-title">Rika Safika</h5>
                                        <p class="text-muted">Banjarmasin, 21 Tahun</p>
                                        <p class="card-text"><strong>Tagline : </strong> Cari pria yang sholeh, baik,
                                            bisa memimpin, punya
                                            pendirian, mengayomi, calon ayah yang baik</p>
                                        <a href="detail.html" class="btn btn-sm btn-success">Lihat CV</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6 col-10">
                                <div class="card" style="width: 18rem;">
                                    <img src="{{ asset('front-end/assets/images/users/user_img.png') }}" width="100%"
                                        data-caman="stackBlur(8)" class="card-img-top" id="render-img" alt="user image">
                                    <div class="card-body">
                                        <h5 class="card-title">Rika Safika</h5>
                                        <p class="text-muted">Banjarmasin, 21 Tahun</p>
                                        <p class="card-text"><strong>Tagline : </strong> Cari pria yang sholeh, baik,
                                            bisa memimpin, punya
                                            pendirian, mengayomi, calon ayah yang baik</p>
                                        <a href="detail.html" class="btn btn-sm btn-success">Lihat CV</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6 col-10">
                                <div class="card" style="width: 18rem;">
                                    <img src="{{ asset('front-end/assets/images/users/user_img.png') }}" width="100%"
                                        data-caman="stackBlur(8)" class="card-img-top" id="render-img" alt="user image">
                                    <div class="card-body">
                                        <h5 class="card-title">Rika Safika</h5>
                                        <p class="text-muted">Banjarmasin, 21 Tahun</p>
                                        <p class="card-text"><strong>Tagline : </strong> Cari pria yang sholeh, baik,
                                            bisa memimpin, punya
                                            pendirian, mengayomi, calon ayah yang baik</p>
                                        <a href="detail.html" class="btn btn-sm btn-success">Lihat CV</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6 col-10">
                                <div class="card" style="width: 18rem;">
                                    <img src="{{ asset('front-end/assets/images/users/user_img.png') }}" width="100%"
                                        data-caman="stackBlur(8)" class="card-img-top" id="render-img" alt="user image">
                                    <div class="card-body">
                                        <h5 class="card-title">Rika Safika</h5>
                                        <p class="text-muted">Banjarmasin, 21 Tahun</p>
                                        <p class="card-text"><strong>Tagline : </strong> Cari pria yang sholeh, baik,
                                            bisa memimpin, punya
                                            pendirian, mengayomi, calon ayah yang baik</p>
                                        <a href="detail.html" class="btn btn-sm btn-success">Lihat CV</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6 col-10">
                                <div class="card" style="width: 18rem;">
                                    <img src="{{ asset('front-end/assets/images/users/user_img.png') }}" width="100%"
                                        data-caman="stackBlur(8)" class="card-img-top" id="render-img" alt="user image">
                                    <div class="card-body">
                                        <h5 class="card-title">Rika Safika</h5>
                                        <p class="text-muted">Banjarmasin, 21 Tahun</p>
                                        <p class="card-text"><strong>Tagline : </strong> Cari pria yang sholeh, baik,
                                            bisa memimpin, punya
                                            pendirian, mengayomi, calon ayah yang baik</p>
                                        <a href="detail.html" class="btn btn-sm btn-success">Lihat CV</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6 col-10">
                                <div class="card" style="width: 18rem;">
                                    <img src="{{ asset('front-end/assets/images/users/user_img.png') }}" width="100%"
                                        data-caman="stackBlur(8)" class="card-img-top" id="render-img" alt="user image">
                                    <div class="card-body">
                                        <h5 class="card-title">Rika Safika</h5>
                                        <p class="text-muted">Banjarmasin, 21 Tahun</p>
                                        <p class="card-text"><strong>Tagline : </strong> Cari pria yang sholeh, baik,
                                            bisa memimpin, punya
                                            pendirian, mengayomi, calon ayah yang baik</p>
                                        <a href="detail.html" class="btn btn-sm btn-success">Lihat CV</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center text-center">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                        </a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </main>
@endsection
