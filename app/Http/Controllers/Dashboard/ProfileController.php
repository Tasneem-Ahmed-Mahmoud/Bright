<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\PasswordUpdateRequest;
use App\Http\Requests\ProfileUpdateRequest;

class ProfileController extends Controller
{
    //

    function edit(){
        return view('dashboard.profile.edit');
    }
    function updateProfile(ProfileUpdateRequest $request)
    {
        $user = Auth::user();
        $update =  $user->update([
            "name" => $request->name,
            "email" => $request->email
        ]);
        if ($update) {
            Alert::success('success', 'Information updated  successfully');
        } else {
            Alert::error('error', 'Transaction failed ');
        }

        return redirect()->back();
    }
    public function updatePassword(PasswordUpdateRequest $request)
    {
        $user = Auth::user();
        if (!Hash::check($request->current_password, $user->password)) {
            return redirect()->back()->withErrors(['current_password' => 'The current password is incorrect']);
        }
        $user->password = Hash::make($request->password);
        $user->save();
        Alert::success('success', 'password updated  successfully');
        return redirect()->back();
    }
}
