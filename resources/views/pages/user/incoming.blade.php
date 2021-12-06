@extends('layouts.app')
@section('title', "Ta'aruf App Management")

@section('content')
    <!-- main -->
    <main>
        <section class="section__detail__header">
        </section>
        <section class="section__detail__content user__page__content incoming">
            <div class="container">
                @include('includes.user.breadcrumb')
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
                                                <th>Nama</th>
                                                <th>Tanggal</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                            <tr class="text-center">
                                                <td>1</td>
                                                <td>Riska Soekanti</td>
                                                <td>12/09/201</td>
                                                <td>Mengajukan</td>
                                                <td><a href="incoming-cv-detail.html" class="btn-cta">Detail</a></td>
                                            </tr>
                                            <tr class="text-center">
                                                <td>2</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr class="text-center">
                                                <td>3</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr class="text-center">
                                                <td>4</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
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
