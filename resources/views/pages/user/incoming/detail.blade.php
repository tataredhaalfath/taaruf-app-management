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
                            <div class="row my-3">
                                <div class="col-xl-8 col-lg-8 col-md-10 mx-auto">
                                    <div class="card p-5" width="100%">
                                        <h4 class="text-center"><strong>3 Jawaban Ta'aruf</strong></h4>
                                        <div class="form-group">
                                            <label for="pertanyaan1">1. {{ $question->pertanyaan_1 }}</label>
                                            <textarea class="form-control" id="pertanyaan1" name="pertanyaan1"
                                                readonly>{{ $answer->jawaban_1 }}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="pertanyaan2">2. {{ $question->pertanyaan_2 }}</label>
                                            <textarea class="form-control" id="pertanyaan2" name="pertanyaan2"
                                                readonly>{{ $answer->jawaban_2 }}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="pertanyaan3">3. {{ $question->pertanyaan_3 }}</label>
                                            <textarea class="form-control" id="pertanyaan3" name="pertanyaan3"
                                                readonly>{{ $answer->jawaban_3 }}</textarea>
                                        </div>
                                        <div class="form-group form-check text-center mb-3 mx-auto">
                                            @if ($approve > 0)
                                                <form action="{{ Route('user-incoming-reject') }}" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="ans_id" value="{{ $answer->id }}">
                                                    <input type="hidden" name="user_id_1" value="{{ Auth::user()->id }}">
                                                    <input type="hidden" name="user_id_2" value="{{ $answer->user_id }}">
                                                    <input type="hidden" name="status" value="REJECTED">
                                                    <button class="btn center-block btn-primary" type="submit">Batal
                                                        Ta'aruf</button>
                                                    <br>
                                                    <small class="text-muted">anda tidak bisa menerima ajakan taaruf
                                                        baru selama anda sedang
                                                        menajalani taaruf dengan orang lain</small>
                                                </form>
                                            @elseif ($approve2 >0)
                                                <form action="{{ Route('user-incoming-reject') }}" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="ans_id" value="{{ $answer->id }}">
                                                    <input type="hidden" name="user_id_1" value="{{ Auth::user()->id }}">
                                                    <input type="hidden" name="user_id_2" value="{{ $answer->user_id }}">
                                                    <input type="hidden" name="status" value="REJECTED">
                                                    <button class="btn center-block btn-primary" type="submit">Batal
                                                        Ta'aruf</button>
                                                    <br>
                                                    <small class="text-muted">Pengguna yang bersangkutan sedang
                                                        menjalani proses taaruf dengan orang lain</small>
                                                </form>
                                            @else
                                                <form action="{{ Route('user-incoming-approve') }}" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="ans_id" value="{{ $answer->id }}">
                                                    <input type="hidden" name="user_id_1" value="{{ Auth::user()->id }}">
                                                    <input type="hidden" name="user_id_2" value="{{ $answer->user_id }}">
                                                    <input type="hidden" name="status" value="APPROVED">
                                                    <button type="submit" class="btn btn-success center-block my-3">Terima
                                                        Ta'aruf</button>
                                                    <br>

                                                </form>
                                                <form action="{{ Route('user-incoming-reject') }}" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="ans_id" value="{{ $answer->id }}">
                                                    <input type="hidden" name="user_id_1" value="{{ Auth::user()->id }}">
                                                    <input type="hidden" name="user_id_2" value="{{ $answer->user_id }}">
                                                    <input type="hidden" name="status" value="REJECTED">
                                                    <button class="btn center-block btn-primary" type="submit">Batal
                                                        Ta'aruf</button>
                                                    <br>

                                                </form>
                                            @endif
                                        </div>
                                    </div>
                                </div>
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
