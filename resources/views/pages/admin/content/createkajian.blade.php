@extends('layouts.admin')
@section('title', 'Tambah Kajian')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tambah Kajian</h1>
        </div>
        <div class="col-8">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin-content-storekajian') }}" method="POST">
                        @csrf
                        <div class="form-group ">
                            <label for="judul">Judul</label>
                            <input type="text" class="form-control @error('judul') is-invalid @enderror" id="judul"
                                name="judul" value="{{ old('judul') }}" required autocomplete="judul" autofocus>
                            @error('judul')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group ">
                            <label for="url">URL</label>
                            <input type="text" class="form-control @error('url') is-invalid @enderror" id="url" name="url"
                                value="{{ old('url') }}" required autocomplete="url">
                            @error('url')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group btn-signin text-center">
                            <button type="submit" class="btn btn-primary mb-3 float-right">Tambahkan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
@endsection
