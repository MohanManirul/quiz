<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contacts(){
        $contacts = Contact::all();
        return response()->json([
            'contact' => $contacts,
            'message' => 'Contacts',
            'code'    => 200
        ]);
    }
}
