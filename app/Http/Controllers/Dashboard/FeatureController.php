<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Fleet;
use App\Models\Feature;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\FeatureRequest;
use RealRashid\SweetAlert\Facades\Alert;

class FeatureController extends Controller
{


    function index($fleet_id)
    {
        confirmDelete('delete', 'are you sure to delete?');
        $features = Feature::with('fleet:id,name')->where('fleet_id', $fleet_id)->paginate(10, ['fleet_id', 'id', 'name']);

        return view('dashboard.features.index', compact('features', 'fleet_id'));
    }

    function store(FeatureRequest $request)
    {
        $feature = Feature::create([
            'name' => $request->name,
            'fleet_id' => $request->fleet_id
        ]);
        if ($feature) {

            Alert::success('success', 'stored successfully');
        } else {
            Alert::error('error', ' failed');
        }
        return to_route('features.index', $request->fleet_id);
    }


    function update(FeatureRequest $request, Feature $feature)
    {

        $updated = $feature->update([
            'name' => $request->name,
        ]);

        if ($updated) {
            Alert::success('success', 'updated successfully');
        } else {
            Alert::error('error', ' failed');
        }
        return to_route('features.index', $feature->fleet_id);
    }



    function destroy( Feature $feature){
      
        if ($feature->delete()) {
            Alert::success('success', 'deleted successfully');
        } else {
            Alert::error('error', ' failed');
        }
        return redirect()->back();
    } 







}
