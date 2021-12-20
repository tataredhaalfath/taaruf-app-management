@php
use App\Models\User;
@endphp
@extends('layouts.app')
@section('title', "Ta'aruf App Management")

@section('content')
    <!-- main -->
    <main>
        <section class="section__detail__header">
        </section>
        <section class="section__detail__content user__page__content approve">
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
                            <h3>Bagikan Kisah Anda</h3>
                            <div class="row my-3 mx-1">
                                <div class="col-lg-8 col-md-8 p-3 mx-auto border rounded border-secondary">
                                    @if ($stories)
                                        <div class="text-center">
                                            <h5>TERIMAKASIH TELAH MEMBAGIKAN KISAH ANDA</h5>
                                        </div>
                                    @else
                                        <form action="{{ route('stories-store') }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <label for="star-rating">Rating</label>
                                                    <div class="star-rating" id="star-rating">
                                                        <span class="fa fa-star-o" data-rating="1"></span>
                                                        <span class="fa fa-star-o" data-rating="2"></span>
                                                        <span class="fa fa-star-o" data-rating="3"></span>
                                                        <span class="fa fa-star-o" data-rating="4"></span>
                                                        <span class="fa fa-star-o" data-rating="5"></span>
                                                        <input type="hidden" name="rating" class="rating-value" value="5">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="stories">Stories</label>
                                                <textarea class="form-control" id="stories" name="stories" rows="3"
                                                    required></textarea>
                                            </div>
                                            <div class="btn-confirm">
                                                <button type="submit" class="btn btn-success d-block">Submit</button>
                                            </div>
                                        </form>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
@push('rating')
    <script>
        var $star_rating = $('.star-rating .fa');

        var SetRatingStar = function() {
            return $star_rating.each(function() {
                if (parseInt($star_rating.siblings('input.rating-value').val()) >= parseInt($(this).data(
                        'rating'))) {
                    return $(this).removeClass('fa-star-o').addClass('fa-star');
                } else {
                    return $(this).removeClass('fa-star').addClass('fa-star-o');
                }
            });
        };

        $star_rating.on('click', function() {
            $star_rating.siblings('input.rating-value').val($(this).data('rating'));
            return SetRatingStar();
        });

        SetRatingStar();
        $(document).ready(function() {

        });
    </script>
@endpush
