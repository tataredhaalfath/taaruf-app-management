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
                            <h3>Curriculum Vitae</h3>
                            @if (session('message'))
                                <div class="alert alert-success">
                                    {{ session('message') }}
                                </div>
                            @endif
                            @if ($cv !== null)
                                <div class="row my-3">
                                    <div class="col-lg-12 col-md-10">
                                        <table class="table table-bordered">
                                            <tbody>
                                                <tr class="text-center">
                                                    <th>No</th>
                                                    <th>Judul CV</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                                <tr class="text-center">
                                                    <td>1</td>
                                                    <td>{{ $cv->slug }}</td>
                                                    <td>{{ Auth::user()->status }}</td>
                                                    <td>
                                                        <a href="" class="btn btn-warning btn-sm"><i class="fa fa-pen">
                                                                Edit</i></a>
                                                        |
                                                        <a href="{{ route('user-create-cv') }}"
                                                            class="btn btn-success btn-sm"><i
                                                                class="fas fa-file-signature"></i> Lengkapi</a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            @else
                                <form action="{{ route('user-storecv') }}" method="POST"
                                    class="px-sm-5 px-2 py-sm-4 py-2 mb-5">
                                    @csrf
                                    <h5>BUAT CV BARU</h5>
                                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                    <div class="form-group">
                                        <label for="slug">Judul CV</label>
                                        <input type="text" class="form-control @error('slug') is-invalid @enderror"
                                            id="slug" name="slug" value="{{ old('slug') }}">
                                        @error('slug')
                                            <div id="invalidCheck3Feedback" class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <button type="submit" class="btn btn-primary" style="float: right;">Submit</button>
                                    <p style="clear: both"></p>
                                </form>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

@endsection
