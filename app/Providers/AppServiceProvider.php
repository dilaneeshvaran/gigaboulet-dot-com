<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Post;
use App\Models\Category;
use PhpParser\Node\Stmt\Catch_;

class AppServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Récupérer les données globales pour la page d'accueil
        $blog = Post::where('category_id', '1') ->where('status', 1)->get();
        $collection = Post::where('category_id', 2) ->where('status', 1)->get();
        $musesExpositions = Post::where('category_id', '3') ->where('status', 1)->get();
        $muses = Post::where('category_id', '4') ->where('status', 1)->get();
        $expositions = Post::where('category_id', '5') ->where('status', 1)->get();
        $categories = Category::get();
        $posts=Post::get();
        $blogHome = Post::where('category_id', '1') ->where('status', 1)->limit(3)->get();
        // Partager ces données avec toutes les vues
        View::share([
            'blog' => $blog,
            'blogHome' => $blogHome,

            'collection' => $collection,
            'musesExpositions' => $musesExpositions,
            'muses' => $muses,
            'expositions' => $expositions,
            'categories' => $categories,
            'posts' => $posts
        ]);
    }

    public function register()
    {
        //
    }
}
