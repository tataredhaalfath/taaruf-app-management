@extends('layouts.app')
@section('title', "Ta'aruf App Management")

@section('content')
    <!-- main -->
    <main>
        <section class="section__detail__header">
        </section>
        <section class="section__detail__content user__page__content incoming">
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
                            <h3>Incoming Ta'aruf</h3>
                            <div class="row my-3">
                                <div class="col-lg-12 col-md-10">
                                    <table class="table table-bordered">
                                        <tbody>
                                            <tr class="text-center">
                                                <th>No</th>
                                                <th>Incoming ID</th>
                                                <th>Tanggal</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                            @forelse  ($incoming as $in)
                                                <tr class="text-center">
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $in->id }}</td>
                                                    <td>{{ date('d-m-Y', strtotime($in->created_at)) }}</td>
                                                    <td>Mengajukan</td>
                                                    <td><a href="incoming-cv-detail.html" class="btn-cta">Detail</a>
                                                    </td>
                                                </tr>
                                            @empty
                                                <tr class="text-center">
                                                    <td colspan="5">BELUM ADA PERMINTAAN TAARUF MASUK</td>
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
