

@extends('frontend.layout.master')
@section('title', 'City-To-City Ground Transportation')
@section('style')
<link rel="stylesheet" href="{{ asset('frontend/assets/css/service-new.css') }}">
@endsection
@section('content')
<!--###############  banner start################# -->
<section class="banner">
    <div class="container">
        <div class="banner-content ">
           <h1 class="text-capitalize">{{ $main_service->name }}</h1> 
        </div>
    </div>
</section>
<!--  start service section -->
<section class="section-top services">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 text-center ">
                <div class="col-12 ">
                    <h3 class="main-title">{{ $main_service->name }}</h3>
                    <div class="title-line"></div>
                </div>
            </div>
            <!-- start 1-->
            <div class="row justify-content-between pb-5">
                
                <div class="  col-12 mb-5 ">
                    <div>
                        <h2 class=" services-title text-capitalize mb-4">{{ $main_service->name }}</h2>
                        <div>
                        
                         @foreach (splitParagraph($main_service->description) as $text )
                            <p>{{ $text .'.'}}</p>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-12 row">
                    
                   
                    <div class="col-12 text-center ">
                        <div class="col-12 ">
                            <h3 class="main-title">{{ $main_service->name  .' We are serve'}}</h3>
                            <div class="title-line"></div>
                        </div>
                    
                   </div>
                   <div class="col-12 row">

                    @foreach ($main_service->services as $service )


                    <div class="col-lg-4 col-md-6  p-2">
                        <a href="{{ route('service',url_handel($service->seo->url)) }}">
                         <div class="book-by-area-popular">
                             <img src="{{ asset($service::PATH.$main_service->name.'/'.$service->image->name) }}" class="w-100" style="height: 20rem" alt="Limousine Service to Boston">
                     <h3 class="title">{{ $service->name }}</h3>
                         </div>
                     
                     </a>
                     </div>
                        
                    @endforeach
                   </div>
                </div>

            </div>
             
           
        </div>
</section>


    @endsection














