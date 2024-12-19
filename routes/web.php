<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostPageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// client Contoller page

Route::get('/', [ClientController::class, 'acceuil']);
Route::get('/histoire', [ClientController::class, 'histoire']);
Route::get('/types', [ClientController::class, 'types']);
Route::get('/articleType',[ClientController::class, 'articleType']);
Route::get('/articleHistoire',[ClientController::class, 'articleHistoire']);
Route::get('/apropos',[ClientController::class, 'apropos']);
Route::get('/contact',[ClientController::class, 'contact']);
Route::get('/sitemap.xml', [ClientController::class, 'sitemap']);


Route::get('/blog', [ClientController::class,'blog']);
Route::get('/blog/{post:slug}', PostPageController::class)->name('post.show');  // Route pour afficher un article spécifique

Route::get('/collections', [ClientController::class,'collections']);
Route::get('/collections/{post:slug}', PostPageController::class)->name('collections.show');  // Route pour afficher un article spécifique

Route::get('/musees', [ClientController::class,'musees']);
Route::get('/musees/{post:slug}', PostPageController::class)->name('musees.show'); 


Route::post('/contacts', [ContactController::class, 'store']);
Route::post('/email', [ContactController::class, 'storeEmail']);
// Route::post ('/send-mail',[MailController::class,'mailData'])->name('send_mail');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// Admin Part
Route::prefix('admin')->middleware('auth', 'isAdmin')->group(function(){
    Route::get('/dashboard', [AdminController::class, 'home']);
    Route::get('/addcategory', [AdminController::class,'addcategory']);
    Route::get('/dashboard1', [AdminController::class,'dashboard1']);

    Route::get('/categories', [AdminController::class,'categories']);
    Route::get('/addpost', [AdminController::class,'addpost']);
    Route::get('/posts', [AdminController::class,'posts']);
    Route::get('/addimage', [AdminController::class,'addimage']);
    Route::get('/images', [AdminController::class,'images']);
    Route::get('/posts', [AdminController::class,'posts']);
});
// category Controller 

Route::post('admin/savecategory', [CategoryController::class,'savecategory']);
Route::delete('admin/deletecategory/{id}', [CategoryController::class,'deletecategory']);
Route::get('admin/editcategory/{id}', [CategoryController::class,'editcategory']);
Route::put('admin/updatecategory/{id}', [CategoryController::class,'updatecategory']);

// slider Controller 

Route::post('admin/savepost', [PostController::class,'savepost']);
Route::delete('admin/deletepost/{id}', [PostController::class,'deletepost']);
Route::get('admin/editpost/{id}', [PostController::class,'editpost']);
Route::put('admin/updatepost/{id}', [PostController::class,'updatepost']);
Route::put('admin/unactivatepost/{id}', [PostController::class,'unactivatepost']);

Route::put('admin/activatepost/{id}', [PostController::class,'activatepost']);

// image Controller
Route::post('/admin/saveimage', [ImageController::class,'saveimage']);
Route::delete('admin/deleteptoduct/{id}', [ImageController::class,'deleteptoduct']);
Route::get('admin/editimage/{id}', [ImageController::class,'editimage']);
Route::put('admin/updateimage/{id}', [ImageController::class,'updateimage']);
Route::put('admin/unactivateimage/{id}', [ImageController::class,'unactivateimage']);
Route::put('admin/activateimage/{id}', [ImageController::class,'activateimage']);