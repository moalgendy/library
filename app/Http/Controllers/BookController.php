<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Wisdom;
use App\Models\category;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Xml\Project;

class BookController extends Controller
{
    // show page add books
    public function books()
    {
        $category = category::all();
        return view('dashboard.book.books' , compact('category'));
    }

    // store book
    public function add_book(Request $request)
    {
        $book = new Book();
        $book->title=$request->title;
        $book->content=$request->content;
        $book->desc=$request->desc;
        $book->category_id=$request->category_id;

        $image=$request->image;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('books',$imagename);
        $book->image=$imagename;

        $pdf=$request->pdf;
        $pdfname = time().'.'.$pdf->getClientOriginalExtension();
        $request->pdf->move('pdfs',$pdfname);
        $book->pdf=$pdfname;
        
        $book->save();

        return redirect()->back()->with('message','تمت إضافة الكتاب بنجاح');
    }

    // show all books
    public function all_books()
    {
        // $projects = Book::all();
        // $category_id = Book::get('category_id');
        $categories = Category::with(['books'])->get();

        return view('dashboard.book.all_books' , compact('categories'));
    }

    //delete book
    public function book_destroy($id)
    {
        Book::destroy($id);

        return redirect()->back()->with('message','تمت حذف الكتاب بنجاح');
    }

    // edit book
    public function book_edit($id)
    {
        $book = Book::findorFail($id);

        return view('dashboard.book.edit_book',compact('book'));

        // return $id;
    }

    //update book
    public function book_update(Request $request, $id)
    {
        $book=Book::findOrFail($id);
    
        $book->title=$request->title;
        $book->content=$request->content;
        $book->desc=$request->desc;

        $image=$request->image;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('books',$imagename);
        $book->image=$imagename;

        $book->save();

        return redirect()->route('all_books')->with('message','تم تعديل الكتاب بنجاح');
    }

    // search for products
    public function search_product(Request $request)
    {
        
        $searchText = $request->search;
        // $books = Book::where('title','LIKE',"%$searchText%")->orWhere('category','LIKE',"%$searchText%")->paginate(9);
        $books = Book::where('title','LIKE',"%$searchText%")->get();
        $wisdom = Wisdom::orderByRaw('RAND()')->take(1)->get();

        $categories = category::all();
        
        return view('website.category_book',compact('books','wisdom','categories'));
    }

    // download pdf
    public function download_pdf($id)
    {
        $book = Book::findorFail($id);
        
        $path = public_path('pdfs/' . $book->pdf);

        return response()->download($path);
    }
    
}
