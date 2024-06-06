<?php

namespace App\Http\Controllers;

use App\Models\Contact;

use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function __construct(Contact $contact, Request $request)
    {
        $this->contact = $contact;
        $this->request = $request;
    }

    public function contact()
    {
        return view('layouts/public/contact');
    }

    public function daftarcontact()
    {
        $conts = Contact::all()->sortdesc();
        return view('layouts/admin/contact',compact('conts'));
    }

    public function simpancontact(Request $request)
    {
        $this->contact->saveData($this->request->all());
        return view('layouts/public/contact');
    }

    public function deleteContact($id)
    {
        $Contact = $this->contact->deleteData($id);
        return redirect()->route('daftarcontact');
    }

    
}
