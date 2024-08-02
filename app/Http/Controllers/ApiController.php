<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\contact;


class ApiController extends Controller
{    
    // id se data check 

    // public function contactus($id)
    // {   
    //     return contact::find($id);
    // }

        public function contactus($id = null)
        {
            return $id?contact::find($id):contact::all();
        }

    public function addcontact(Request $_req)
    {
        $contact = new contact;
        $contact->name=$_req->name;
        $contact->email=$_req->email;
        $contact->subject=$_req->subject;
        $contact->message=$_req->message;
        $contact->save();
    }
    public function updatecontact(Request $_req)
    {
        $contact =contact::find($_req->id);
        $contact->name=$_req->name;
        $contact->email=$_req->email;
        $contact->subject=$_req->subject;
        $contact->message=$_req->message;
        $contact->save();
    }
    public function searchcontact($name)
    {
        return contact::where("name", $name)->get();
    }
    public function deletecontact($id) 
    {
        $contact = contact::find($id);
        $result = $contact->delete();
        if($result) 
        {
            return ["result"=>"record has been delete"];
        }
        else{
            return ["result"=>"delete operation is failed"];
        }
    }
}
