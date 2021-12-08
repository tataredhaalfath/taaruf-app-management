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
                        <div class="profile__container content bg-white px-sm-3 px-2 py-sm-3 py-2 mb-5">
                            <form action="{{ route('user-storecv') }}" method="POST"
                                class="px-sm-5 px-2 py-sm-4 py-2 mb-5">
                                @csrf
                                <h5>BUAT CV BARU</h5>
                                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nama</label>
                                    <input type="slug" class="form-control @error('slug') is-invalid @enderror" id="slug"
                                        name="slug" aria-describedby="emailHelp" required>
                                    @error('slug')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-primary" style="float: right;">Submit</button>
                                <p style="clear: both"></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
