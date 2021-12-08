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
                        @if ($profile !== null)
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
                                                        <td class="py-0">: {{ $profile->umur }}</td>
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
                            </div>
                        @else
                            <div class="profile__container content bg-white px-sm-3 px-2 py-sm-3 py-2 mb-5">
                                <form action="{{ route('user-store-profile') }}" method="POST"
                                    class="px-sm-5 px-2 py-sm-4 py-2 mb-5" enctype="multipart/form-data">
                                    @csrf
                                    <h5>Profile</h5>
                                    <input type="hidden" name="cv_id" value="{{ $cv->id }}">
                                    <div class="form-group">
                                        <label for="image">Image <small>(max 2.5mb)</small></label>
                                        <input type="file" class="form-control " id="image" name="image" required
                                            placeholder="image">
                                    </div>
                                    <div class="form-group">
                                        <label for="nama">Nama</label>
                                        <input type="text" class="form-control " id="nama" name="nama" required
                                            value="{{ old('nama') }}" placeholder="nama">
                                    </div>
                                    <div class="form-group">
                                        <label for="alamat">Alamat</label>
                                        <input type="text" class="form-control " id="alamat" name="alamat" required
                                            value="{{ old('alamat') }}" placeholder="alamat">
                                    </div>
                                    <div class="form-group">
                                        <label for="tg_lahir">Tanggal Lahir</label>
                                        <input type="date" class="form-control " id="tgl_lahir" name="tgl_lahir" required
                                            value="{{ old('tgl_lagir') }}" placeholder="tanggal lahir">
                                    </div>
                                    <div class="form-group">
                                        <label for="umur">Umur</label>
                                        <input type="number" class="form-control " id="umur" name="umur" required
                                            value="{{ old('umur') }}" placeholder="umur">
                                    </div>
                                    <div class="form-group">
                                        <label for="agama">Agama</label>
                                        <input type="text" class="form-control " id="agama" name="agama" required
                                            value="{{ old('agama') }}" placeholder="agama">
                                    </div>
                                    <div class="form-group">
                                        <label for="manhaj">Manhaj</label>
                                        <input type="text" class="form-control " id="manhaj" name="manhaj" required
                                            value="{{ old('manhaj') }}" placeholder="manhaj">
                                    </div>
                                    <div class="form-group">
                                        <label for="status">Status</label>
                                        <input type="text" class="form-control " id="status" name="status" required
                                            value="{{ old('status') }}" placeholder="status">
                                    </div>
                                    <div class="form-group">
                                        <label for="menikah">Menikah ?</label>
                                        <input type="text" class="form-control " id="menikah" name="menikah" required
                                            value="{{ old('menikah') }}" placeholder="sudah menikah ?">
                                    </div>
                                    <div class="form-group">
                                        <label for="suku">Suku</label>
                                        <input type="text" class="form-control " id="suku" name="suku" required
                                            value="{{ old('suku') }}" placeholder="suku">
                                    </div>
                                    <button type="submit" class="btn btn-primary" style="float: right;">Submit</button>
                                    <p style="clear: both"></p>
                                </form>
                        @endif

                    </div>
                </div>
            </div>
            </div>
        </section>
    </main>
@endsection
