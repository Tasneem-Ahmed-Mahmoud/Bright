<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\MainService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\MainServiceRequest;

class MainServiceController extends Controller
{
  
    function index()
    {
        confirmDelete('delete', 'are you sure to delete?');
        $main_services = MainService::paginate(10, ['id','name','description']);

        return view('dashboard.main-services.index', compact('main_services'));
    }
    function create()
    {
       
        return view('dashboard.main-services.create');
    }


function store(MainServiceRequest $request){
    try {
    DB::transaction(function ($query)use ($request) {
    $main_service=MainService::create([
            'name'=>$request->name,
            'description'=>$request->description
    ]);
    
    $main_service->seo()->create([
       'title'=>$request->title,
       'description'=>$request->seo_description,
       'url'=>$request->url, 
    ]);

    });

} catch (\Exception $e) {
    Alert::error('error','Transaction failed: ' . $e->getMessage());
 }
 
    Alert::toast('stored successfully', 'success');
    return to_route('main-services.index');
    
}



function edit(MainService $main_service)
{
  
    return view('dashboard.main-services.edit',compact('main_service'));
}

function update(MainServiceRequest $request,MainService $main_service){

    try {
    DB::transaction(function ()use ($request,$main_service) {
    $main_service->update([
            'name'=>$request->name,
            'description'=>$request->description
    ]);
    $main_service->seo()->update([
        'title'=>$request->title,
        'description'=>$request->seo_description,
        'url'=>$request->url, 
     ]);
});
} catch (\Exception $e) {
   Alert::error('error','Transaction failed: ' . $e->getMessage());
}

Alert::success('success', 'updated successfully');

    return redirect()->back();
    
}

function destroy(MainService $main_service){


    try {
        DB::transaction(function ()use ($main_service) {
        $main_service->delete();
        $main_service->seo()->delete();
        });
    } catch (\Exception $e) {
       Alert::error('error','Transaction failed: ' . $e->getMessage());
    }
    
    Alert::success('success', 'deleted successfully');
    
        return redirect()->back();
  
}


}
