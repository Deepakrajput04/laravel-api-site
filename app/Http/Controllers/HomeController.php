<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\models\slider;

use App\models\ourcoure;

use App\models\contact;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   $slider = slider::get();
        $ourcoures = ourcoure::get();
        return view('home', compact('slider','ourcoures'));
    }
    public function about()
    {
        return view('about');
    }
    public function coures()
    {
        return view('coures');
    }
    public function team()
    {
        return view('team');
    }
    public function contact()
    {
        return view('contact');
    }


    public function slider()
    {   $slider= slider::get();
        return view('slider',compact('slider'));
    }

    public function addslider(Request $_request)
    {   $title = $_request->title;
        $description = $_request->description;
        
       $slider = new slider;
        if($_request->has('image')) {
            $image = $_request->file('image');
            $filename = $image->getClientOriginalName();
            $image->move(public_path('/images'), $filename);
            $slider->image = $filename;
    }   
        $slider->title = $title;
        $slider->description = $description;

        $slider->save();
        return redirect()->back();
    }

    public function deleteslider($id)
    {
        $slider = slider::where('id',$id)->delete();
        return redirect()->back();
    }

    public function editslider($id)
    {
        $slider= slider::where('id',$id)->first();
        return view('editslider',compact('slider'));
    }

    public function updateslider(Request $_request ,$id)
    {
        $slider = slider::find($id);
        $slider->title = $_request->title;
        $slider->description = $_request->description;
        if($_request->has('image')) {
            $image = $_request->file('image');
            $filename = $image->getClientOriginalName();
            $image->move(public_path('/images'), $filename);
            $slider->image = $filename;
    }   
        $slider->save();

        return redirect()->route('slider');
    }

    public function ourcoures()
    {   $ourcoures= ourcoure::get();
        return view('ourcoures',compact('ourcoures'));
    }

    public function addourcoures(Request $_request)
    {   $price = $_request->price;
        $description = $_request->description;
        
       $ourcoures = new ourcoure;
        if($_request->has('image')) {
            $image = $_request->file('image');
            $filename = $image->getClientOriginalName();
            $image->move(public_path('/images'), $filename);
            $ourcoures->image = $filename;
    }   
        $ourcoures->price = $price;
        $ourcoures->description = $description;

        $ourcoures->save();
        return redirect()->back();
    }

    public function deleteourcoures($id)
    {
        $ourcoures = ourcoure::where('id',$id)->delete();
        return redirect()->back();
    }
    public function editourcoures($id)
    {
        $ourcoures= ourcoure::where('id',$id)->first();
        return view('editourcoures',compact('ourcoures'));
    }

    public function updateourcoures(Request $_request ,$id)
    {
        $ourcoures = ourcoure::find($id);
        $ourcoures->price = $_request->price;
        $ourcoures->description = $_request->description;
        if($_request->has('image')) {
            $image = $_request->file('image');
            $filename = $image->getClientOriginalName();
            $image->move(public_path('/images'), $filename);
            $ourcoures->image = $filename;
    }   
        $ourcoures->save();

        return redirect()->route('ourcoures');
    }


    public function addcontact(Request $request)
    {
        $name = $request->name;
        $email = $request->email;
        $subject = $request->subject;
        $message = $request->message;

        $contact = new contact;
        $contact->name= $name;
        $contact->email= $email;
        $contact->subject= $subject;
        $contact->message= $message;
        $contact->save();
        return redirect()->back();

    }
    public function contactus()
    {   $contact = contact::get();
        return view ('contactus',compact('contact'));
    }
    public function deletecontact($id)
    {   $contact = contact::where('id',$id)->delete();
        return redirect()->back();
    }





}
