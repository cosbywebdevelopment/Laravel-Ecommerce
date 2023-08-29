@extends('layouts.app')
@section('title', 'Home')
@push('link')
    <link href="{{ asset('css/product.css') }}" rel="stylesheet">
@endpush
@section('content')
{{--    {{ dd($products) }}--}}
<main>
    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-body-tertiary">
        <div class="col-md-6 p-lg-5 mx-auto my-5">
            <h1 class="display-3 fw-bold">Laravel Ecommerce Demo</h1>
            <h3 class="fw-normal text-muted mb-3">Built using Bootstrap 5</h3>
        </div>
        <div class="product-device shadow-sm d-none d-md-block"></div>
        <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
    </div>

    <div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3">

        @foreach($products as $product)
            <div class="bg-body-tertiary me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
                <div class="my-3 p-3">
                    <h2 class="display-5">{{$product->name}}</h2>
                    <p class="lead">Price £{{ $product->price }}</p>
                    <a class="btn btn-primary">Buy!</a>
                </div>
                    <img class="mx-auto" style="width: 90%; height: 300px; border-radius: 21px 21px 0 0;" src="{{ $product->image }}">
            </div>
        @endforeach

    </div>
</main>



@endsection
