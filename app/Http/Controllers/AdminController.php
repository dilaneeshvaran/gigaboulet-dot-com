<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Galerie;
use App\Models\Image;
use App\Models\Order;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function home () {
        return view('admin.home');
    }
        public function addcategory () {
        return view('admin.addcategory');
    }
    public function categories () {
        $categories=Category::get();

        return view('admin.categories')->with("categories",$categories);
    }
    
    public function addgalerie () {
        return view('admin.addgalerie');
    }
    public function galeries () {
        $galeries=Galerie::get();
        return view('admin.galerie')->with("galeries",$galeries);
    }
    public function addimage () {
        $categories=Category::get();

        return view('admin.addimage')->with('categories',$categories);
    }
    public function images () {
        $images=Image::get();

        return view('admin.images')->with('images',$images);
    }
    public function editimage () {
        $images=Image::get();

        return view('admin.editimage')->with('images',$images);
    }

}
