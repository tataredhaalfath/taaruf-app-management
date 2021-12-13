@extends('layouts.app')
@section('title', "Ta'aruf App Management")

@section('content')
    <!-- main -->
    <main>
        <section class="section__detail__header">
        </section>
        <section class="section__detail__content user__page__content cv">
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
                            <h3>Approved Ta'aruf</h3>
                            <div class="row my-3">
                                <div class="col-lg-12 col-md-10">
                                    <table class="table table-bordered">
                                        <tbody>
                                            <tr class="text-center">
                                                <th>No</th>
                                                <th>User 1</th>
                                                <th>User 2</th>
                                                <th>Tanggal</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                            @if ($approve1)
                                                <tr class="text-center">
                                                    <td>1</td>
                                                    <td>{{ $user1->name }}</td>
                                                    <td>{{ $user2->name }}</td>
                                                    <td>{{ date('d-m-Y', strtotime($approve1->created_at)) }}</td>
                                                    <td>{{ $approve1->status }}</td>
                                                    <td><a href="approved-confirm.html" class="btn-cta">Lanjut</a>
                                                    </td>
                                                </tr>
                                            @elseif ($approve2)
                                                <tr class="text-center">
                                                    <td>1</td>
                                                    <td>{{ $user1->name }}</td>
                                                    <td>{{ $user2->name }}</td>
                                                    <td>{{ date('d-m-Y', strtotime($approve2->created_at)) }}</td>
                                                    <td>{{ $approve2->status }}</td>
                                                    <td><a href="approved-confirm.html" class="btn-cta">Lanjut</a>
                                                    </td>
                                                </tr>
                                            @else
                                                <tr class="text-center">
                                                    <td colspan="6">BELUM ADA PERMINTAAN TAARUF DITERIMA</td>
                                                </tr>
                                            @endif

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
