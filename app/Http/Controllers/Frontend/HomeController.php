<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Seo;
use App\Models\Service;
use App\Models\MainService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{


  function index(){

    $fleets=Fleet::with('images')->take(6)->get();
    return view('frontend.landing',compact('fleets','services'));

  }

    function main_service($url)
    {
        $main_service = MainService::with(['services.image','services.seo','seo'])->whereHas('seo', function ($query) use ($url) {
            $query->whereUrl($url);
        })->first();

        ($main_service);
          if($main_service){
            return view('frontend.services.main-service', compact("main_service"));
          }
          abort(404);        
  }
    function service($url)
    {
        $service = Service::with(['image','seo'])->whereHas('seo', function ($query) use ($url) {
            $query->whereUrl('services/'.$url);
        })->first();
        if($service){
            return view('frontend.services.service', compact("service"));
          }
          abort(404); 
    }




}
