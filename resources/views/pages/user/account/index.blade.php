@extends('layouts.app')
@section('title', 'Taaruf App Management')

@section('content')
    <!-- main -->
    <main>
        <section class="section__detail__header">
        </section>

        <section class="section__detail__content user__page__content profile">
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
                                </div>
                                <!-- Content Row -->
                                <div class="row justify-content-center">
                                    <div class="col-xl-6 col-lg-8 col-md-8 col-10">
                                        <div class="card mx-auto my-3" style="width: 18rem;">
                                            @if ($profile)
                                                <img src="{{ $profile->image }}" class="card-img-top" alt="...">
                                            @else
                                                <div class="text-center mt-5">
                                                    <i class="fas fa-user fa-5x" class="mx-auto"></i>
                                                </div>
                                                <div class="card-body text-center">
                                                    <h5 class="card-title">User Profile</h5>
                                                    <p class="card-text text-muted">Silahkan lengkapi data diri anda.
                                                    </p>
                                                    <a href="{{ route('user-account-profile') }}"
                                                        class="btn btn-primary"><i class="fas fa-user-cog">
                                                            Setting</i></a>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-8 col-md-8 col-10">
                                        <div class="card mx-auto my-3" style="width: 18rem;">
                                            <div class="card-body" style="       @if (Auth::user()->status == 'PENDING')
                                                background-color:orange;
                                                color:white !important;
                                            @elseif (Auth::user()->status == 'ACTIVE')
                                                background-color:green;
                                                color:white !important;
                                                @endif">
                                                <h5 class="card-title text-center">My Account</h5>
                                                <table class="my-3">
                                                    <tr>
                                                        <th>
                                                            <p class="card-text">Name </p>
                                                        </th>
                                                        <td>
                                                            <p class="card-text"> : {{ Auth::user()->name }}
                                                            </p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>
                                                            <p class="card-text">Email </p>
                                                        </th>
                                                        <td>
                                                            <p class="card-text"> : {{ Auth::user()->email }}
                                                            </p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>
                                                            <p class="card-text">Password </p>
                                                        </th>
                                                        <td>
                                                            <p class="card-text"> : ***** </p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>
                                                            <p class="card-text">Status </p>
                                                        </th>
                                                        <td>
                                                            <p class="card-text"> : {{ Auth::user()->status }}
                                                            </p>
                                                        </td>
                                                    </tr>
                                                </table>

                                                <div class="text-center mt-3">
                                                    <a href="#" class="btn btn-info"><i class="fas fa-cogs">
                                                            Setting</i></a>
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
