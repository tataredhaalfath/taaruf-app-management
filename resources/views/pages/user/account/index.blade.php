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
                                    <div class="col-xl-6 col-lg-8 col-md-8 col-sm-12 col-12">
                                        <div class="card mx-auto my-3" style="width: 100%;">
                                            @if ($profile)
                                                <img src="{{ Storage::url($profile->image) }}" class="card-img-top"
                                                    alt="...">
                                                <div class="card-body">
                                                    <div class="text-center">
                                                        <h5 class="card-title">User Profile</h5>
                                                    </div>
                                                    <table class="my-3">
                                                        <tr>
                                                            <th>
                                                                <p class="card-text">No Telpon </p>
                                                            </th>
                                                            <td>
                                                                <p class="card-text"> : {{ $profile->telpon }}
                                                                </p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>
                                                                <p class="card-text">Gender </p>
                                                            </th>
                                                            <td>
                                                                <p class="card-text"> : @if ($profile->gender == 'L')
                                                                        Laki Laki
                                                                    @elseif ($profile->gender == 'P')
                                                                        Perempuan
                                                                    @endif
                                                                </p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>
                                                                <p class="card-text">Kota </p>
                                                            </th>
                                                            <td>
                                                                <p class="card-text"> : {{ $profile->kota }} </p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>
                                                                <p class="card-text">Kecamatan </p>
                                                            </th>
                                                            <td>
                                                                <p class="card-text"> :
                                                                    <small>{{ $profile->kecamatan }}</small>
                                                                </p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>
                                                                <p class="card-text">Kelurahan </p>
                                                            </th>
                                                            <td>
                                                                <p class="card-text"> :
                                                                    <small>{{ $profile->kelurahan }}</small>
                                                                </p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>
                                                                <p class="card-text">Umur </p>
                                                            </th>
                                                            <td>
                                                                <p class="card-text"> :
                                                                    {{ $profile->umur }}
                                                                </p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>
                                                                <p class="card-text">Pendidikan </p>
                                                            </th>
                                                            <td>
                                                                <p class="card-text"> :
                                                                    {{ $profile->pendidikan_ahir }} </p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>
                                                                <p class="card-text">Tagline </p>
                                                            </th>
                                                            <td>
                                                                <p class="card-text"> :
                                                                    <small>{{ $profile->tagline }}</small>
                                                                </p>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                    <div class="text-center">
                                                        <a href="{{ route('user-account-edit-profile') }}"
                                                            class="btn btn-primary"><i class="fas fa-user-cog">
                                                                Edit</i></a>
                                                    </div>
                                                </div>
                                            @else
                                                <div class="text-center mt-5">
                                                    <i class="fas fa-user fa-5x" class="mx-auto"></i>
                                                </div>
                                                <div class="card-body text-center">
                                                    <h5 class="card-title">User Profile</h5>
                                                    <a href="{{ route('user-account-profile') }}"
                                                        class="btn btn-primary"><i class="fas fa-user-cog">
                                                            Setting</i></a>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-8 col-md-8 col-12">
                                        <div class="card mx-auto my-3" style="width: 100%;">
                                            <div class="card-body" style="           @if (Auth::user()->status == 'PENDING')
                                                background-color:orange;
                                                color:white !important;
                                            @elseif (Auth::user()->status == 'ACTIVE')
                                                background-color:green;
                                                color:white !important;
                                            @elseif (Auth::user()->status == 'INACTIVE')
                                                background-color:red;
                                                color:white !important;
                                                @endif">
                                                <h5 class="card-title text-center">My Account</h5>
                                                <table class="my-3 table-responsive">
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
