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
        <section class="section__detail__content user__page__content approve">
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
                                    <table class="table table-borderless table-sm">
                                        @if ($transaction1)
                                            @php
                                                $user1 = User::where('id', $transaction1->user_id)->first();
                                            @endphp

                                            <tbody>
                                                <tr>
                                                    <td class="py-0" width="15%">Nama</td>
                                                    <td class="py-0">: {{ $user1->name }}</td>
                                                </tr>
                                                <tr>
                                                    <td class="py-0" width="15%">Status </td>
                                                    <td class="py-0">: {{ $transaction1->status }}</td>
                                                </tr>
                                                <tr>
                                                    <td class="py-0" width="15%">Alasan </td>
                                                    <td class="py-0">: {{ $transaction1->alasan }}</td>
                                                </tr>
                                            </tbody>
                                        @else
                                            <tbody>
                                                <tr>
                                                    <td class="py-0" width="15%">Nama</td>
                                                    <td class="py-0">:</td>
                                                </tr>
                                                <tr>
                                                    <td class="py-0" width="15%">Status </td>
                                                    <td class="py-0">:</td>
                                                </tr>
                                                <tr>
                                                    <td class="py-0" width="15%">Alasan </td>
                                                    <td class="py-0">:</td>
                                                </tr>
                                            </tbody>
                                        @endif
                                    </table>
                                    <br>
                                    <table class="table table-borderless table-sm">
                                        @if ($transaction2)
                                            @php
                                                $user2 = User::where('id', $transaction2->user_id)->first();
                                            @endphp
                                            <tbody>
                                                <tr>
                                                    <td class="py-0" width="15%">Nama</td>
                                                    <td class="py-0">: {{ $user2->name }}</td>
                                                </tr>
                                                <tr>
                                                    <td class="py-0" width="15%">Status </td>
                                                    <td class="py-0">: {{ $transaction2->status }}</td>
                                                </tr>
                                                <tr>
                                                    <td class="py-0" width="15%">Alasan </td>
                                                    <td class="py-0">: {{ $transaction2->alasan }}</td>
                                                </tr>
                                            </tbody>
                                        @else
                                            <tbody>
                                                <tr>
                                                    <td class="py-0" width="15%">Nama</td>
                                                    <td class="py-0">:</td>
                                                </tr>
                                                <tr>
                                                    <td class="py-0" width="15%">Status </td>
                                                    <td class="py-0">: </td>
                                                </tr>
                                                <tr>
                                                    <td class="py-0" width="15%">Alasan </td>
                                                    <td class="py-0">: </td>
                                                </tr>
                                            </tbody>
                                        @endif
                                    </table>
                                </div>
                            </div>

                            <div class="row my-3 mx-1">
                                <div class="col-lg-8 col-md-8 p-3 border rounded border-secondary">
                                    @if ($myTransaction)
                                        <div class="text-center">
                                            <h5>STATUS TELAH DITETAPKAN</h5>
                                        </div>
                                        <div class="text-center">
                                            @if ($transaction1 && $transaction2)
                                                @if ($transaction1->status == $transaction2->status)
                                                    <a href="{{ route('stories-create') }}"
                                                        class="btn btn-primary">Bagikan Kisah Taaruf Anda</a>
                                                @else
                                                    <a href="" class="btn btn-warning">Mulai Taaruf Lagi</a>
                                                @endif
                                            @endif
                                        </div>
                                    @else
                                        <form action="{{ route('user-approve-transaction') }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="taaruf_id" value="{{ $taaruf->id }}">
                                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                            <div class="confirm-check mb-4">
                                                <label for="status" class="d-block">Memutuskan</label>
                                                <select name="status" id="status" class="p-1" required>
                                                    <option value="melanjutkan">Melanjutkan</option>
                                                    <option value="membatalkan">Membatalkan</option>
                                                </select>
                                            </div>
                                            <div class="reasoning-check my-3">
                                                <label for="reason-confirmation">Alasan Melanjutkan / Membatalkan
                                                    Ta'aruf
                                                </label>
                                                <textarea class="p-2 border rounded border-secondary" name="alasan"
                                                    id="reason-confirmation"
                                                    placeholder="Saya ingin melanjutkan / membatalkan taaruf karena"
                                                    required></textarea>
                                            </div>
                                            <div class="btn-confirm">
                                                <button type="submit" class="btn btn-success d-block">Submit</button>
                                            </div>
                                        </form>
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
