@php
use App\Models\User\TaarufTransaction;
use App\Models\User;
@endphp
@extends('layouts.admin')
@section('title', 'Taaruf')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Taaruf in Proccess</h1>
        </div>

        <!-- Content Row -->
        <div class="row">
            <div class="card-body">
                <h5>LIST SUCCESS</h5>
                <div class="table-responsive">
                    <table class="table table-bordered text-center" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Taaruf ID</th>
                                <th>Nama</th>
                                <th>Status</th>
                                <th>Alasan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ( $taaruf_success as $success)
                                <tr>
                                    @php
                                        $user = User::findOrFail($success->user_id);
                                    @endphp
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $success->taaruf_id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td class="text-success">{{ $success->status }}</td>
                                    <td>{{ $success->alasan }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="text-center">Data Kosong</td>
                                </tr>
                            @endforelse

                        </tbody>
                    </table>
                </div>
                {{ $taaruf_success->links() }}

                <hr>
                <h5>LIST FAILED</h5>
                <div class="table-responsive">
                    <table class="table table-bordered text-center" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Taaruf ID</th>
                                <th>Nama</th>
                                <th>Status</th>
                                <th>Alasan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ( $taaruf_fail as $fail)
                                <tr>
                                    @php
                                        $user = User::findOrFail($fail->user_id);
                                    @endphp
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $fail->taaruf_id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td class="text-danger">{{ $fail->status }}</td>
                                    <td>{{ $fail->alasan }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="text-center">Data Kosong</td>
                                </tr>
                            @endforelse

                        </tbody>
                    </table>
                </div>
                {{ $taaruf_fail->links() }}
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
@endsection
