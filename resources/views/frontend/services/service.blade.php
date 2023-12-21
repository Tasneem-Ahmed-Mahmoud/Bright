@php
    $description=$service->seo->description;
    
@endphp
@extends('frontend.layout.master')
@section('title', $service->seo->title)
@section('style')
<link rel="stylesheet" href="{{ asset('frontend/assets/css/service-new.css') }}">
@endsection
@section('content')
<!--###############  banner start################# -->
<section class="banner">
    <div class="container">
        <div class="banner-content ">
            <h1>{{ $service->name }}</h1>
        </div>
    </div>
</section>
<!--  start service section -->
<section class="section-top services">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 text-center pb-5">
                <div class="col-12 ">
                    <h3 class="main-title">{{ $service->name }}</h3>
                    <div class="title-line"></div>
                </div>
            </div>
          
              <!-- start 1 -->
              <div class="row justify-content-between pb-5">
                <div class=" col-lg-6 col-12 mb-5">
                    <div class="card border-0 me-lg-5">
                        <img src="{{ asset(asset($service::PATH.$service->mainService->name.'/'.$service->image->name)) }}" alt="{{ $service->image->alt }}">
                    </div>
                </div>

                <div class=" col-lg-6 col-12 mb-5 order-2 order-lg-1">
                    <div >
                        <h2 class=" services-title text-capitalize mb-4">{{ $service->name }}</h2>
                        <div >

                            @foreach (splitParagraph($service->description) as $text )
                            <p>{{ $text .'.'}}</p>
                            @endforeach
                         
                            <a href="{{ route('system.reservation') }}" class="btn main-btn mt-4">Make Reservation</a>
                        </div>
                    </div>
                </div>

            </div>
            {{-- end --}}



        </div>
</section>
@endsection
