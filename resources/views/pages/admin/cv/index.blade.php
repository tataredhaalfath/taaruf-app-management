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
                                        <a href="" class="btn btn-info"><i class="fa fa-eye"> Detail</i></a>
                                        <form action="" method="post" class="d-inline">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-success" onclick="return confirm('Hapus Data?')"><i
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
