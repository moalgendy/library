<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Wisdom;
use App\Models\category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    // show page add categories
    public function categories()
    {

        return view('dashboard.category.categories');

    }
    
    // show all categories
    public function all_categories()
    {
        $categories = category::all();

        return view('dashboard.category.all_categories',compact('categories'));
    }


    public function add_category(Request $request)
    {
        $categories = new category();
        $categories->name = $request->name;
        $categories->save();

        return redirect()->back()->with('message','تمت إضافة قسم بنجاح');
    }

    // show in home
    public function category_book($id)
    {
        // $category = category::findorFail($id);

        $wisdom = Wisdom::orderByRaw('RAND()')->take(1)->get(); // get random data

        $categories = category::all();

        $books = Book::where('category_id',$id)->get();
        
        return view('website.category_book',compact('books','wisdom','categories'));
    }

    //delete category
    public function category_destroy($id)
    {
        category::destroy($id);

        return redirect()->back()->with('message','تمت الحذف بنجاح');
    }

    // edit category
    public function category_edit($id)
    {
        $category = category::findorFail($id);

        return view('dashboard.category.edit_category',compact('category'));

        // return $id;
    }

    // update category
    public function category_update(Request $request, $id)
    {
        $category = category::findOrFail($id);
    
        $category->name=$request->name;

        $category->save();

        return redirect()->route('all_categories')->with('message','تم التعديل بنجاح');
    }

}
