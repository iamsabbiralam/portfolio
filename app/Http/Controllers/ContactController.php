<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $data['title'] = 'Contacts';
        $data['contacts'] = Contact::orderByDESC('created_at')->paginate(10);

        return view('backoffice.contacts.index', $data);
    }

    public function show(Contact $contact)
    {
        $data['title'] = $contact->name;
        $data['contact'] = $contact;

        return view('backoffice.contacts.show', $data);
    }
}
