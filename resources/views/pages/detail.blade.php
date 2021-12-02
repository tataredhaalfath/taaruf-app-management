@extends('layouts.app')
@section('title', 'Detail Page')
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
                                <li class="breadcrumb-item active" aria-current="page">Detail</li>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-8 col-lg-8">
                        <div class=" detail__cv">
                            <div class="cv__title">
                                <h2 class="text-right">Curriculum Vitae</h2>
                            </div>
                            <div class="cv__profile">
                                <h4 class="cv__nama">Riska</h4>
                                <div class="row">
                                    <div class="col-xl-5 col-lg-5 col-md-6 col-sm-8 col-xs-8 profile__image">
                                        <img src="{{ asset('front-end/assets/images/users/user_img.png') }}"
                                            data-caman="stackBlur(8)" alt="user image">
                                    </div>
                                    <div class="col-xl-7 col-lg-7 col-md-12 profile__detail">
                                        <p><strong>Nama Panggilan : </strong>Riska</p>
                                        <p><strong>Alamat : </strong>Ds. Khayalan RT02/RW05 kec. Pelangi,
                                            Kab. Jombang, Indonesia</p>
                                        <p><strong>Tempat / Tgl Lahir : </strong>Banjarmasin, 24 agustus 2020</p>
                                        <p><strong>Umur : </strong>20 Tahun</p>
                                        <p><strong>Agama : </strong>Islam</p>
                                        <p><strong>Manhaj : </strong>Salafi</p>
                                        <p><strong>Status : </strong>Mahasiswa</p>
                                        <p><strong>Menikah : </strong>Belum</p>
                                        <p><strong>Suku : </strong>Bugis</p>
                                    </div>
                                </div>
                            </div>
                            <div class="cv__gambar__fisik">
                                <h4>Gambaran Fisik</h4>
                                <p><strong>Bentuk Fisik : </strong>Berisi. Tidak gemuk dan tidak kurus</p>
                                <p><strong>Warna Kulit : </strong>Putih Bersih</p>
                                <p><strong>Berat Badan : </strong>65 kg</p>
                                <p><strong>Tinggi Badan : </strong>168 cm</p>
                                <p><strong>Riwayat Penyakit : </strong>Tidak ada</p>
                                <p><strong>Gol. Darah : </strong>AB+</p>
                                <p><strong>Cacat Fisik : </strong>Tidak</p>
                                <p><strong>Tipe Rambut : </strong>Lurus</p>
                                <p><strong>Warna Mata : </strong>Coklat</p>
                                <p><strong>Ciri Khas / Tanda Lahir : </strong>Tidak Ada</p>
                            </div>
                            <div class="cv__pendidikan">
                                <h4>Riwayat Pendidikan</h4>
                                <p>Universitas Gadjah Mada - Yogyakarta (2020 - 2024</p>
                                <p>SMA Negeri 1 Kandangan (2016 - 2019)</p>
                            </div>
                            <div class="cv__gambaran__diri">
                                <h4>Gambaran Diri</h4>
                                <p><strong>Moto : </strong>Sesungguhnya Sholatku, Hidupku dan Matiku hanya untuk Allah</p>
                                <p><strong>Target Hidup : </strong>Menjalani hidup sesuai dengan tuntunan Syariah Islam</p>
                                <p><strong>Kegiatan Waktu Luang : </strong>Membaca, Belajar, Menjaga Ponakan</p>
                                <p><strong>Hal Disukai : </strong>Mengeksplor Luasnya dunia</p>
                                <p><strong>Sisi Negatif : </strong>Sering Overthinking</p>
                            </div>
                            <div class="cv__kriteria__pasangan">
                                <h4>Kriteria Pasangan</h4>
                                <p><strong>Tinggi : </strong>Diatas 170cm</p>
                                <p><strong>Suku : </strong>Tidak Membatasi</p>
                                <p><strong>Usia : </strong>20 - 27 Tahun</p>
                                <p><strong>Pekerjaan : </strong>Tidak Membatasi</p>
                                <p><strong>Tambahan : </strong>Memiliki attitude dan omongannya bisa dipegang</p>
                            </div>
                            <div class="cv__harapan__pernikahan">
                                <h4>Harapan Dalam Pernikahan</h4>
                                <h6><strong>Visi dan Misi</strong></h6>
                                <p>Membangun keluarga yang harmonis, berlandaskan aran ajaran dan syariat agama islam</p>
                                <br>
                                <h6><strong>Karir Masa Depan</strong></h6>
                                <p>Membangun keluarga yang harmonis, berlandaskan aran ajaran dan syariat agama islam</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lx-4 col-lg-4">
                        <aside class="card card__detail__aside">
                            <div class="card-body text-center">
                                <p class="card-text">“ Di antara tanda-tanda-Nya adalah bahwa Dia menciptakan untuk
                                    Anda pasangan dari
                                    antara Anda sendiri, untuk memiliki ketenangan dengan mereka dan Dia menempatkan cinta
                                    dan belas
                                    kasihan di antara (hati) Anda: sesungguhnya di dalamnya ada tanda-tanda bagi mereka yang
                                    merenung.”
                                    Quran Ar-Rum [30:21]
                                </p>
                            </div>
                            <div class="btn__ajak__taaruf">
                                <a href="check.html" class="btn btn-success">Ajak Ta'aruf</a>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
