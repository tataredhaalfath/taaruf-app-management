@php
use App\Models\User;
use App\Models\User\UserQuestion;
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
                            <h3>Ta'aruf Sent</h3>
                            <div class="row my-3">
                                <div class="col-lg-12 col-md-10">
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr class="text-center">
                                                    <th>No</th>
                                                    <th>Penerima</th>
                                                    <th>Tanggal</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @forelse ($sent as $send )
                                                    @php
                                                        $question = UserQuestion::findOrFail($send->uq_id);
                                                        $penerima = User::findOrFail($question->user_id);
                                                    @endphp
                                                    <tr class="text-center">
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>{{ $penerima->name }}</td>
                                                        <td>{{ $send->created_at }}</td>
                                                        <td>TERKIRIM</td>
                                                    </tr>
                                                @empty
                                                    <tr class="text-center">
                                                        <td colspan="6">BELUM ADA PERMINTAAN TAARUF TERKIRIM</td>
                                                    </tr>
                                                @endforelse
                                            </tbody>
                                        </table>
                                    </div>
                                    {{ $sent->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

@endsection
