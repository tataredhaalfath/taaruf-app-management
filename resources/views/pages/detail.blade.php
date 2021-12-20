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
                                <h4 class="cv__nama">{{ $user->name }}</h4>
                                <div class="row">
                                    <div class="col-xl-5 col-lg-5 col-md-6 col-sm-8 col-xs-8 profile__image">
                                        <img src="{{ Storage::url($profile->image) }}" data-caman="stackBlur(8)"
                                            alt="{{ $profile->nama }}" width="100%" height="300">
                                    </div>
                                    <div class="col-xl-7 col-lg-7 col-md-12 profile__detail">
                                        <table class="table table-borderless table-sm">
                                            <tbody>
                                                <tr>
                                                    <th class="py-0" width="25%">Nama</th>
                                                    <td class="py-0">: {{ $profile->nama }}</td>
                                                </tr>
                                                <tr>
                                                    <th class="py-0" width="25%">Alamat</th>
                                                    <td class="py-0">: {{ $user_profile->kota }},
                                                        {{ $profile->alamat }}</td>
                                                </tr>
                                                <tr>
                                                    <th class="py-0" width="25%">Tgl lahir</th>
                                                    <td class="py-0">:
                                                        {{ date('d-m-Y', strtotime($profile->tgl_lahir)) }}</td>
                                                </tr>
                                                <tr>
                                                    <th class="py-0" width="25%">Umur</th>
                                                    <td class="py-0">: {{ $profile->umur }} Tahun</td>
                                                </tr>
                                                <tr>
                                                    <th class="py-0" width="25%">Agama</th>
                                                    <td class="py-0">: {{ $profile->agama }}</td>
                                                </tr>
                                                <tr>
                                                    <th class="py-0" width="25%">Manhaj</th>
                                                    <td class="py-0">: {{ $profile->manhaj }}</td>
                                                </tr>
                                                <tr>
                                                    <th class="py-0" width="25%">Status</th>
                                                    <td class="py-0">: {{ $profile->status }}</td>
                                                </tr>
                                                <tr>
                                                    <th class="py-0" width="25%">Menikah</th>
                                                    <td class="py-0">: {{ $profile->menikah }}</td>
                                                </tr>
                                                <tr>
                                                    <th class="py-0" width="25%">Suku</th>
                                                    <td class="py-0">: {{ $profile->suku }}</td>
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
                                                    <td class="py-0">: {{ $gambar_fisik->bentuk_fisik }}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th class="py-0" width="25%">Warna Kulit</th>
                                                    <td class="py-0">: {{ $gambar_fisik->warna_kulit }}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th class="py-0" width="25%">Tinggi Badan</th>
                                                    <td class="py-0">: {{ $gambar_fisik->tinggi }} cm</td>
                                                </tr>
                                                <tr>
                                                    <th class="py-0" width="25%">Berat Badan</th>
                                                    <td class="py-0">: {{ $gambar_fisik->berat }} kg</td>
                                                </tr>
                                                <tr>
                                                    <th class="py-0" width="25%">Riwayat Penyakit</th>
                                                    <td class="py-0">:
                                                        {{ $gambar_fisik->riwayat_penyakit }}</td>
                                                </tr>
                                                <tr>
                                                    <th class="py-0" width="25%">Gol.Darah</th>
                                                    <td class="py-0">: {{ $gambar_fisik->golongan_darah }}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th class="py-0" width="25%">Cacat Fisik</th>
                                                    <td class="py-0">: {{ $gambar_fisik->cacat_fisik }}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th class="py-0" width="25%">Tipe Rambut</th>
                                                    <td class="py-0">: {{ $gambar_fisik->tipe_rambut }}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th class="py-0" width="25%">Warna Mata</th>
                                                    <td class="py-0">: {{ $gambar_fisik->warna_mata }}</td>
                                                </tr>
                                                <tr>
                                                    <th class="py-0" width="25%">Ciri Khas / tanda lahir</th>
                                                    <td class="py-0">: {{ $gambar_fisik->tanda_lahir }}
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="cv__hobi">
                                <div class="row">
                                    <div class="col-lg-10">
                                        <h4>Hobi dan Kebiasaan</h4>
                                        <ul style="list-style: none;">
                                            <li>{{ $hobi->hobi }}</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="cv__pendidikan">
                                <div class="row">
                                    <div class="col-lg-10">
                                        <h4>Riwayat Pendidikan</h4>
                                        <ul style="list-style: none;">
                                            <li><strong>{{ $pendidikan->sma }}</strong></li>
                                            <li class="text-muted">{{ $pendidikan->jurusan_sma }}</li>
                                            <li><strong>{{ $pendidikan->univ }}</strong></li>
                                            <li class="text-muted">{{ $pendidikan->jurusan_univ }}</li>
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
                                                    <td class="py-0">: {{ $gambar_diri->moto }}</td>
                                                </tr>
                                                <tr>
                                                    <th class="py-0" width="25%">Target Hidup</th>
                                                    <td class="py-0">: {{ $gambar_diri->target_hidup }}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th class="py-0" width="25%">Kegiatan Waktu Luang</th>
                                                    <td class="py-0">: {{ $gambar_diri->kegiatan_wl }}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th class="py-0" width="25%">Hal yang disukai</th>
                                                    <td class="py-0">: {{ $gambar_diri->hal_disukai }}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th class="py-0" width="25%">Sisi Negatif</th>
                                                    <td class="py-0">: {{ $gambar_diri->sisi_negatif }}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th class="py-0" width="25%">Merokok</th>
                                                    <td class="py-0">: {{ $gambar_diri->merokok }}</td>
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
                                                    <td class="py-0">: {{ $kriteria->tinggi }}</td>
                                                </tr>
                                                <tr>
                                                    <th class="py-0" width="25%">Suku</th>
                                                    <td class="py-0">: {{ $kriteria->suku }}</td>
                                                </tr>
                                                <tr>
                                                    <th class="py-0" width="25%">Usia</th>
                                                    <td class="py-0">: {{ $kriteria->usia }}</td>
                                                </tr>
                                                <tr>
                                                    <th class="py-0" width="25%">Pekerjaan</th>
                                                    <td class="py-0">: {{ $kriteria->pekerjaan }}</td>
                                                </tr>
                                                <tr>
                                                    <th class="py-0" width="25%">Tambahan</th>
                                                    <td class="py-0">: {{ $kriteria->tambahan }}</td>
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
                                            <h5>Rencana Dalam Pernikahan</h5>
                                            <tbody>
                                                <tr>
                                                    <th>Visi</th>
                                                </tr>
                                                <tr>
                                                    <td class="py-0 text-muted">{{ $harapan->visi }}</td>
                                                </tr>
                                                <tr>
                                                    <th>Misi</th>
                                                </tr>
                                                <tr>
                                                    <td class="py-0 text-muted">{{ $harapan->misi }}</td>
                                                </tr>
                                                <tr>
                                                    <th>Karir Masa Depan</th>
                                                </tr>
                                                <tr>
                                                    <td class="py-0 text-muted">{{ $harapan->karir }}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
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

                            @if ($approve > 0)
                                <div class="btn__ajak__taaruf">
                                    <a class="btn btn-primary">Anda dalam masa taaruf</a>
                                </div>
                            @elseif($approve2 > 0)
                                <div class="btn__ajak__taaruf">
                                    <a class="btn btn-primary">sedang taaruf</a>
                                </div>
                            @elseif ($myGender == $user_profile->gender)
                            @elseif ($user->id != Auth::user()->id)
                                <div class="btn__ajak__taaruf">
                                    <a href="{{ route('check') }}" class="btn btn-success">Ajak Ta'aruf</a>
                                </div>
                            @endif

                        </aside>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
