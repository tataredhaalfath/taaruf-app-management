@extends('layouts.app')
@section('title', "Ta'aruf App Management")

@section('content')
    <!-- main -->
    <main>
        <section class="section__detail__header">
        </section>
        <section class="section__detail__content user__page__content incoming">
            <div class="container">
                <div class="row">
                    <div class="col-0">
                        @include('includes.user.breadcrumb')
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-8 col-8">
                        @include('includes.user.menu')
                    </div>
                    <div class="col-xl-9 col-lg-9 col-md-12">
                        <div class=" detail__cv">
                            @if ($profile !== null)
                                <div class="cv__title mt-3">
                                    <h2 class="text-right">Curriculum Vitae</h2>
                                </div>
                                <div class="cv__profile">
                                    <h4 class="cv__nama">{{ $profile->nama }}</h4>
                                    <div class="row">
                                        <div class="col-xl-5 col-lg-5 col-md-6 col-sm-8 col-xs-8 profile__image">
                                            <img src="{{ Storage::url($profile->image) }}" width="100%" height="300"
                                                data-caman="stackBlur(8)" alt="user image">
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
                                                        <td class="py-0">: {{ $profile->alamat }}</td>
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
                            @else
                                <div class="profile__container content bg-white px-sm-3 px-2 py-sm-3 py-2 mb-5">
                                    <form action="{{ route('user-store-profile') }}" method="POST"
                                        class="px-sm-5 px-2 py-sm-4 py-2 mb-5" enctype="multipart/form-data">
                                        @csrf
                                        <h5>Profile</h5>
                                        <input type="hidden" name="cv_id" value="{{ $cv->id }}">
                                        <div class="form-group">
                                            <label for="image">Image <small>(max 2mb)</small></label>
                                            <input type="file" class="form-control @error('image') is-invalid @enderror"
                                                id="image" name="image" placeholder="image">
                                            @error('image')
                                                <div id="invalidCheck3Feedback" class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="nama">Nama</label>
                                            <input type="text" class="form-control @error('nama') is-invalid @enderror"
                                                id="nama" name="nama" value="{{ old('nama') }}" placeholder="nama">
                                            @error('nama')
                                                <div id="invalidCheck3Feedback" class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="alamat">Alamat</label>
                                            <input type="text" class="form-control @error('alamat') is-invalid @enderror"
                                                id="alamat" name="alamat" value="{{ old('alamat') }}"
                                                placeholder="alamat">
                                            @error('alamat')
                                                <div id="invalidCheck3Feedback" class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="tinggi">Tanggal Lahir</label>
                                            <input type="date" class="form-control @error('tgl_lahir') is-invalid @enderror"
                                                id="tgl_lahir" name="tgl_lahir" required value="{{ old('tgl_lagir') }}"
                                                placeholder="tanggal lahir">
                                            @error('tgl_lahir')
                                                <div id="invalidCheck3Feedback" class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="umur">Umur</label>
                                            <input type="number" class="form-control @error('umur') is-invalid @enderror"
                                                id="umur" name="umur" value="{{ old('umur') }}" placeholder="umur">
                                            @error('umur')
                                                <div id="invalidCheck3Feedback" class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="agama">Agama</label>
                                            <input type="text" class="form-control @error('agama') is-invalid @enderror"
                                                id="agama" name="agama" value="{{ old('agama') }}" placeholder="agama">
                                            @error('agama')
                                                <div id="invalidCheck3Feedback" class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="manhaj">Manhaj</label>
                                            <input type="text" class="form-control @error('manhaj') is-invalid @enderror"
                                                id="manhaj" name="manhaj" value="{{ old('manhaj') }}"
                                                placeholder="manhaj">
                                            @error('manhaj')
                                                <div id="invalidCheck3Feedback" class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="status">Status</label>
                                            <input type="text" class="form-control @error('status') is-invalid @enderror"
                                                id="status" name="status" value="{{ old('status') }}"
                                                placeholder="status">
                                            @error('status')
                                                <div id="invalidCheck3Feedback" class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="menikah">Menikah ?</label>
                                            <input type="text" class="form-control @error('menikah') is-invalid @enderror"
                                                id="menikah" name="menikah" value="{{ old('menikah') }}"
                                                placeholder="sudah menikah ?">
                                            @error('menikah')
                                                <div id="invalidCheck3Feedback" class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="suku">Suku</label>
                                            <input type="text" class="form-control @error('suku') is-invalid @enderror"
                                                id="suku" name="suku" value="{{ old('suku') }}" placeholder="suku">
                                        </div>
                                        <button type="submit" class="btn btn-primary" style="float: right;">Submit</button>
                                        <p style="clear: both"></p>
                                    </form>
                                </div>
                            @endif
                            @if ($gambar_fisik !== null)
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
                            @else
                                <hr>
                                <div class="profile__container content bg-white px-sm-3 px-2 py-sm-3 py-2 mb-5">
                                    <form action="{{ route('user-store-gambar-fisik') }}" method="POST"
                                        class="px-sm-5 px-2 py-sm-4 py-2 mb-5">
                                        @csrf
                                        <h5>Gambaran Fisik</h5>
                                        <input type="hidden" name="cv_id" value="{{ $cv->id }}">
                                        <div class="form-group">
                                            <label for="bentuk_fisik">Bentuk Fisik</label>
                                            <input type="text"
                                                class="form-control @error('bentuk_fisik') is-invalid @enderror"
                                                id="bentuk_fisik" name="bentuk_fisik" value="{{ old('bentuk_fisik') }}"
                                                placeholder="bentuk fisik">
                                            @error('bentuk_fisik')
                                                <div id="invalidCheck3Feedback" class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="warna_kulit">Warna Kulit</label>
                                            <input type="text"
                                                class="form-control @error('warna_kulit') is-invalid @enderror"
                                                id="warna_kulit" name="warna_kulit" value="{{ old('warna_kulit') }}"
                                                placeholder="warna kulit">
                                            @error('warna_kulit')
                                                <div id="invalidCheck3Feedback" class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="tinggi">Tinggi <small>(cm)</small></label>
                                            <input type="number" class="form-control @error('tinggi') is-invalid @enderror"
                                                id="tinggi" name="tinggi" required value="{{ old('tinggi') }}"
                                                placeholder="tinggi (cm)">
                                            @error('tinggi')
                                                <div id="invalidCheck3Feedback" class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="berat">Berat <small>(kg)</small></label>
                                            <input type="number" class="form-control @error('berat') is-invalid @enderror"
                                                id="berat" name="berat" value="{{ old('berat') }}" placeholder="berat">
                                            @error('berat')
                                                <div id="invalidCheck3Feedback" class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="riwayat_penyakit">Riwayar Penyakit</label>
                                            <input type="text"
                                                class="form-control @error('riwayat_penyakit') is-invalid @enderror"
                                                id="riwayat_penyakit" name="riwayat_penyakit"
                                                value="{{ old('riwayat_penyakit') }}" placeholder="riwayat_penyakit">
                                            @error('riwayat penyakit')
                                                <div id="invalidCheck3Feedback" class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="golongan_darah">Golongan Darah</label>
                                            <input type="text"
                                                class="form-control @error('golongan_darah') is-invalid @enderror"
                                                id="golongan_darah" name="golongan_darah"
                                                value="{{ old('golongan_darah') }}" placeholder="golongan darah">
                                            @error('golongan_darah')
                                                <div id="invalidCheck3Feedback" class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="cacat_fisik">Cacat Fisik</label>
                                            <input type="text"
                                                class="form-control @error('cacat_fisik') is-invalid @enderror"
                                                id="cacat_fisik" name="cacat_fisik" value="{{ old('cacat_fisik') }}"
                                                placeholder="cacat fisik">
                                            @error('cacat_fisik')
                                                <div id="invalidCheck3Feedback" class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="tipe_rambut">Tipe Rambut</label>
                                            <input type="text"
                                                class="form-control @error('tipe_rambut') is-invalid @enderror"
                                                id="tipe_rambut" name="tipe_rambut" value="{{ old('tipe_rambut') }}"
                                                placeholder="tipe rambut">
                                            @error('tipe_rambut')
                                                <div id="invalidCheck3Feedback" class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="warna_mata">Warna Mata</label>
                                            <input type="text"
                                                class="form-control @error('warna_mata') is-invalid @enderror"
                                                id="warna_mata" name="warna_mata" value="{{ old('warna_mata') }}"
                                                placeholder="warna mata">
                                            @error('warna_mata')
                                                <div id="invalidCheck3Feedback" class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="tanda_lahir">Ciri Khas / Tanda Lahir</label>
                                            <input type="text"
                                                class="form-control @error('tanda_lahir') is-invalid @enderror"
                                                id="tanda_lahir" name="tanda_lahir" value="{{ old('tanda_lahir') }}"
                                                placeholder="tanda lahir">
                                            @error('tanda_lahir')
                                                <div id="invalidCheck3Feedback" class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <button type="submit" class="btn btn-primary" style="float: right;">Submit</button>
                                        <p style="clear: both"></p>
                                    </form>
                                </div>
                            @endif
                            @if ($hobi !== null)
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
                            @else
                                <hr>
                                <div class="profile__container content bg-white px-sm-3 px-2 py-sm-3 py-2 mb-5">
                                    <form action="{{ route('user-store-hobi') }}" method="POST"
                                        class="px-sm-5 px-2 py-sm-4 py-2 mb-5">
                                        @csrf
                                        <h5>Hobi</h5>
                                        <input type="hidden" name="cv_id" value="{{ $cv->id }}">
                                        <div class="form-group">
                                            <label for="hobi">Hobi</label>
                                            <input type="text" class="form-control @error('hobi') is-invalid @enderror"
                                                id="hobi" name="hobi" value="{{ old('hobi') }}" placeholder="hobi">
                                            @error('hobi')
                                                <div id="invalidCheck3Feedback" class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <button type="submit" class="btn btn-primary" style="float: right;">Submit</button>
                                        <p style="clear: both"></p>
                                    </form>
                                </div>
                            @endif
                            @if ($pendidikan !== null)
                                ada
                            @else
                                <hr>
                                <div class="profile__container content bg-white px-sm-3 px-2 py-sm-3 py-2 mb-5">
                                    <form action="{{ route('user-store-gambar-fisik') }}" method="POST"
                                        class="px-sm-5 px-2 py-sm-4 py-2 mb-5">
                                        @csrf
                                        <h5>Riwayat Pendidikan</h5>
                                        <div class="form-group">
                                            <label for="sma">SMA / SMK</label>
                                            <input type="text" class="form-control @error('sma') is-invalid @enderror"
                                                id="sma" name="sma" value="{{ old('sma') }}" placeholder="sma / smk">
                                            @error('sma')
                                                <div id="invalidCheck3Feedback" class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="jurusan_sma">Jurusan Sekolah</label>
                                            <input type="text"
                                                class="form-control @error('jurusan_sma') is-invalid @enderror"
                                                id="jurusan_sma" name="jurusan_sma" value="{{ old('jurusan_sma') }}"
                                                placeholder="jurusan sekolah">
                                            @error('jurusan_sma')
                                                <div id="invalidCheck3Feedback" class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="univ">Universitas</label>
                                            <input type="text" class="form-control @error('univ') is-invalid @enderror"
                                                id="univ" name="univ" value="{{ old('univ') }}"
                                                placeholder="universitas">
                                            @error('univ')
                                                <div id="invalidCheck3Feedback" class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="jurusan_univ">Jurusan Kuliah</label>
                                            <input type="text"
                                                class="form-control @error('jurusan_univ') is-invalid @enderror"
                                                id="jurusan_univ" name="jurusan_univ" value="{{ old('jurusan_univ') }}"
                                                placeholder="Jurusan Kuliah">
                                            @error('jurusan_univ')
                                                <div id="invalidCheck3Feedback" class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <button type="submit" class="btn btn-primary" style="float: right;">Submit</button>
                                        <p style="clear: both"></p>
                                    </form>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>
    </main>
@endsection
