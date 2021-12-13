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
                                        <tbody>
                                            <tr>
                                                <td class="py-0" width="15%">Nama</td>
                                                <td class="py-0">: Josua Suherno</td>
                                            </tr>
                                            <tr>
                                                <td class="py-0" width="15%">Status </td>
                                                <td class="py-0">: Melanjutkan</td>
                                            </tr>
                                            <tr>
                                                <td class="py-0" width="15%">Alasan </td>
                                                <td class="py-0">: Saya merasa cocok dan yakin melanjutkan ke
                                                    jenjang pernikahan </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <br>
                                    <table class="table table-borderless table-sm">
                                        <tbody>
                                            <tr>
                                                <td class="py-0" width="15%">Nama</td>
                                                <td class="py-0">: Josua Suherno</td>
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
                                    </table>
                                </div>
                            </div>

                            <div class="row my-3 mx-1">
                                <div class="col-lg-8 col-md-8 p-3 border rounded border-secondary">
                                    <form action="">
                                        <div class="confirm-check mb-4">
                                            <label for="confirmation" class="d-block">Memutuskan</label>
                                            <select name="confirmation" id="confirmation" class="p-1">
                                                <option value="melanjutkan">Melanjutkan</option>
                                                <option value="membatalkan">Membatalkan</option>
                                            </select>
                                        </div>
                                        <div class="reasoning-check my-3">
                                            <label for="reason-confirmation">Alasan Melanjutkan / Membatalkan Ta'aruf
                                            </label>
                                            <textarea class="p-2 border rounded border-secondary" name="reason-confirmation"
                                                id="reason-confirmation"
                                                placeholder="Saya ingin melanjutkan / membatalkan taaruf karena"></textarea>
                                        </div>
                                        <div class="btn-confirm">
                                            <button type="submit" class="btn btn-success d-block">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
