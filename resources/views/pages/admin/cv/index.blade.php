@php
use App\Models\User;
use App\Models\User\Cv;
@endphp
@extends('layouts.admin')
@section('title', 'Cv Confirm')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Cv Confirm</h1>
        </div>

        <!-- Content Row -->
        <div class="row">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Cv</th>
                                <th>Waktu Pengajuan</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($pengajuan_cv as $cv )
                                @php
                                    $user = User::findOrFail($cv->user_id);
                                    $data_cv = Cv::where('user_id', $cv->user_id)->first();
                                @endphp
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $data_cv->slug }}</td>
                                    <td>{{ $cv->created_at }}</td>
                                    <td>
                                        <a href="{{ route('admin-cv-detail', $cv->user_id) }}" class="btn btn-info"><i
                                                class="fa fa-eye"> Detail</i></a>
                                        <form action="{{ route('admin-cv-reject') }}" method="post" class="d-inline">
                                            @csrf
                                            @method('delete')
                                            <input type="hidden" name="pengajuan_id" id="pengajuan_id"
                                                value="{{ $cv->id }}">
                                            <button class="btn btn-danger" onclick="return confirm('Tolak CV?')"><i
                                                    class="fa fa-trash"></i> Reject</button>
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
                                    <td colspan="7" class="text-center">Data Kosong</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                {{ $pengajuan_cv->links() }}
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
@endsection
