<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Fleet;
use App\Models\Image;
use Illuminate\Http\Request;
use App\Http\Requests\ImageRequest;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class ImageController extends Controller
{




    function find_fleet($fleet_id)
    {
        return Fleet::find($fleet_id);
    }
    function index($fleet_id)
    {

        confirmDelete('delete', 'are you sure to delete?');
        $fleet = $this->find_fleet($fleet_id);
        $images = $fleet->images;
        return view('dashboard.fleet-images.index', compact('images', 'fleet_id'));
    }

    function store(ImageRequest $request)
    {

        $fleet = $this->find_fleet($request->fleet_id);

        $image = $fleet->images()->create([
            'name' => uploadImage($request->image, Fleet::PATH),
            'alt' => $request->alt
        ]);
        if ($image) {


            Alert::success('success', 'stored successfully');
        } else {
            Alert::error('error', ' failed');
        }
        return to_route('images.index', $request->fleet_id);
    }


    function update(ImageRequest $request, Image $image)
    {

        $old = $image->name;
        $updated = $image->update([
            'name' => uploadImage($request->image, Fleet::PATH, $old),
            'alt' => $request->alt
        ]);

        if ($updated) {
            Alert::success('success', 'updated successfully');
        } else {
            Alert::error('error', ' failed');
        }
        return redirect()->back();
    }



    function destroy(image $image)
    {
        $old = $image->name;

        if ($image->delete()) {
            deleteImage($old, Image::PATH);
            Alert::success('success', 'deleted successfully');
        } else {
            Alert::error('error', ' failed');
        }
        return redirect()->back();
    }
}
