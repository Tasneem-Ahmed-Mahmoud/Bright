<!doctype html>
<html lang="en">

<head>

  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <meta name="description" content="{{ $description?? 'Luxurious. Comfortable. Professional. A premium limousine service in New York. An exceptional experience in your journey with elegance and luxury.'}}">

    <meta name="keywords" content="Limousine,Premium,LuxuryComfort,Professional,Elegant,Exquisite,Chauffeur,Exclusive,Sophisticated,High-end,Prestige,Opulent,Classy,First-class">
  <title>@yield('title')</title>

  <!-- icon -->
  <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/images/favicon.png')}}">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
  <!-- css -->
  @yield('style')
  <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/new-style.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
  <script>
      let navBar=document.querySelectorAll('.nav-link');
let navCollapse=document.querySelector('.navbar-collapse.collapse');

navBar.forEach((ele )=> {
   
    ele.addEventListener('click',function(){
        if(!ele.classList.contains('dropdown-toggle')){
            navCollapse.classList.remove('show');
        }
        
    });
});

  </script>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-2VREN4V3TD">
  </script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-2VREN4V3TD');
  </script>

</head>


<body>

  @include('./layouts.nav')