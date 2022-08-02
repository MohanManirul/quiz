<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    // showing all contact
    public function contacts(){
        $contacts = Contact::all();
        return response()->json([
            'contacts' => $contacts,
            'message' => 'Contacts',
            'code'    => 200
        ]);
    }

    //saveContact function start
    public function saveContact(Request $request){
        $contact = new contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->designation = $request->designation;
        $contact->contact_no = $request->contact_no;
        $contact->save();
        return response()->json([
            'messeage' => 'Contact Created Successfully',
            'code' => 200
        ]);

    }
    //saveContact function ends

    //deleteContact function start
    public function deleteContact($id){
        $contact = Contact::find($id);
        if($contact){
            $contact->delete();
            return response()->json([
                'message' => 'Contact deleted successfully',
                'code' => 200
            ]);
        }else{
            return response()->json([
                'message' => 'Contact with id: $id does not exists'
            ]);
        }
    }
    //deleteContact function ends

    //getContact by id function start
    public function getContact($id){
        $contact = Contact::find($id);
        if($contact){
          return response()->json($contact);  
        }else{
            return response()->json([
                'message' => 'Contact by this id dose not exist'
            ]);  
        }
        
    }
    //getContact by id function ends

    //updateContact function start
    public function updateContact(Request $request , $id){
        $contact = Contact::where('id' , $id)->first();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->designation = $request->designation;
        $contact->contact_no = $request->contact_no;
        $contact->save();
        return response()->json([
            'messeage' => 'Contact Updated Successfully',
            'code' => 200
        ]);
    }
    //updateContact function ends

}
