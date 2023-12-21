<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Fleet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\FleetRequest;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class FleetController extends Controller
{


    function index()
    {
        confirmDelete('delete', 'are you sure to delete?');
        $fleets = fleet::paginate(10, ['id', 'name', 'description', 'photo', 'alt']);

        return view('dashboard.fleets.index', compact('fleets'));
    }
    function create()
    {

        return view('dashboard.fleets.create');
    }


    function store(FleetRequest $request)
    {
        try {
            DB::transaction(function ($query) use ($request) {
                $fleet = fleet::create([
                    'name' => $request->name,
                    'description' => $request->description,
                    'photo' => uploadImage($request->photo, Fleet::PATH),
                    'alt' => $request->alt
                ]);

                $fleet->seo()->create([
                    'title' => $request->title,
                    'description' => $request->seo_description,
                    'url' => $request->url,
                ]);
            });
        } catch (\Exception $e) {

            Alert::error('error', 'Transaction failed: ' . $e->getMessage());
        }

        Alert::success('success', 'stored successfully');
        return to_route('fleets.index');
    }



    function edit(Fleet $fleet)
    {

        return view('dashboard.fleets.edit', compact('fleet'));
    }

    function update(FleetRequest $request, Fleet $fleet)
    {

        try {
            DB::transaction(function () use ($request, $fleet) {
                $old_photo = $fleet->photo;
                $fleet->update([
                    'name' => $request->name,
                    'description' => $request->description,
                    'photo' => $request->hasFile('photo') ? uploadImage($request->photo, Fleet::PATH, $old_photo) : $old_photo,
                    'alt' => $request->alt
                ]);

                $fleet->seo()->update([
                    'title' => $request->title,
                    'description' => $request->seo_description,
                    'url' => $request->url
                ]);
               
            });
        } catch (\Exception $e) {
            Alert::error('error', 'Transaction failed: ' . $e->getMessage());
        }

        Alert::success('success', 'updated successfully');

        return redirect()->back();
    }

    function destroy(Fleet $fleet)
    {
        try {
            DB::transaction(function () use ($fleet) {
               $photo= $fleet->photo;
                $fleet->seo()->delete();
                $fleet->delete();
                deleteImage($photo, fleet::PATH);

                foreach ($fleet->images as $image) {
                   
                    $old=$image->name;
                    $image->delete();
                    deleteImage($old, Fleet::PATH);
                    
                }
            });
        } catch (\Exception $e) {
            Alert::error('error', 'Transaction failed: ' . $e->getMessage());
        }

        Alert::success('success', 'deleted successfully');

        return redirect()->back();
    }
}
