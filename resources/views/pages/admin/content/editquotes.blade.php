@extends('layouts.admin')
@section('title', 'Edit Quotes')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit Quotes</h1>
        </div>
        <div class="col-8">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin-content-updatequotes') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="id" value="{{ $quotes->id }}">
                        <div class="form-group ">
                            <label for="judul">Judul</label>
                            <input type="text" class="form-control @error('judul') is-invalid @enderror" id="judul"
                                name="judul" value="{{ $quotes->judul }}" required autocomplete="judul" autofocus>
                            @error('judul')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <input type="hidden" name="old_image" value="{{ $quotes->image }}">
                        <img src="{{ Storage::url($quotes->image) }}" width="150" height="150" alt="user image">
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
