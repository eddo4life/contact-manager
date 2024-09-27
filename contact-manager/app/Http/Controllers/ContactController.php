<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    // public function index()
    // {
    //     return view('contact.index', ['contacts' => Contact::all()]);
    // }

    public function index()
{
    $user = backpack_user();

    if (!$user) {
        return redirect('admin/logout')->with('error', 'You need to be logged in to view contacts.');
    }

    $contacts = Contact::where('user_id', $user->id)->get(); 

    return view('contact.index', [
        'contacts' => $contacts,
        'currentUserName' => $user->name,
    ]);
}

    public function create()
    {
        return view('contact.create');
    }
    public function store(Request $request) {
        $contact = new Contact();
        $user = backpack_user();

    if (!$user) {
        return redirect('admin/logout')->with('error', 'You need to be logged in to view contacts.');
    }
        $contact->user_id=$user->id;
        $contact->name = request("name");
        $contact->email = request("email");
        $contact->phone = request("phone");
        $contact->save();
        return redirect('/contact')->with("message", $contact->name." saved successfully");
    }
}
