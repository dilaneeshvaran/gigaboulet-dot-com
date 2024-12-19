<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Image;
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
    
 
    public function addpost () {
        $categories=Category::get();

        return view('admin.addpost')->with('categories',$categories);
    }
    public function posts () {
        $posts=Post::get();
        return view('admin.posts')->with("posts",$posts);
    }


    public function editimage () {
        $images=Image::get();

        return view('admin.editimage')->with('images',$images);
    }

}
