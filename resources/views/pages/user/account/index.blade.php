@extends('layouts.app')
@section('title', 'App Management')

@section('content')
    <!-- main -->
    <main>
        <section class="section__detail__header">
        </section>

        <section class="section__detail__content user__page__content dashboard">
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
                        <div class="user__dashboard">
                            <!-- Begin Page Content -->
                            <div class="container-fluid">
                                <!-- Page Heading -->
                                <div class="d-sm-flex align-items-center justify-content-between my-4">
                                    <h1 class="h3 mb-0 text-gray-800">My Account</h1>
                                    <p class="text-muted">Selamat Datang <span
                                            class="text-uppercase">{{ Auth::user()->name }}</span></p>
                                </div>
                                <!-- Content Row -->
                                <div class="row">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
    </main>
@endsection
