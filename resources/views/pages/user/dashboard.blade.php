@extends('layouts.app')
@section('title', "Ta'aruf App Management")

@section('content')
    <!-- main -->
    <main>
        <section class="section__detail__header">
        </section>

        <section class="section__detail__content user__page__content">
            <div class="container">
                @include('includes.user.breadcrumb')
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-8 col-8">
                        @include('includes.user.menu')
                    </div>
                    <div class="col-xl-9 col-lg-9 col-md-12">
                        <div class=" detail__cv">
                            <div class="cv__title mt-3">
                                <h2 class="text-right">Curriculum Vitae</h2>
                            </div>
                            <div class="cv__profile">
                                <h4 class="cv__nama">Josua Suherno</h4>
                                <div class="row">
                                    <div class="col-xl-5 col-lg-5 col-md-6 col-sm-8 col-xs-8 profile__image">
                                        <img src="/front-end/assets/images/users/user_img_2.png" data-caman="stackBlur(8)"
                                            alt="user image">
                                    </div>
                                    <div class="col-xl-7 col-lg-7 col-md-12 profile__detail">
                                        <table class="table table-borderless table-sm">
                                            <tbody>
                                                <tr>
                                                    <th class="py-0" width="25%">Nama</th>
                                                    <td class="py-0">: Josua Suherno</td>
                                                </tr>
                                                <tr>
                                                    <th class="py-0" width="25%">Alamat</th>
                                                    <td class="py-0">: Ds. Khayalan RT02/RW05 Kec.Pelangi,
                                                        Kab.Jombang, Indonesia</td>
                                                </tr>
                                                <tr>
                                                    <th class="py-0" width="25%">Tempat / tgl lahir</th>
                                                    <td class="py-0">: Banjarnegara, 24 agustus 2000</td>
                                                </tr>
                                                <tr>
                                                    <th class="py-0" width="25%">Umur</th>
                                                    <td class="py-0">: 21</td>
                                                </tr>
                                                <tr>
                                                    <th class="py-0" width="25%">Agama</th>
                                                    <td class="py-0">: Islam</td>
                                                </tr>
                                                <tr>
                                                    <th class="py-0" width="25%">Manhaj</th>
                                                    <td class="py-0">: Salafi</td>
                                                </tr>
                                                <tr>
                                                    <th class="py-0" width="25%">Status</th>
                                                    <td class="py-0">: Mahasiswa</td>
                                                </tr>
                                                <tr>
                                                    <th class="py-0" width="25%">Menikah</th>
                                                    <td class="py-0">: Belum</td>
                                                </tr>
                                                <tr>
                                                    <th class="py-0" width="25%">Suku</th>
                                                    <td class="py-0">: Jawa</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="cv__gambar__fisik">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <h4>Gambaran Fisik</h4>
                                        <table class="table table-borderless table-sm">
                                            <tbody>
                                                <tr>
                                                    <th class="py-0" width="25%">Bentuk Fisik</th>
                                                    <td class="py-0">: Berisi. Tidak gemuk dan tidak kurus</td>
                                                </tr>
                                                <tr>
                                                    <th class="py-0" width="25%">Warna Kulit</th>
                                                    <td class="py-0">: Putih bersih</td>
                                                </tr>
                                                <tr>
                                                    <th class="py-0" width="25%">Berat Badan</th>
                                                    <td class="py-0">: 65 kg</td>
                                                </tr>
                                                <tr>
                                                    <th class="py-0" width="25%">Tinggi Badan</th>
                                                    <td class="py-0">: 168 cm</td>
                                                </tr>
                                                <tr>
                                                    <th class="py-0" width="25%">Riwayat Penyakit</th>
                                                    <td class="py-0">: Tidak ada. Setidaknya belum.</td>
                                                </tr>
                                                <tr>
                                                    <th class="py-0" width="25%">Gol.Darah</th>
                                                    <td class="py-0">: AB+</td>
                                                </tr>
                                                <tr>
                                                    <th class="py-0" width="25%">Cacat Fisik</th>
                                                    <td class="py-0">: Tidak ada</td>
                                                </tr>
                                                <tr>
                                                    <th class="py-0" width="25%">Tipe Rambut</th>
                                                    <td class="py-0">: Lurus</td>
                                                </tr>
                                                <tr>
                                                    <th class="py-0" width="25%">Warna Mata</th>
                                                    <td class="py-0">: Biru</td>
                                                </tr>
                                                <tr>
                                                    <th class="py-0" width="25%">Ciri Khas / tanda lahir</th>
                                                    <td class="py-0">: Tahi lalat di dekat bibir</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="cv__gambar__fisik">
                                <div class="row">
                                    <div class="col-lg-10">
                                        <h4>Hobi dan Kebiasaan</h4>
                                        <ul style="list-style: none;">
                                            <li>Membantu Ibu</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="cv__pendidikan">
                                <div class="row">
                                    <div class="col-lg-10">
                                        <h4>Riwayat Pendidikan</h4>
                                        <ul style="list-style: none;">
                                            <li><strong>SMK Bakti Bangsa</strong></li>
                                            <li>Kimia Analisis</li>
                                            <li><strong>Institut Teknologi 10 November</strong></li>
                                            <li>Teknik Kimia Murni</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="cv__gambaran__diri">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <h4>Gambaran Diri</h4>
                                        <table class="table table-borderless table-sm">
                                            <tbody>
                                                <tr>
                                                    <th class="py-0" width="25%">Motto</th>
                                                    <td class="py-0">: Sesungguhnya Sholatku, Hidupku dan Matiku
                                                        hanya untuk Allah</td>
                                                </tr>
                                                <tr>
                                                    <th class="py-0" width="25%">Target Hidup</th>
                                                    <td class="py-0">: Menjalani hidup sesuai dengan tuntunan
                                                        Syariah Islam</td>
                                                </tr>
                                                <tr>
                                                    <th class="py-0" width="25%">Kegiatan Waktu Luang</th>
                                                    <td class="py-0">: Mempelajari hal-hal baru dan memperdalam
                                                        skill</td>
                                                </tr>
                                                <tr>
                                                    <th class="py-0" width="25%">Kesukaan</th>
                                                    <td class="py-0">: Segala sesuatu yang berkaitan dengan
                                                        teknologi</td>
                                                </tr>
                                                <tr>
                                                    <th class="py-0" width="25%">Sisi Negatif</th>
                                                    <td class="py-0">: Suka begadang</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="cv__kriteria__pasangan">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <h4>Kriteria Pasangan</h4>
                                        <table class="table table-borderless table-sm">
                                            <tbody>
                                                <tr>
                                                    <th class="py-0" width="25%">Tinggi Badan</th>
                                                    <td class="py-0">: Diatas 170cm</td>
                                                </tr>
                                                <tr>
                                                    <th class="py-0" width="25%">Suku</th>
                                                    <td class="py-0">: Tidak membatasi.</td>
                                                </tr>
                                                <tr>
                                                    <th class="py-0" width="25%">Usia</th>
                                                    <td class="py-0">: 20 - 27 tahun</td>
                                                </tr>
                                                <tr>
                                                    <th class="py-0" width="25%">Pekerjaan</th>
                                                    <td class="py-0">: Tidak membatasi</td>
                                                </tr>
                                                <tr>
                                                    <th class="py-0" width="25%">Tambahan</th>
                                                    <td class="py-0">: Memiliki attitude dan omongannya bisa
                                                        dipegang</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="cv__harapan__pernikahan">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <table class="table table-borderless table-sm">
                                            <tbody>
                                                <tr>
                                                    <th>Visi dan Misi</th>
                                                </tr>
                                                <tr>
                                                    <td class="py-0">Membangun keluarga yang harmonis,
                                                        berlandaskan aran ajaran dan syariat agama
                                                        islam</td>
                                                </tr>
                                                <tr>
                                                    <th>Karir Masa Depan</th>
                                                </tr>
                                                <tr>
                                                    <td class="py-0">Diharapkan suami mengizinkan untuk bekerja
                                                        agar dapat menyalurkan minat dan
                                                        bakat yang
                                                        selama ini di pelajari</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </main>
@endsection
