@extends('layouts.app')
@section('title', 'App Management')

@section('content')
    <!-- main -->
    <main>
        <section class="section__detail__header">
        </section>

        <section class="section__detail__content user__page__content">
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
                                    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                                    <p>Selamat Datang {{ Auth::user()->name }}</p>
                                </div>
                                <!-- Content Row -->
                                <div class="row">
                                    <div class="col-xl-4 col-md-6 col-sm-6 mb-4">
                                        <div class="card border-left-primary shadow h-100 py-2" style="                                                     
                                                                @if ($user->status ==
                                            'PENDING')
                                            background: orange;
                                        @elseif ($user->status == 'ACTIVE')
                                            background: green;
                                            @endif color:white" >
                                            <div class="card-body">
                                                <div class="row no-gutters align-items-center">
                                                    <div class="col mr-2">
                                                        <div class="text-xs font-weight-bold text-uppercase mb-1">
                                                            Status User</div>
                                                        <div class="h6 mb-0 font-weight-bold text-muted">
                                                            {{ $user->status }}</div>
                                                    </div>
                                                    <div class="col-auto">
                                                        <i class="fas fa-users fa-2x text-gray-300"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-4 col-md-6 col-sm-6 mb-4">
                                        <div class="card border-left-success shadow h-100 py-2" style="
                                                                @if ($taaruf_sent < 1)
                                            background: orange;
                                        @else
                                            background: blue;
                                            @endif color:white">
                                            <div class="card-body">
                                                <div class="row no-gutters align-items-center">
                                                    <div class="col mr-2">
                                                        <div class="text-xs font-weight-bold text-uppercase mb-1">
                                                            Sent</div>
                                                        <div class="h5 mb-0 font-weight-bold text-primary">
                                                            {{ $taaruf_sent }}
                                                        </div>
                                                    </div>
                                                    <div class="col-auto">
                                                        <i class="fas fa-paper-plane fa-2x text-gray-300"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-4 col-md-6 col-sm-6 mb-4">
                                        <div class="card border-left-info shadow h-100 py-2" style="
                                                                @if ($incoming < 1)
                                            background: orange;
                                        @else
                                            background: blue;
                                            @endif color:white">
                                            <div class="card-body">
                                                <div class="row no-gutters align-items-center">
                                                    <div class="col mr-2">
                                                        <div class="text-xs font-weight-bold text-uppercase mb-1">
                                                            Incoming
                                                        </div>
                                                        <div class="row no-gutters align-items-center">
                                                            <div class="col-auto">
                                                                <div class="h5 mb-0 mr-3 font-weight-bold text-info">
                                                                    {{ $incoming }}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-auto">
                                                        <i class="fas fa-envelope-open-text fa-2x text-gray-300"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-4 col-md-6 col-sm-6 mb-4">
                                        <div class="card border-left-warning shadow h-100 py-2">
                                            <div class="card-body">
                                                <div class="row no-gutters align-items-center">
                                                    <div class="col mr-2">
                                                        <div
                                                            class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                            Approve
                                                        </div>
                                                        <div class="h5 mb-0 font-weight-bold text-success">18</div>
                                                    </div>
                                                    <div class="col-auto">
                                                        <i class="fas fa-clipboard-check fa-2x text-gray-300"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-4 col-md-6 col-sm-6 mb-4">
                                        <div class="card border-left-warning shadow h-100 py-2">
                                            <div class="card-body">
                                                <div class="row no-gutters align-items-center">
                                                    <div class="col mr-2">
                                                        <div
                                                            class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                                            Rejected
                                                        </div>
                                                        <div class="h5 mb-0 font-weight-bold text-danger">18</div>
                                                    </div>
                                                    <div class="col-auto">
                                                        <i class="fas fa-file-excel fa-2x text-gray-300"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
    </main>
@endsection
