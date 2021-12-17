@extends('layouts.counselor')
@section('title', 'Edit Configure')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Configure</h1>
        </div>

        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <div class="col-xl-9 col-lg-9 col-md-12">
            <div class="user__dashboard">
                <div class="row">
                    <div class="col-xl-7 col-lg-7 col-md-12 profile__detail">
                        <div class="profile__container content bg-white px-sm-3 px-2 py-sm-3 py-2 mb-5">
                            <form action="{{ route('counselor-update-configure') }}" method="POST"
                                class="px-sm-5 px-2 py-sm-4 py-2 mb-5" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <h5>Profile</h5>
                                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                <input type="hidden" name="old_image" value="{{ $profile->image }}">
                                <img src="{{ Storage::url($profile->image) }}" width="150" height="150" alt="user image">
                                <div class="form-group">
                                    <label for="image">Image <small>(max 2mb)</small></label>
                                    <input type="file" class="form-control @error('image') is-invalid @enderror" id="image"
                                        name="image" placeholder="image">
                                    @error('image')
                                        <div id="invalidCheck3Feedback" class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="telpon">Nomor Telpon</label>
                                    <input type="text" class="form-control @error('telpon') is-invalid @enderror"
                                        id="telpon" name="telpon" value="{{ $profile->telpon }}"
                                        placeholder="nomor telpon">
                                    @error('telpon')
                                        <div id="invalidCheck3Feedback" class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <div class="confirm-check mb-4">
                                        <label for="gender" class="d-block">Gender</label>
                                        <select name="gender" id="gender" class="p-1" required>
                                            <option value="">Pilih Gender</option>
                                            <option value="L">Laki Laki</option>
                                            <option value="P">Perempan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="confirm-check mb-4">
                                        <label for="kota" class="d-block">Kota</label>
                                        <select name="kota" id="kota" class="p-1 @error('kota') is-invalid @enderror"
                                            required>
                                            <option value="">Pilih Kota</option>
                                            <option value="{{ $profile->kota }}" selected>Semarang</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="confirm-check mb-4">
                                        <label for="kecamatan" class="d-block">Kecamatan</label>
                                        <select name="kecamatan" id="kecamatan"
                                            class="p-1 @error('kecamatan') is-invalid @enderror" required>

                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="confirm-check mb-4">
                                        <label for="kelurahan" class="d-block">Kelurahan</label>
                                        <select name="kelurahan" id="kelurahan"
                                            class="p-1 @error('kelurahan') is-invalid @enderror" required>

                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <textarea class="form-control @error('alamat') is-invalid @enderror" id="alamat"
                                        name="alamat" placeholder="alamat lengkap beserta rt/rw"
                                        rows="3">{{ $profile->alamat }}</textarea>
                                    @error('alamat')
                                        <div id="invalidCheck3Feedback" class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="umur">Umur</label>
                                    <input type="number" class="form-control @error('umur') is-invalid @enderror" id="umur"
                                        name="umur" value="{{ $profile->umur }}" placeholder="umur (tahun)">
                                    @error('umur')
                                        <div id="invalidCheck3Feedback" class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <div class="confirm-check mb-4">
                                        <label for="pendidikan_ahir" class="d-block">Pendidikan
                                            Ahir</label>
                                        <select name="pendidikan_ahir" id="pendidikan_ahir" class="p-1" required>
                                            <option value="">Pilih Pendidikan Ahir</option>
                                            <option value="sd">SD / Sederajat</option>
                                            <option value="smp">SMP / Sederajat</option>
                                            <option value="sma">SMA / Sederajat</option>
                                            <option value="s1">D3 / S1</option>
                                            <option value="s2">S2</option>
                                            <option value="s3">S3</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="tagline">Tagline</label>
                                    <textarea class="form-control @error('tagline') is-invalid @enderror" id="tagline"
                                        name="tagline" placeholder="tagline dalam mencari pasangan"
                                        rows="3">{{ $profile->tagline }}</textarea>
                                    @error('tagline')
                                        <div id="invalidCheck3Feedback" class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-primary" style="float: right;">Submit</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
@endsection
@push('api-daerah')
    <script>
        $(document).ready(function() {

            // kecamatan
            fetch(`http://www.emsifa.com/api-wilayah-indonesia/api/districts/3374.json`)
                .then(response => response.json())
                .then(districts => renderKecamatan(districts));

            //keluarahan
            const keluarahan = (kec) => {
                fetch(`http://www.emsifa.com/api-wilayah-indonesia/api/villages/${kec}.json`)
                    .then(response => response.json())
                    .then(villages => renderKelurahan(villages));
            }

            const renderKecamatan = (api) => {
                const kecamatan = document.querySelector('#kecamatan');
                kecamatan.innerHTML = ` 
                    <option value="">Pilih Kecamatan</option>
                `;

                api.forEach(kec => {
                    kecamatan.innerHTML += `
                        <option data-id="${kec.id}" value="${kec.name}">${kec.name}</option>
                `;
                });

                $('#kecamatan').change(function() {
                    let kecamatan_id = $('#kecamatan option:selected').data('id');
                    keluarahan(kecamatan_id);
                })
            }

            const renderKelurahan = (api) => {
                const kelurahan = document.querySelector('#kelurahan');
                kelurahan.innerHTML = ` 
                    <option value="">Pilih Kelurahan</option>
                `;

                api.forEach(kel => {
                    kelurahan.innerHTML += `
                        <option data-id="${kel.id}" value="${kel.name}">${kel.name}</option>
                `;
                });
            }
        })
    </script>
@endpush
