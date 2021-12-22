@php
use App\Models\User\UserProfile;
use App\Models\User\Cv;
use App\Models\User;

@endphp
@extends('layouts.app')
@section('title', "Ta'aruf Page")
@section('content')
    <!-- main -->
    <main>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="content">
                        <div class="row">
                            @forelse ($users as $user)
                                @php
                                    $profile = UserProfile::where('user_id', $user->id)->first();
                                    $cv = Cv::where('user_id', $user->id)->first();
                                @endphp
                                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-10">
                                    <div class="card" style="width: 18rem;">
                                        <img src="{{ Storage::url($profile->image) }}" data-caman="stackBlur(8)"
                                            class="card-img-top" id="render-img" alt="{{ $user->name }}">
                                        <div class="card-body mt-2">
                                            <h5 class="card-title">{{ $user->name }}</h5>
                                            <p class="text-muted">{{ $profile->kota }}, {{ $profile->umur }} Tahun
                                            </p>
                                            <p class="card-text"><strong>Tagline : </strong> {{ $profile->tagline }}
                                            </p>
                                            @if (Auth::user()->status == 'PENDING')
                                                <a href="{{ route('user-cv') }}"
                                                    class="btn btn-sm btn-success float-right">Lihat CV</a>
                                            @else
                                                <a href="{{ route('detail', $cv->slug) }}"
                                                    class="btn btn-sm btn-success float-right">Lihat
                                                    CV</a>
                                            @endif

                                        </div>
                                    </div>
                                </div>
                            @empty
                                <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6 col-10">
                                </div>
                            @endforelse

                        </div>
                        <div class="row justify-content-center text-center">
                            {{ $users->links() }}

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
