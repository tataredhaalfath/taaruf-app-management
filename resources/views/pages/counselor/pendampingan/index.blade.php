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
        <div class="row">
            <div class="card-body">
                <h5>Pendampingan List</h5>
                @if (session('message'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <div class="table-responsive">
                    <table class="table table-bordered text-center" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Taaruf ID</th>
                                <th>User1</th>
                                <th>User2</th>
                                <th>Pendamping</th>
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
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="text-center">Data Kosong</td>
                                </tr>
                            @endforelse

                        </tbody>
                    </table>
                </div>
                {{ $pendampingan->links() }}
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
@endsection
