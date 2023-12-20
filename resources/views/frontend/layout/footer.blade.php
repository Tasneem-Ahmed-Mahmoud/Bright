

<!-- ######## footer########################-->

<footer class="pt-2">
  <div class="container-fluid pt-5">
    <div class="container">
      <div class="row">
        <!-- start -->
        <div class="col-md-5 col-12 ">
          <div class="">

            <a  href="{{ route('Bright Empire') }}"> <img src="{{asset('assets/images/bright.png')}}" alt="limousin logo" class=" logo"> </a>

            <p class="mt-4">
              Bright Empire is a fantastic website that offers a variety of services and resources for individuals and businesses alike. It is the perfect destination for information seekers and those interested in personal and professional development.
            </p>
          </div>
        </div><!-- end -->

        <!-- start -->
        <div class="col-md-4  px-3">
          <div class="footer_list">
            <h5>OUR SERVICES</h5>
            <ul class="footer_down-list mt-2 " >
              <li> <a href="">Airport Service</a></li>
              <li> <a href="">VIP Service</a></li>
              <li><a href="" >Night To Town</a> </li>
              
            </ul>
          </div>
        </div><!-- end -->
        <!-- start -->
        <div class="col-md-3 px-3 ">
          <div class="footer_list">
            <h5>FLEET</h5>
            <ul class="footer_down-list mt-2">
                
              
            </ul>
          </div>
        </div><!-- end -->

      </div>
    </div>

  </div>
  <!-- down footer -->


  <div class="container-fluid  footer_down">
    <hr style="background:white">
    <div class="container">
      <div class="px-sm-3 py-2">
        <div class="row justify-content-between align-items-center">
          <div class="col-md-9 col-12 p-1">
             
            <span class=" ">© Bright Empire 2023.All Rights Reserved.</span>
          </div>
          <div class="col-md-3 col-12 ">
            <ul class="footer_down-list d-flex justify-content-between  p-1">
              <li><a href="https://www.facebook.com/brightempirelimo"> <i class="fa-brands fa-facebook fs-3 "> </i></a></li>
              <li><a href="https://twitter.com/BrightEmpirenyc"> <i class="fa-brands fa-twitter fs-3"></i> </a></li>
              <li><a href="https://www.instagram.com/brightempirelimo/"> <i class="fa-brands fa-instagram fs-3"></i> </a></li>
              <li><a href="https://yelp.to/3RkeAgE9gp"> <i class="fa-brands fa-yelp fs-3"></i> </a></li>
              <li><a href="https://api.whatsapp.com/send?phone=+1646-750-7006&text=Hello%20there!"> <i class="fa-brands fa-whatsapp fs-3"></i> </a></li>
              <li><a href=" https://www.linkedin.com/in/bright-empire-96265928a/"> <i class="fa-brands fab fa-linkedin-in fs-3"></i> </a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>

   
  
  <!-- jquery -->
  <script src="{{asset('assets/js/jquery.js')}}"></script>
   
  <!--  Bootstrap  -->
  <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
  <!-- system -->
  <script type="text/javascript" src="https://book.mylimobiz.com/v4/widgets/widget-loader.js"> </script>
 <!-- script js -->
  <script src="{{asset('assets/js/main-new.js') }}"></script>
@yield('script')
</body>
  
  
</html>