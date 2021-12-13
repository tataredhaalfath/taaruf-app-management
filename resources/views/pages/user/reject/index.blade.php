@php
use App\Models\User;
@endphp
@extends('layouts.app')
@section('title', "Ta'aruf App Management")

@section('content')
    <!-- main -->
    <main>
        <section class="section__detail__header">
        </section>
        <section class="section__detail__content user__page__content reject">
            <div class="container">
                <div class="row">
                    <div class="col-0">
                        @include('includes.user.breadcrumb')
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-8 col-8">
                        @include('includes.user.menu')
                    </div>
                    <div class="col-xl-9 col-lg-9 col-md-12">
                        <div class="profile__container content bg-white px-sm-5 px-2 py-sm-4 py-2 mb-5">
                            <h3>Rejected Ta'aruf</h3>
                            <div class="row my-3">
                                <div class="col-lg-12 col-md-10">
                                    <h5>List Menolak</h5>
                                    <table class="table table-bordered">
                                        <tbody>
                                            <tr class="text-center">
                                                <th>No</th>
                                                <th>User 1</th>
                                                <th>User 2</th>
                                                <th>Tanggal</th>
                                                <th>Status</th>
                                            </tr>
                                            @forelse ($menolak as $ml)
                                                @php
                                                    $user1 = User::findOrFail($ml->user_id_1);
                                                    $user2 = User::findOrFail($ml->user_id_2);
                                                @endphp
                                                <tr class="text-center">
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $user1->name }}</td>
                                                    <td>{{ $user2->name }}</td>
                                                    <td>{{ $ml->created_at }}</td>
                                                    <td>{{ $ml->status }}</td>

                                                </tr>
                                            @empty
                                                <tr class="text-center">
                                                    <td colspan="6">BELUM ADA DATA</td>
                                                </tr>
                                            @endforelse

                                        </tbody>
                                    </table>
                                    <hr>
                                    <h5>List Ditolak</h5>
                                    <table class="table table-bordered">
                                        <tbody>
                                            <tr class="text-center">
                                                <th>No</th>
                                                <th>User 1</th>
                                                <th>User 2</th>
                                                <th>Tanggal</th>
                                                <th>Status</th>
                                            </tr>
                                            @forelse ($ditolak as $dl)
                                                @php
                                                    $user1 = User::findOrFail($dl->user_id_1);
                                                    $user2 = User::findOrFail($dl->user_id_2);
                                                @endphp
                                                <tr class="text-center">
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $user1->name }}</td>
                                                    <td>{{ $user2->name }}</td>
                                                    <td>{{ $dl->created_at }}</td>
                                                    <td>{{ $dl->status }}</td>

                                                </tr>
                                            @empty
                                                <tr class="text-center">
                                                    <td colspan="6">BELUM ADA DATA</td>
                                                </tr>
                                            @endforelse

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
