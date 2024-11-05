<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\GalerieController;
use App\Http\Controllers\CategoryController;

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
Route::get('/sitemap.xml', [ClientController::class, 'sitemap']);

Route::get('/', [ClientController::class,'home']);
Route::get('/galerie', [ClientController::class,'galerie']);
Route::get('/contact', [ClientController::class,'contact']);

Route::get('/dubaiSoon', [ClientController::class,'dubaiSoon']);
Route::get('/zanzibarSoon', [ClientController::class,'zanzibarSoon']);
Route::get('/portugalSoon', [ClientController::class,'portugalSoon']);
Route::get('/skiSoon', [ClientController::class,'skiSoon']);

Route::get('/ski', [ClientController::class,'ski']);
Route::get('/dubai', [ClientController::class,'dubai']);
Route::get('/zanzibar', [ClientController::class,'zanzibar']);
Route::get('/portugal', [ClientController::class,'portugal']);


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
    Route::get('/addgalerie', [AdminController::class,'addgalerie']);
    Route::get('/galeries', [AdminController::class,'galeries']);
    Route::get('/addimage', [AdminController::class,'addimage']);
    Route::get('/images', [AdminController::class,'images']);
    Route::get('/orders', [AdminController::class,'orders']);
});
// category Controller 

Route::post('admin/savecategory', [CategoryController::class,'savecategory']);
Route::delete('admin/deletecategory/{id}', [CategoryController::class,'deletecategory']);
Route::get('admin/editcategory/{id}', [CategoryController::class,'editcategory']);
Route::put('admin/updatecategory/{id}', [CategoryController::class,'updatecategory']);

// slider Controller 

Route::post('admin/savegalerie', [GalerieController::class,'savegalerie']);
Route::delete('admin/deletegalerie/{id}', [GalerieController::class,'deletegalerie']);
Route::get('admin/editgalerie/{id}', [GalerieController::class,'editgalerie']);
Route::put('admin/updategalerie/{id}', [GalerieController::class,'updategalerie']);
Route::put('admin/unactivategalerie/{id}', [GalerieController::class,'unactivategalerie']);

Route::put('admin/activategalerie/{id}', [GalerieController::class,'activategalerie']);

// image Controller
Route::post('/admin/saveimage', [ImageController::class,'saveimage']);
Route::delete('admin/deleteptoduct/{id}', [ImageController::class,'deleteptoduct']);
Route::get('admin/editimage/{id}', [ImageController::class,'editimage']);
Route::put('admin/updateimage/{id}', [ImageController::class,'updateimage']);
Route::put('admin/unactivateimage/{id}', [ImageController::class,'unactivateimage']);
Route::put('admin/activateimage/{id}', [ImageController::class,'activateimage']);