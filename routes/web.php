<?php

use App\Models\Book;
use App\Models\Wisdom;
use App\Models\category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\WisdomController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CategoryController;
use Illuminate\Contracts\Database\Eloquent\Builder;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



// home
Route::get('/', function (Request $request) {

    $wisdom = Wisdom::orderByRaw('RAND()')->take(1)->get();    // get random data

    $categories = category::with(['books'  => function (Builder $query) {
        $query->take(5);
    }])->get();
    

    return view('website.index' , compact('wisdom','categories'));
})->name('home');


// search
Route::get('search_product',[BookController::class,'search_product']);


// download pdf
Route::get('download/pdf/{id}',[BookController::class,'download_pdf']);


// show books in her category
Route::get('/category/book/{id}',[CategoryController::class,'category_book'])->name('category.book');



// books
Route::post('add_book',[BookController::class,'add_book']);
Route::get('/dashboard/books',[BookController::class,'books']);
Route::get('dashboard/all_books',[BookController::class,'all_books'])->name('all_books');
Route::get('dashboard/book/destroy/{id}', [BookController::class,'book_destroy'])->name('book.destroy');
Route::get('dashboard/book/edit/{id}', [BookController::class,'book_edit'])->name('book.edit');
Route::patch('dashboard/book/update/{id}', [BookController::class,'book_update'])->name('book.update');


// categories
Route::post('add_category',[CategoryController::class,'add_category']);
Route::get('/dashboard/categories',[CategoryController::class,'categories']);
Route::get('dashboard/all_categories',[CategoryController::class,'all_categories'])->name('all_categories');
Route::get('dashboard/category/destroy/{id}', [CategoryController::class,'category_destroy'])->name('category.destroy');
Route::get('dashboard/category/edit/{id}', [CategoryController::class,'category_edit'])->name('category.edit');
Route::patch('dashboard/category/update/{id}', [CategoryController::class,'category_update'])->name('category.update');



// wisdoms
Route::post('add_wisdom',[WisdomController::class,'add_wisdom']);
Route::get('/dashboard/wisdoms',[WisdomController::class,'wisdoms']);
Route::get('dashboard/all_wisdoms',[WisdomController::class,'all_wisdoms'])->name('all_wisdoms');
Route::get('dashboard/wisdom/destroy/{id}', [WisdomController::class,'wisdom_destroy'])->name('wisdom.destroy');



// contact
Route::get('contact',[ContactController::class,'index_contact']);
Route::post('contact/add_contact',[ContactController::class,'add_contact'])->name('add_contact');
Route::get('dashboard/all_contacts',[ContactController::class,'all_contacts'])->name('all_contacts');
Route::get('dashboard/contact/destroy/{id}', [ContactController::class,'contact_destroy'])->name('contact.destroy');




Route::middleware([
    'auth:sanctum','checklogin',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {


    Route::get('/dash', function () {
        return view('dashboard.starter');
    });

});
