@extends('layouts.admin')
@section('title', 'Data User')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit Kajian</h1>
        </div>
        <div class="col-8">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin-content-updatekajian') }}" method="POST">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="id" value="{{ $kajian->id }}">
                        <div class="form-group ">
                            <label for="judul">Judul</label>
                            <input type="text" class="form-control @error('judul') is-invalid @enderror" id="judul"
                                name="judul" value="{{ $kajian->judul }}" required autocomplete="judul" autofocus>
                            @error('judul')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group ">
                            <label for="url">URL</label>
                            <input type="text" class="form-control @error('url') is-invalid @enderror" id="url" name="url"
                                value="{{ $kajian->url }}" required autocomplete="url">
                            @error('url')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group btn-signin text-center">
                            <button type="submit" class="btn btn-primary mb-3 float-right">Edit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
@endsection
