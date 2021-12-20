@extends('layouts.admin')
@section('title', 'Content')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Content</h1>
        </div>

        <!-- Content Row -->
        <div class="row">
            <div class="card-body">
                <h3>Kajian</h3>
                @if (session('kajian'))
                    <div class="alert alert-success">
                        {{ session('kajian') }}
                    </div>
                @endif
                <a href="{{ route('admin-content-createkajian') }}" class="btn btn-sm btn-primary shadow-sm my-3">
                    <i class="fas fa-plus fa-sm text-white-50"></i>Tambah Kajian <i class="ri-travesti-line"></i></a>
                <div class="table-responsive">
                    <table class="table table-bordered" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>Url</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($kajian as $kj )

                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $kj->judul }}</td>
                                    <td>{{ $kj->url }}</td>
                                    <td>
                                        <a href="{{ route('admin-content-editkajian', $kj->id) }}"
                                            class="btn btn-sm btn-info"><i class="fa fa-pencil"> edit</i></a>
                                        <form action="{{ route('admin-content-destroykajian') }}" method="post"
                                            class="d-inline">
                                            @csrf
                                            @method('delete')
                                            <input type="hidden" name="id" id="id" value="{{ $kj->id }}">
                                            <button class="btn btn-sm btn-danger" onclick="return confirm('Hapus ?')"><i
                                                    class="fa fa-trash"></i> Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="text-center">Data Kosong</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                {{ $kajian->links() }}
            </div>
        </div>
        <!-- Content Row -->
        <div class="row">
            <div class="card-body">
                <h3>Quotes</h3>
                <a href="{{ route('admin-content-createquotes') }}" class="btn btn-sm btn-primary shadow-sm my-3">
                    <i class="fas fa-plus fa-sm text-white-50"></i>Tambah Quotes <i class="ri-travesti-line"></i></a>
                <div class="table-responsive">
                    <table class="table table-bordered" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($quotes as $qt )

                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $qt->judul }}</td>
                                    <td><img src="{{ Storege::url($qt->image) }}" alt="quotes image" style="width: 150px"
                                            class="img-thumbnail"></td>
                                    <td>
                                        <a href="" class="btn btn-info"><i class="fa fa-pencil"> Edit</i></a>
                                        <form action="" method="post" class="d-inline">
                                            @csrf
                                            @method('delete')
                                            <input type="hidden" name="quotes_id" id="quotes_id"
                                                value="{{ $qt->id }}">
                                            <button class="btn btn-danger" onclick="return confirm('Hapus ?')"><i
                                                    class="fa fa-trash"></i> Hapus</button>
                                        </form>
                                        <form action="{{ route('admin-cv-confirm') }}" method="post"
                                            class="d-inline">
                                            @csrf
                                            <input type="hidden" name="user_id" id="user_id" value="{{ $cv->id }}">
                                            <input type="hidden" name="pengajuan_id" id="pengajuan_id"
                                                value="{{ $cv->id }}">
                                            <button class="btn btn-success" onclick="return confirm('Setujui CV?')"><i
                                                    class="fa fa-check"></i> Confirm</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="text-center">Data Kosong</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                {{ $quotes->links() }}
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
@endsection
