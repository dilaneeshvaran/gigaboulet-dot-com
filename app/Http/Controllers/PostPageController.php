<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

use function Pest\Laravel\get;

class PostPageController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, Post $post)
    {
        $posts=Post::get();
        return view('post', compact('post'));
    }
}
