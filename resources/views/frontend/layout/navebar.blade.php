{{-- End Header --}}
@php
use App\Models\Category;
  $categories = Category::all()
@endphp


  <!-- navbar -->
<header class="sticky-top navbar-header">





  <div class="nav-top  ">
   <div class="container">
    <div class="row justify-content-between py-lg-2 py-1 nav-top_content">
      <div class="col-md-6 text-md-start text-center info">
    <!-- email -->
    <a  href="mailto:info@brightempirelimonyc.com"><i class="fa fa-envelope"></i> <span>info@brightempirelimonyc.com</span></a><a class="ms-1" href="tel:+1 646-750-7006"><i class="fa fa-phone"></i><span>+1 646-750-7006</span></a>
      </div>
     <div class="col-md-6 row justify-content-between nav-social">
      <div class="col-sm-6  text-center">
<a href="https://www.facebook.com/brightempirelimo"> <i class="fa-brands fa-facebook "> </i></a>

        <a class="mx-3" href="https://www.instagram.com/brightempirelimo/"> <i class="fa-brands fa-instagram ms-lg-2"></i> </a>
         <a href="https://twitter.com/BrightEmpirenyc"> <i class="fa-brands fa-twitter m-lg-2"></i> </a>
         <a href="https://api.whatsapp.com/send?phone=+1646-750-7006&text=Hello%20there!"> <i class="fa-brands fab fa-whatsapp ms-3 "></i></a>

      </div>
      <div class="col-sm-6 text-md-end text-center">
        <a  href="{{ route('system.login')}}"> <i class="fas fa-sign-in-alt "></i> <span>Login</span></a>
        <a class="ms-1" href="{{ route('system.register')}}"> <i class="fa-solid fa-user-plus ms-lg-3 ms-1"></i> <span>Register</span></a>
        </div>
     </div>
    
    </div>
   </div>
</div>

<!-- header start -->
<header class="header">
    <div class="container">
        <div class="row v-center">
            <div class="header-item item-left">
                <div class="logo">
                    <a href="{{ route('Bright Empire') }}"><img src="{{ asset('assets/images/bright.png') }}" alt="" srcset=""></a>
                </div>
            </div>
            <!-- menu start here -->
            <div class="header-item item-center">
                <div class="menu-overlay">
                </div>
                <nav class="menu">
                    <div class="mobile-menu-head">
                        <div class="go-back"><i class="fa fa-angle-left"></i></div>
                        <div class="current-menu-title"></div>
                        <div class="mobile-menu-close">&times;</div>
                    </div>
                    <ul class="menu-main">
                       
                    </ul>
                </nav>
            </div>
            <!-- menu end here -->
            <div class="header-item item-right">
            <a href="" class="btn btn-brand ms-lg-3 main-btn">Make Reservation</a>
                <!-- mobile menu trigger -->
                <div class="mobile-menu-trigger">
                    <span></span>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header end -->

</header>
