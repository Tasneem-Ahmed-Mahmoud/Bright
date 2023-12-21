<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class ContactController extends Controller
{


    function index()
    {
        confirmDelete('delete', 'are you sure to delete?');
        $messages = Contact::paginate(10, ['name', 'email', 'subject', 'message', 'id']);
        return view('dashboard.messages.index', compact('messages'));
    }

    function destroy(Contact $contact)
    {
        if ($contact->delete()) {
            Alert::success('success', 'deleted successfully');
        } else {
            Alert::error('error', ' failed');
        }
        return redirect()->back();
    }
}
