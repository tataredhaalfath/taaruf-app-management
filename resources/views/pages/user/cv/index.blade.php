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
                        <div class="profile__container content bg-white px-sm-5 px-2 py-sm-4 py-2 mb-5">
                            <h3>Curriculum Vitae</h3>
                            @if (session('message'))
                                <div class="alert alert-success">
                                    {{ session('message') }}
                                </div>
                            @endif
                            @if ($cv !== null)
                                <div class="row my-3">
                                    <div class="col-lg-12 col-md-10">
                                        <table class="table table-bordered">
                                            <tbody>
                                                <tr class="text-center">
                                                    <th>No</th>
                                                    <th>Judul CV</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                                <tr class="text-center">
                                                    <td>1</td>
                                                    <td>{{ $cv->slug }}</td>
                                                    <td>{{ Auth::user()->status }}</td>
                                                    <td>
                                                        <a href="{{ route('user-cv-edit') }}"
                                                            class="btn btn-warning btn-sm"><i class="fa fa-pen">
                                                                Edit</i></a>
                                                        |
                                                        <a href="{{ route('user-create-cv') }}"
                                                            class="btn btn-success btn-sm"><i
                                                                class="fas fa-file-signature"></i> Lengkapi</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="3">
                                                        Ajukan CV ke admin untuk di review <br> <small
                                                            class="text-muted">Pastikan semua data di cv dan 3
                                                            pertanyaan sudah lengkap</small>
                                                    </td>
                                                    @if ($pengajuan_cv !== null)

                                                        <td class="text-center" width="50%"
                                                            style="background: green; color: white">
                                                            <small>CV Berhasil Diajukan. Silahkan menunggu <br> hingga
                                                                status berubah dari PENDING menjadi ACTIVE agar anda bisa
                                                                memulai taaruf</small>
                                                        </td>
                                                    @elseif ($cv && $question && $profile && $gambar_fisik && $hobi
                                                        && $pendidikan && $gambar_diri && $kriteria && $harapan)
                                                        <td class="text-center" width="50%">
                                                            <form action="{{ route('user-cv-pengajuan') }}" method="POST">
                                                                @csrf
                                                                <input type="hidden" name="user_id" id="user_id"
                                                                    value="{{ Auth::user()->id }}">
                                                                <input type="hidden" name="cv_id" id="cv_id"
                                                                    value="{{ $cv->id }}">
                                                                <input type="hidden" name="question_id" id="question_id"
                                                                    value="{{ $question->id }}">
                                                                <button class="btn btn-primary btn-sm"><i
                                                                        class="fas fa-paper-plane"></i> Kirim CV</button>
                                                            </form>
                                                        </td>
                                                    @else
                                                        <td class="text-center" width="50%">
                                                            <a href="{{ route('user-create-cv') }}"
                                                                class="btn btn-success btn-sm"><i
                                                                    class="fas fa-file-signature"></i> Lengkapi CV</a>
                                                        </td>
                                                    @endif
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            @else
                                <div class="row my-3">
                                    <div class="col-lg-12 col-md-10" style="border: 1px solid #dedede;">
                                        <form action="{{ route('user-storecv') }}" method="POST"
                                            class="px-sm-5 px-2 py-sm-4 py-2 mb-5">
                                            @csrf
                                            <h5>BUAT CV BARU</h5>
                                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                            <div class="form-group">
                                                <label for="slug">Judul CV</label>
                                                <input type="text" class="form-control @error('slug') is-invalid @enderror"
                                                    id="slug" name="slug" value="{{ old('slug') }}">
                                                @error('slug')
                                                    <div id="invalidCheck3Feedback" class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <button type="submit" class="btn btn-primary"
                                                style="float: right;">Submit</button>
                                            <p style="clear: both"></p>
                                        </form>
                                    </div>
                                </div>
                            @endif
                            @if ($question !== null)
                                <div class="row my-3">
                                    <div class="col-lg-12 col-md-10" style="border: 1px solid #dedede;">

                                        <h5 class="mt-3">3 Pertanyaan Taaruf</h5>
                                        <small class="text-muted">pertanyaan akan dijawab oleh pengguna yang ingin
                                            pengajukan taaruf kepada anda</small>
                                        <br><br>
                                        <div class="form-group">
                                            <label for="pertanyaan_1">Pertanyaan 1</label>
                                            <textarea name="pertanyaan_1" id="pertanyaan_1"
                                                class="d-block form-control @error('pertanyaan_1') is-invalid @enderror"
                                                rows="3" readonly>{{ $question->pertanyaan_1 }}</textarea>
                                            @error('pertanyaan_1')
                                                <div id=" invalidCheck3Feedback" class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="pertanyaan_2">Pertanyaan 2</label>
                                            <textarea class="form-control @error('pertanyaan_2') is-invalid @enderror"
                                                id="pertanyaan_2" name="pertanyaan_2" rows="3"
                                                readonly>{{ $question->pertanyaan_2 }}</textarea>
                                            @error('pertanyaan_2')
                                                <div id=" invalidCheck3Feedback" class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="pertanyaan_3">Pertanyaan 3</label>
                                            <textarea class="form-control @error('pertanyaan_3') is-invalid @enderror"
                                                id="pertanyaan_3" name="pertanyaan_3" rows="3"
                                                readonly>{{ $question->pertanyaan_3 }}</textarea>
                                            @error('pertanyaan_3')
                                                <div id=" invalidCheck3Feedback" class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <a href="{{ route('user-question-edit') }}" class="btn btn-warning"
                                            style="float: right;"><i class="fa fa-pen"></i> Edit</a>
                                        <p style="clear: both"></p>
                                    </div>
                                </div>
                            @else
                                <div class="row my-3">
                                    <div class="col-lg-12 col-md-10" style="border: 1px solid #dedede;">
                                        <form action="{{ route('user-question') }}" method="POST"
                                            class="px-sm-5 px-2 py-sm-4 py-2 mb-5">
                                            @csrf
                                            <h5>Buat 3 Pertanyaan Taaruf</h5>
                                            <small class="text-muted">pertanyaan akan dijawab oleh pengguna yang ingin
                                                pengajukan taaruf kepada anda</small>
                                            <br><br>
                                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                            <div class="form-group">
                                                <label for="pertanyaan_1">Pertanyaan 1</label>
                                                <textarea name="pertanyaan_1" id="pertanyaan_1"
                                                    class="d-block form-control @error('pertanyaan_1') is-invalid @enderror"
                                                    rows="3">{{ old('pertanyaan_1') }}</textarea>
                                                @error('pertanyaan_1')
                                                    <div id=" invalidCheck3Feedback" class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="pertanyaan_2">Pertanyaan 2</label>
                                                <textarea class="form-control @error('pertanyaan_2') is-invalid @enderror"
                                                    id="pertanyaan_2" name="pertanyaan_2"
                                                    rows="3">{{ old('pertanyaan_2') }}</textarea>
                                                @error('pertanyaan_2')
                                                    <div id=" invalidCheck3Feedback" class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="pertanyaan_3">Pertanyaan 3</label>
                                                <textarea class="form-control @error('pertanyaan_3') is-invalid @enderror"
                                                    id="pertanyaan_3" name="pertanyaan_3"
                                                    rows="3">{{ old('pertanyaan_3') }}</textarea>
                                                @error('pertanyaan_3')
                                                    <div id=" invalidCheck3Feedback" class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <button type="submit" class="btn btn-primary"
                                                style="float: right;">Submit</button>
                                            <p style="clear: both"></p>
                                        </form>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

@endsection
