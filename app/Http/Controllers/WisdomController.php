<?php

namespace App\Http\Controllers;

use App\Models\Wisdom;
use Illuminate\Http\Request;

class WisdomController extends Controller
{
    // show page add wisdoms
    public function wisdoms()
    {

        return view('dashboard.wisdom.wisdoms');
        
    }


    // show all wisdoms
    public function all_wisdoms()
    {
        $wisdoms = Wisdom::all();

        return view('dashboard.wisdom.all_wisdoms',compact('wisdoms'));
    }


    // add wisdom
    public function add_wisdom(Request $request)
    {
        $wisdom = new Wisdom();
        $wisdom->title = $request->title;
        $wisdom->say = $request->say;
        $wisdom->save();

        return redirect()->back()->with('message','تمت الإضافة بنجاح');
    }


    // delete wisdom
    public function wisdom_destroy($id)
    {
        Wisdom::destroy($id);

        return redirect()->back()->with('message','تمت الحذف بنجاح');
    }
}
