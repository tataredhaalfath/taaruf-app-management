@extends('layouts.counselor')
@section('title', 'Configure')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Pendampingan</h1>
        </div>

        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <!-- Content Row -->
        <div class="row">
            <div class="col-12" style="background-color: white">
                <div class="row justify-content-center my-5">
                    <div class="col-xl-5 col-lg-5 col-md-8 col-10">
                        <div class="card mx-auto my-3" style="width: 18rem;">
                            <img src="{{ Storage::url($profile1->image) }}" class="card-img-top" alt="user profile"
                                style="filter: blur(8px)">
                            <div class="card-body">
                                <div class="text-center">
                                    <h5 class="card-title">{{ $user1->name }}</h5>
                                </div>
                                <table class="my-3">
                                    <tr>
                                        <th>
                                            <p class="card-text">No Telpon </p>
                                        </th>
                                        <td>
                                            <p class="card-text"> : {{ $profile1->telpon }}
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <p class="card-text">Gender </p>
                                        </th>
                                        <td>
                                            <p class="card-text"> : @if ($profile1->gender == 'L')
                                                    Laki Laki
                                                @elseif ($profile1->gender == 'P')
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
                                            <p class="card-text"> : {{ $profile1->kota }} </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <p class="card-text">Kecamatan </p>
                                        </th>
                                        <td>
                                            <p class="card-text"> :
                                                <small>{{ $profile1->kecamatan }}</small>
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <p class="card-text">Kelurahan </p>
                                        </th>
                                        <td>
                                            <p class="card-text"> :
                                                <small>{{ $profile1->kelurahan }}</small>
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <p class="card-text">Umur </p>
                                        </th>
                                        <td>
                                            <p class="card-text"> :
                                                {{ $profile1->umur }}
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <p class="card-text">Pendidikan </p>
                                        </th>
                                        <td>
                                            <p class="card-text"> :
                                                {{ $profile1->pendidikan_ahir }} </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <p class="card-text">Tagline </p>
                                        </th>
                                        <td>
                                            <p class="card-text"> :
                                                <small>{{ $profile1->tagline }}</small>
                                            </p>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-5 col-md-8 col-10">
                        <div class="card mx-auto my-3" style="width: 18rem;">
                            <img src="{{ Storage::url($profile2->image) }}" class="card-img-top" alt="user profile"
                                style="filter: blur(8px)">
                            <div class="card-body">
                                <div class="text-center">
                                    <h5 class="card-title">{{ $user2->name }}</h5>
                                </div>
                                <table class="my-3">
                                    <tr>
                                        <th>
                                            <p class="card-text">No Telpon </p>
                                        </th>
                                        <td>
                                            <p class="card-text"> : {{ $profile2->telpon }}
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <p class="card-text">Gender </p>
                                        </th>
                                        <td>
                                            <p class="card-text"> : @if ($profile2->gender == 'L')
                                                    Laki Laki
                                                @elseif ($profile2->gender == 'P')
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
                                            <p class="card-text"> : {{ $profile2->kota }} </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <p class="card-text">Kecamatan </p>
                                        </th>
                                        <td>
                                            <p class="card-text"> :
                                                <small>{{ $profile2->kecamatan }}</small>
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <p class="card-text">Kelurahan </p>
                                        </th>
                                        <td>
                                            <p class="card-text"> :
                                                <small>{{ $profile2->kelurahan }}</small>
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <p class="card-text">Umur </p>
                                        </th>
                                        <td>
                                            <p class="card-text"> :
                                                {{ $profile2->umur }}
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <p class="card-text">Pendidikan </p>
                                        </th>
                                        <td>
                                            <p class="card-text"> :
                                                {{ $profile2->pendidikan_ahir }} </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <p class="card-text">Tagline </p>
                                        </th>
                                        <td>
                                            <p class="card-text"> :
                                                <small>{{ $profile2->tagline }}</small>
                                            </p>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 my-3 justify-content-center text-center">
                        <form action="">
                            <input type="hidden" name="taaruf_id" value="{{ $id }}">
                            <input type="hidden" name="user1" value="{{ $user1->id }}">
                            <input type="hidden" name="user2" value="{{ $user2->id }}">
                            <button type="submit" class="btn btn-primary">Mulai Pendampingan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
@endsection
@push('caman')
    <!-- camanjs -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/camanjs/3.3.0/caman.full.min.js" />
    </script>
@endpush
