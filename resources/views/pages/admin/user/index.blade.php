@extends('layouts.admin')
@section('title', 'Data User')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Data User</h1>
        </div>

        <!-- Content Row -->
        <div class="row">
            <div class="card-body">
                <h5>LIST User</h5>
                <div class="table-responsive">
                    <table class="table table-bordered text-center" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Roles</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ( $users as $user)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->roles }}</td>
                                    <td>{{ $user->status }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="text-center">Data Kosong</td>
                                </tr>
                            @endforelse

                        </tbody>
                    </table>
                </div>
                {{ $users->links() }}

                <hr>
                <h5>ACTIVE</h5>
                <div class="table-responsive">
                    <table class="table table-bordered text-center" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Roles</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ( $user_active as $active)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $active->name }}</td>
                                    <td>{{ $active->email }}</td>
                                    <td>{{ $active->roles }}</td>
                                    <td>{{ $active->status }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="text-center">Data Kosong</td>
                                </tr>
                            @endforelse

                        </tbody>
                    </table>
                </div>
                {{ $user_active->links() }}

                <hr>
                <h5>PENDING</h5>
                <div class="table-responsive">
                    <table class="table table-bordered text-center" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Roles</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ( $user_pending as $pending)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $pending->name }}</td>
                                    <td>{{ $pending->email }}</td>
                                    <td>{{ $pending->roles }}</td>
                                    <td>{{ $pending->status }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="text-center">Data Kosong</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                {{ $user_pending->links() }}
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
@endsection
