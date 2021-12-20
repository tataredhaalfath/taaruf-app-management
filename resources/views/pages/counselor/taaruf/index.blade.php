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
            <h1 class="h3 mb-0 text-gray-800">Taaruf List</h1>
        </div>

        <!-- Content Row -->
        <div class="row">
            <div class="card-body">
                <h5>Taaruf List</h5>
                <div class="table-responsive">
                    <table class="table table-bordered text-center" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>User1</th>
                                <th>User2</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ( $taaruf_list as $taaruf)
                                <tr>
                                    @php
                                        $user1 = User::findOrFail($taaruf->user_id_1);
                                        $user2 = User::findOrFail($taaruf->user_id_2);
                                    @endphp
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $user1->name }}</td>
                                    <td>{{ $user2->name }}</td>
                                    <td class="text-success">{{ $taaruf->status }}</td>
                                    <td><a href="{{ route('counselor-taaruf-detail', $taaruf->id) }}"
                                            class="badge badge-success">Dampingi</a></td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="text-center">Data Kosong</td>
                                </tr>
                            @endforelse

                        </tbody>
                    </table>
                </div>
                {{ $taaruf_list->links() }}
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
@endsection
