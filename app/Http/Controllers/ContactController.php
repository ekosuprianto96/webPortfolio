<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required'
        ]);
        if ($validate->fails()) {
            return redirect()->back()->with('message', 'Pesan Gagal Dikirim!');
        }
        Contact::create($request->all());

        return redirect()->back()->with('message', 'Pesan Berhasil Dikirim!');
    }
    public function view($id)
    {
        $contact = Contact::find($id);
        $contact->status = 1;
        $contact->save();
        return view('contact.view', [
            'contact' => $contact,
            'active' => 'Dashboard'
        ]);
    }
    public function delete($id)
    {
        $contact = Contact::find($id);
        $contact->delete();

        return redirect()->back();
    }
}
