<?php

namespace App\Http\Controllers;

use App\Models\Post;

class HomePageController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke()
    {

         
            // Eager load the required relationships with selected columns
            $posts=Post::get();
            
            // Return the view with the post data
            return view('home')->with("posts",$posts);

    }
}
