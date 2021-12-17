@extends('layouts.admin')
@section('title', 'Data User')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Data Counselor</h1>
            <a href="{{ route('admin-create-counselor') }}" class="btn btn-sm btn-primary shadow-sm">
                <i class="fas fa-plus fa-sm text-white-50"></i>Tambah Counselor <i class="ri-travesti-line"></i></a>
        </div>

        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <!-- Content Row -->
        <div class="row">
            <div class="card-body">
                <h5>Counselor</h5>
                <div class="table-responsive">
                    <table class="table table-bordered text-center" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Roles</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($counselors)
                                @forelse ( $counselors as $counselor)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $counselor->name }}</td>
                                        <td>{{ $counselor->email }}</td>
                                        <td>{{ $counselor->roles }}</td>
                                        <td>
                                            <form action="{{ route('admin-drop-counselor') }}" method="POST">
                                                @csrf
                                                @method('delete')
                                                <input type="hidden" name="id" id="id" value="{{ $counselor->id }}">
                                                <button class="btn badge badge-sm badge-danger"><i
                                                        class="fas fa-trash"></i>
                                                    Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="text-center">Data Kosong</td>
                                    </tr>
                                @endforelse
                            @else
                                <tr>
                                    <td colspan="6" class="text-center">Data Kosong</td>
                                </tr>
                            @endif


                        </tbody>
                    </table>
                </div>
                {{ $counselors->links() }}
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
@endsection
