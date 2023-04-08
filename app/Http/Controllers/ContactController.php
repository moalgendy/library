<?php

namespace App\Http\Controllers;

use App\Models\Wisdom;
use App\Models\Contact;
use App\Models\category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
    public function index_contact()
    {
        $wisdom = Wisdom::orderByRaw('RAND()')->take(1)->get();


        $categories = category::with(['books'])->get();
    
        return view('website.contact',compact('wisdom','categories'));
    }

    // store contact
    public function add_contact(Request $request)
    {
        $reserv = new Contact();
        if (Auth::user()) {
            $reserv->name = Auth::user()->name;
            $reserv->email = Auth::user()->email;
            $reserv->phone = $request->phone;
            $reserv->title = $request->title;
            
        }else {
            $reserv->name = $request->name;
            $reserv->email = $request->email;
            $reserv->phone = $request->phone;
            $reserv->title = $request->title;
            
        }
        
        $reserv->save();

        // Toastr::success('تم حجز الكورس بنجاح ','Success');

        return redirect()->back()->with('message','تم الارسال بنجاح');
    }

    // show all contacts
    public function all_contacts()
    {
        $contacts = Contact::all();

        return view('dashboard.all_contacts',compact('contacts'));
    }


    // delete contact
    public function contact_destroy($id)
    {
        Contact::destroy($id);

        return redirect()->back()->with('message','تمت الحذف بنجاح');
    }
}
