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
                                            <label for="tg_lahir">Tanggal Lahir</label>
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
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>
    </main>
@endsection
