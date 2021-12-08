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

                            <div class="row my-3">
                                <div class="col-lg-12 col-md-10" style="border: 1px solid #dedede;">
                                    <form action="{{ route('user-question-store') }}" method="POST"
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
                                                rows="3">{{ $question->pertanyaan_1 }}</textarea>
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
                                                rows="3">{{ $question->pertanyaan_2 }}</textarea>
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
                                                rows="3">{{ $question->pertanyaan_3 }}</textarea>
                                            @error('pertanyaan_3')
                                                <div id=" invalidCheck3Feedback" class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <button type="submit" class="btn btn-primary" style="float: right;">Submit</button>
                                        <p style="clear: both"></p>
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
