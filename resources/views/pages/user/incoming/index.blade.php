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
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr class="text-center">
                                                    <th>No</th>
                                                    <th>Pengirim</th>
                                                    <th>Tanggal</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if ($incoming !== null)
                                                    @forelse  ($incoming as $in)
                                                        @php
                                                            $user = User::findOrFail($in->user_id);
                                                        @endphp
                                                        <tr class="text-center">
                                                            <td>{{ $loop->iteration }}</td>
                                                            <td>{{ $user->name }}</td>
                                                            <td>{{ date('d-m-Y', strtotime($in->created_at)) }}</td>
                                                            <td>MENGAJUKAN</td>
                                                            <td><a href="{{ route('user-incoming-detail', $in->id) }}"
                                                                    class="btn btn-primary btn-sm">Detail</a>
                                                            </td>
                                                        </tr>
                                                    @empty
                                                        <tr class="text-center">
                                                            <td colspan="5">BELUM ADA PERMINTAAN TAARUF MASUK</td>
                                                        </tr>
                                                    @endforelse
                                                @else
                                                    <tr class="text-center">
                                                        <td colspan="5">BELUM ADA PERMINTAAN TAARUF MASUK</td>
                                                    </tr>
                                                @endif
                                            </tbody>
                                        </table>
                                    </div>
                                    @if ($incoming !== null)
                                        {{ $incoming->links() }}
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

@endsection
