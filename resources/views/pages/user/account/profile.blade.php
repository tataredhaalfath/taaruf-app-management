@extends('layouts.app')
@section('title', 'Taaruf App Management')

@section('content')
    <!-- main -->
    <main>
        <section class="section__detail__header">
        </section>

        <section class="section__detail__content user__page__content profile">
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
                        <div class="user__dashboard">
                            <div class="row">
                                <div class="col-xl-7 col-lg-7 col-md-12 profile__detail">
                                    <div class="profile__container content bg-white px-sm-3 px-2 py-sm-3 py-2 mb-5">
                                        <form action="" method="POST" class="px-sm-5 px-2 py-sm-4 py-2 mb-5"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <h5>Profile</h5>
                                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                            <div class="form-group">
                                                <label for="image">Image <small>(max 2mb)</small></label>
                                                <input type="file" class="form-control @error('image') is-invalid @enderror"
                                                    id="image" name="image" placeholder="image" required>
                                                @error('image')
                                                    <div id="invalidCheck3Feedback" class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="telpon">Nomor Telpon</label>
                                                <input type="text"
                                                    class="form-control @error('telpon') is-invalid @enderror" id="telpon"
                                                    name="telpon" value="{{ old('telpon') }}" placeholder="nomor telpon">
                                                @error('telpon')
                                                    <div id="invalidCheck3Feedback" class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <div class="confirm-check mb-4">
                                                    <label for="status" class="d-block">Gender</label>
                                                    <select name="status" id="status" class="p-1" required>
                                                        <option value="L">Laki Laki</option>
                                                        <option value="P">Perempan</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="confirm-check mb-4">
                                                    <label for="kota" class="d-block">Kota</label>
                                                    <select name="kota" id="kota" class="p-1" required>
                                                        <option value="semarang">Semarang</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="confirm-check mb-4">
                                                    <label for="kecamatan" class="d-block">Kecamatan</label>
                                                    <select name="kecamatan" id="kecamatan" class="p-1" required>

                                                    </select>
                                                </div>
                                            </div>

                                            <button type="submit" class="btn btn-primary"
                                                style="float: right;">Submit</button>
                                            <p style="clear: both"></p>
                                            <p class="coba"></p>
                                        </form>
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
@push('api-daerah')
    <script>
        // kecamatan
        fetch(`http://www.emsifa.com/api-wilayah-indonesia/api/districts/3374.json`)
            .then(response => response.json())
            .then(districts => {
                renderKecamatan(districts)
            });

        const renderKecamatan = (api) => {
            const kecamatan = document.querySelector('#kecamatan');
            kecamatan.innerHTML = '';

            api.forEach(kec => {
                kecamatan.innerHTML += `
                  <option value="${kec.name}">${kec.name}</option>
                `;
            });

        }
    </script>
@endpush
