@php
$url = Route::current()->getName();
$new_url = explode('-', $url);

@endphp

<div aria-label="breadcrumb">
    <div class="breadcrumb">
        <li class="breadcrumb-item my-2"><a href="/">home</a></li>
        <li class="breadcrumb-item my-2 active" aria-current="page" class="text-dark">
            {{ $new_url[0] }}</li>
        <li class="breadcrumb-item my-2 active" aria-current="page" class="text-dark">{{ $new_url[1] }}
        </li>
    </div>
</div>
