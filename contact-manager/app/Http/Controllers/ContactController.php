<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact.index', ['contacts' => $this->getContacts()]);
    }
    public function create()
    {
        return view('contact.create');
    }
    public function store(Request $request) {
        $contact = new Contact();
        $contact->user_id = 1;
        $contact->name = request("name");
        $contact->email = request("email");
        $contact->phone = request("phone");
        error_log($contact);
        // $contact->save();
        return redirect('/contact')->with("message", $contact->name." saved successfully");
    }

    

    public function show($id) {}
    public function edit($id) {}
    public function update(Request $request, $id) {}
    public function destroy($id) {}

    // a contacts generator (for testing)
    function getContacts()
    {
        $contacts = [];
        $contacts[] =
            [
                'name' => 'Eddo0',
                'email' => null,
                'number' => '33568976'
            ];
        for ($i = 1; $i <= 100; $i++) {
            $contacts[] =
                [
                    'name' => 'Eddo' . $i,
                    'email' => '1@gmail.com',
                    'number' => '33568976'
                ];
        }

        return $contacts;
    }
}
