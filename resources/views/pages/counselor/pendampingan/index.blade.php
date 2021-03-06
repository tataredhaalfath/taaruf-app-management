@php
use App\Models\User\TaarufTransaction;
use App\Models\User;
@endphp
@extends('layouts.counselor')
@section('title', 'Taaruf')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Pendampingan List</h1>
        </div>

        <!-- Content Row -->
        <div class="card shadow mb-4">
            <div class="card-body">
                <h5>Pendampingan List</h5>
                @if (session('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif
                <div class="table-responsive">
                    <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Taaruf ID</th>
                                <th>User1</th>
                                <th>User2</th>
                                <th>Pendamping</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ( $pendampingan as $pendamping)
                                <tr>
                                    @php
                                        $user1 = User::findOrFail($pendamping->user1);
                                        $user2 = User::findOrFail($pendamping->user2);
                                    @endphp
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $pendamping->taaruf_id }}</td>
                                    <td>{{ $user1->name }}</td>
                                    <td>{{ $user2->name }}</td>
                                    <td>{{ Auth::user()->name }}</td>
                                    <td><a href="{{ route('counselor-pendampingan-detail', $pendamping->id) }}"
                                            class="badge badge-success">Detail</a></td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="text-center">Data Kosong</td>
                                </tr>
                            @endforelse

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
@endsection
