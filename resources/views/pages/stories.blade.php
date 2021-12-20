@php
use App\Models\User;
@endphp
@extends('layouts.app')
@section('title', 'Stories Page')
@section('content')
    <!-- main -->
    <main>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="stories__content">
                        <div class="row">
                            <div class="col-12 mb-5">
                                <h3>{{ $total }} Happy Members</h3>
                            </div>
                            @foreach ($stories as $storie)
                                @php
                                    $user = User::findOrFail($storie->user_id);
                                @endphp
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-10 stories__item">
                                    <div class="card" style="width: 18rem;">
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $user->name }}</h5>
                                            <p class="text-muted stories__review">{{ $storie->stories }}</p>
                                            <p class="card-text">
                                                @php
                                                    for ($i = 0; $i < $storie->rating; $i++) {
                                                        echo '⭐️';
                                                    }
                                                @endphp
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="row justify-content-center text-center">
                            {{ $stories->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
