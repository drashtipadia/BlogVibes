<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserContact;

class UserContactController extends Controller
{
    //
    public function store(Request $request)
    {
        $this->validate($request, ['contactemail' => 'required|email', 'contactmessage' => 'required']);
        // echo $request['contactemail'];
        // echo $request['contactmessage'];
        $contact = new UserContact();
        $contact->contact_email = $request['contactemail'];
        $contact->contact_message = $request['contactmessage'];
        $contact->save();
        return redirect()->back();

    }
    public function view()
    {
        $contacts = UserContact::all();
        $data = compact('contacts');
        return view('Admin.contactUser')->with($data);
    }

    public function delete($id)
    {
        // echo $id;
        $contact = UserContact::find($id)->delete();
        return redirect()->back();
    }
}