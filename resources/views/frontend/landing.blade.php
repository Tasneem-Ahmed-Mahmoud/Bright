@extends('frontend.layout.master')
@section('title','Professional Luxury Limousine Service in New York')

@section('style')
<link rel="stylesheet" href="{{asset('frontend/assets/css/home.css')}}">
@endsection
@section('content')

<!-- hero -->
<section id="hero" class="min-vh-100  d-flex text-center align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-12  d-flex text-center align-items-center flex-column ">
                <h1 class="text-uppercase fw-semibold display-1 "> Bright Empire</h1>
                <p class="text-white mt-3 mb-4 text-capitalize  w-50 text-center ">The best limousine company with professional drivers proudly serving NYC and the TRI state area for decades</p>
                <div class="">
                    <a href="{{ route('system.reservation') }}" class="btn btn-brand me-2 main-btn">Make Reservation</a>
                    <a href="{{ route('system.register') }}" class="btn btn-light ms-2 secondary-btn mt-2 mt-sm-0">Create Account</a>
                </div>
            </div>
        </div>
    </div>
</section>







<!-- ################## review ################## -->
<section class="testimonials section-top">
    <div class="container">
        <div class="row">
            <div class="col-12 ">
                <h3 class="main-title">Customer's feedback</h3>
                <div class="title-line"></div>
            </div>
            <div class=" google-review col-lg-4 d-flex   align-items-center">
                <div class="content text-center ">
                    <h5 class="text-white">Excellent</h5>
                    <div class="starts m-3">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <span class="fs-5 text-white">Based on <a href="https://maps.app.goo.gl/tBA2GMzCSd2kpHzw9?g_st=iw" class=" text-decoration-underline ">google reviews</a></span>
                    <figure class="google-icon mt-3">
                        <a href="https://maps.app.goo.gl/tBA2GMzCSd2kpHzw9?g_st=iw"><img src="{{asset('assets/images/googlelogo_color.png')}}" alt=" google icon"></a>
                    </figure>
                </div>
            </div>
            <div class="testimonials-wrapper  col-lg-8">
                <i id="left-icon" class=" arrow fa-solid arrow-icon fa-angle-left"></i>
                <ul class="carousel">
                    <!-- start 1-->
                    <li class="card" draggable="false">
                        <div class="card-img mt-3 py-2">
                            <img src="{{asset('assets/images/client/1.png')}}" alt="limousin client review">
                        </div>
                        <div class="px-2 card-content d-flex justify-content-center align-items-center flex-column">
                            <h2>Yes No</h2>

                            <div class="starts ">
                                <i class="fa-solid fa-star fs-6"></i>
                                <i class="fa-solid fa-star fs-6"></i>
                                <i class="fa-solid fa-star fs-6"></i>
                                <i class="fa-solid fa-star fs-6"></i>
                                <i class="fa-solid fa-star fs-6"></i>
                            </div>
                            <p>
                                This is a very great TLC company, has a team that is helpful and patience, not to mention their work ethic and skills! Very recommended if you need a ride to a place, and is worried!

                            </p>

                        </div>
                    </li>


                    <!-- item 2 -->
                    <li class="card" draggable="false">
                        <div class="card-img mt-3 py-2">
                            <img src="{{asset('assets/images/client/2.png')}}" alt="limousine client review">

                        </div>
                        <div class="px-2 card-content d-flex justify-content-center align-items-center flex-column">
                            <h2>Pam Delucia</h2>

                            <div class="starts ">
                                <i class="fa-solid fa-star fs-6"></i>
                                <i class="fa-solid fa-star fs-6"></i>
                                <i class="fa-solid fa-star fs-6"></i>
                                <i class="fa-solid fa-star fs-6"></i>
                                <i class="fa-solid fa-star fs-6"></i>
                            </div>
                            <p>
                                Hassan drove us around NYC all day and he was so patient and helpful during our last minute adventure. He truly added to our NYC experience. We highly recommend him.
                            </p>

                        </div>
                    </li>



                    <!--item 3 -->
                    <li class="card" draggable="false">
                        <div class="card-img mt-3 py-2">
                            <img src="{{asset('assets/images/client/3.png')}}" alt="limousine client logo">

                        </div>
                        <div class="px-2 card-content d-flex justify-content-center align-items-center flex-column">
                            <h2>dustin liu</h2>

                            <div class="starts ">
                                <i class="fa-solid fa-star fs-6"></i>
                                <i class="fa-solid fa-star fs-6"></i>
                                <i class="fa-solid fa-star fs-6"></i>
                                <i class="fa-solid fa-star fs-6"></i>
                                <i class="fa-solid fa-star fs-6"></i>
                            </div>
                            <p>
                                Very comfortable car, arrived on time and took me and my family to lga airport, the driver is also very professional, I think I will still choose this company next time I come to New York
                            </p>

                        </div>
                    </li>




                    <!--item 4 -->
                    <li class="card" draggable="false">
                        <div class="card-img mt-3 py-2">
                            <img src="{{asset('assets/images/client/4.png')}}" alt="limousine client logo">

                        </div>
                        <div class="px-2 card-content d-flex justify-content-center align-items-center flex-column">
                            <h2>mahfuzul azam</h2>

                            <div class="starts ">
                                <i class="fa-solid fa-star fs-6"></i>
                                <i class="fa-solid fa-star fs-6"></i>
                                <i class="fa-solid fa-star fs-6"></i>
                                <i class="fa-solid fa-star fs-6"></i>
                                <i class="fa-solid fa-star fs-6"></i>
                            </div>
                            <p>
                                awesome service, best in the town.the chauffeurs are very friendly and professional as well. i really like Bright Empire Limousine
                            </p>

                        </div>
                    </li>


                </ul>

                <i id="right-icon" class=" arrow fa-solid arrow-icon fa-angle-right"></i>
            </div>

        </div>
    </div>
</section>



<!-- ######## frequently-asked-questions ########################-->
<section class="frequently-asked-questions section-top ">
    <div class="container">
        <div class="col-12 ">
            <h3 class="main-title">Frequently Asked Questions</h3>
            <div class="title-line"></div>
        </div>

        <!-- <h2 class="questions-header text-center">Frequently Asked Questions</h2> -->
        <div class="row justify-content-between">
            <div class="col-lg-6">
                <div class="accordion" id="accordionExample">
                    <!-- start accordion-item 1-->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
                                <i class="fas fa-minus accordion-icon"></i>
                                <h5>Where do I meet my driver at the airport?</h5>
                            </button>
                        </h2>
                        <div id="collapse1" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <h6>
                                    There are two options for meeting your driver at the
                                    airport (specified at time of reservation):
                                </h6>
                                <br />
                                <h6>1. Express Airport pick-up:</h6>
                                <p>
                                    The chauffeur will pick you up outside the terminal
                                    instead of parking and meeting you inside. This is done
                                    primarily at terminals where there is no parking. Express
                                    pick-ups are perfect for clients who prefer a quicker exit
                                    from the airport and by avoiding parking fees, is more
                                    cost effective. The proper procedure for an express
                                    pick-up is as follows:
                                </p>
                                <ul>
                                    <li>
                                        When you have secured your luggage and are ready to be
                                        picked up and if you didn’t get in touch with your
                                        driver already by this time, please call the office and
                                        inform the dispatcher of your terminal number or airport
                                        location (door number/pickup area number).
                                    </li>
                                    <li>
                                        Our dispatcher will then notify the chauffeur, who will
                                        be waiting in the limousine holding lot, to pull up to a
                                        terminal door or passenger pickup area. Our dispatcher
                                        will inform you of the type of vehicle to assist you
                                        with identifying it as it arrives at the terminal.
                                    </li>
                                </ul>
                                <h6>2. Meet and Greet Airport pick-up:</h6>
                                <p>
                                    Our chauffeur will park his vehicle and meet you inside of
                                    the airport terminal. He will be holding a personalized
                                    name sign so that he is easily identifiable.
                                </p>

                                <ul>
                                    <li>
                                        Domestic Flights – Passengers will meet the chauffeur
                                        inside the terminal in the baggage claim area.
                                    </li>
                                    <li>
                                        International Flights – Passengers will meet the
                                        chauffeur inside the terminal outside of Customs.
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- start accordion-item 2-->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                <i class="fas fa-minus accordion-icon"></i>
                                <h5>
                                    For airport pickups, do I need to reserve a car in advance
                                    or can I call for a car once I land? How long will it take
                                    to pick me up?
                                </h5>
                            </button>
                        </h2>
                        <div id="collapse2" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>
                                    At <a href="" class="accordion-bright">BRIGHT EMPIRE</a>,
                                    we can provide unscheduled airport pickups. Kindly get in
                                    touch with us once you have landed to check our
                                    availability. If you would like to ensure availability, we
                                    recommend that you book a car 12 hours in advance. It
                                    takes approximately 5-10 minutes for the driver to pull up
                                    to your terminal.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- start accordion-item 3 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                <i class="fas fa-minus accordion-icon"></i>
                                <h5>Will I get a call when my car arrives?</h5>
                            </button>
                        </h2>
                        <div id="collapse3" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>
                                    As a courtesy to our customers, we have clear instructions
                                    to all of our drivers to contact the customers when they
                                    are on location (usually before the pickup time by 10 to
                                    20 minutes).
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- start accordion-item 4-->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                <i class="fas fa-minus accordion-icon"></i>
                                <h5>What do I do if I do not find my driver?</h5>
                            </button>
                        </h2>
                        <div id="collapse4" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>
                                    If for any reason you do not see your chauffeur, simply
                                    contact our office at (646) 750-7006. Our dispatch team is
                                    always aware of where your vehicle is and is on duty 24/7
                                    to help you with any concern
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- start accordion-item 5-->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                <i class="fas fa-minus accordion-icon"></i>
                                <h5>
                                    What are the passenger and luggage capacities of the
                                    various vehicles?
                                </h5>
                            </button>
                        </h2>
                        <div id="collapse5" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>
                                    If you make a reservation for a sedan you are eligible to
                                    take up four passengers with three standard size pieces of
                                    luggage.For Mini SUV you can bring up to 5 passengers with
                                    5 mid size luggage. However, in SUVs, you can take up to 6
                                    passengers with six standard size pieces of luggage.
                                </p>
                            </div>
                        </div>
                    </div>


                    <!-- start accordion-item 6-->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                                <i class="fas fa-minus accordion-icon"></i>
                                <h5>
                                    What is the standard gratuity (TIP) you charge or every
                                    ride?
                                </h5>
                            </button>
                        </h2>
                        <div id="collapse6" class="accordion-collapse collapse" data-bs-parent="#accordionExample2">
                            <div class="accordion-body">
                                <p>We charge 15% gratuity for every ride.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- ################### -->
            <div class="col-lg-6 mt-lg-0 mt-3">
                <div class="accordion" id="accordionExample2">

                    <!-- start accordion-item 7-->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
                                <i class="fas fa-minus accordion-icon"></i>
                                <h5>Are you closed on any major holidays?</h5>
                            </button>
                        </h2>
                        <div id="collapse7" class="accordion-collapse collapse" data-bs-parent="#accordionExample2">
                            <div class="accordion-body">
                                <p>
                                    No, we are open 24 hours a day 7 days a week 365 days a
                                    year.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- start accordion-item 8-->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse8" aria-expanded="false" aria-controls="collapse8">
                                <i class="fas fa-minus accordion-icon"></i>
                                <h5>Do you provide child seats in your vehicles?</h5>
                            </button>
                        </h2>
                        <div id="collapse8" class="accordion-collapse collapse" data-bs-parent="#accordionExample2">
                            <div class="accordion-body">
                                <p>
                                    Yes. We provide car seats for infants, toddlers and
                                    booster seats for additional fees.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- start accordion-item 9-->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse9" aria-expanded="false" aria-controls="collapse9">
                                <i class="fas fa-minus accordion-icon"></i>
                                <h5>
                                    What time should I leave my home/office to catch my
                                    Flight?
                                </h5>
                            </button>
                        </h2>
                        <div id="collapse9" class="accordion-collapse collapse" data-bs-parent="#accordionExample2">
                            <div class="accordion-body">
                                <p>
                                    We always recommend that you are at the Airport at least
                                    1.5 hours before your Domestic Flight departure time and
                                    at least 2.5 to 3 hours before your International flight
                                    departure time. We recommend time of pick up keeping this
                                    in mind along with traffic patterns and expected weather.
                                    We do not take responsibility for booking time since that
                                    is left to the client's discretion, but we will always
                                    suggest an accurate time based on our knowledge.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- start accordion-item 10-->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse10" aria-expanded="false" aria-controls="collapse10">
                                <i class="fas fa-minus accordion-icon"></i>
                                <h5>Do you track my Flight?</h5>
                            </button>
                        </h2>
                        <div id="collapse10" class="accordion-collapse collapse" data-bs-parent="#accordionExample2">
                            <div class="accordion-body">
                                <p>
                                    Yes, we track all flights and will dispatch the driver
                                    accordingly
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- start accordion-item 11-->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse11" aria-expanded="false" aria-controls="collapse11">
                                <i class="fas fa-minus accordion-icon"></i>
                                <h5>Will I be charged exactly what I was quoted?</h5>
                            </button>
                        </h2>
                        <div id="collapse11" class="accordion-collapse collapse" data-bs-parent="#accordionExample2">
                            <div class="accordion-body">
                                <p>
                                    Yes, unless there is any wait time or extra stops or you
                                    changed the pickup/drop off address of your reservation.
                                    We have no hidden fees.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection

@section('script')
<script src="{{asset('frontend/assets/js/testimonial.js')}}"></script>
@endsection