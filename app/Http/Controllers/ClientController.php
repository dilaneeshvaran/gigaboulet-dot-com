<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\URL;
use App\Models\Post;

class ClientController extends Controller
{

    
    public function blog() {
        $post=Post::get();
        return view('client.blog')->with('post',$post);
    }

    public function acceuil() {
        return view('client.home');
    }

    public function histoire() {
        return view('client.histoire');
    }

    public function types() {
        return view('client.types');
    }
    public function musees() {
        return view('client.histoire');
    }

    public function collections() {
        return view('client.collections');
    }

    public function apropos() {
        return view('client.apropos');
    }

    public function contact() {
        return view('client.contact');
    }


    public function articleType() {
        $type = [
            (object)[
                'name' => 'Boulet Rond Standard',
                'image_url' => asset('frontend/assets/boulet-rond.jpg'),
                'description' => 'Le boulet rond standard est le classique par excellence.',
                'innovation' => 'Premier type de boulet standardisé en 1750',
                'advantage' => 'Excellente précision balistique',
                'usage' => 'Artillerie navale et terrestre',
                'author' => 'Jean-Pierre Boulet',
                'created_at' => Carbon::create(2024, 1, 15)
            ]
        ];

        return view('client.articleType', compact('type'));
    }

    public function articleHistoire() {
        $histoire = [
            (object)[
                'title' => 'La Révolution Française',
                'image_url' => asset('frontend/assets/revolution-francaise.jpg'),
                'summary' => 'Un moment clé qui a bouleversé l’histoire politique et sociale de la France.',
                'period' => '1789 - 1799',
                'main_event' => 'Prise de la Bastille',
                'impact' => 'Mise en place des idées de liberté, égalité, et fraternité.',
                'details' => 'La Révolution française a été un tournant décisif dans l’histoire de l’Europe, abolissant la monarchie absolue et établissant les bases de la démocratie moderne.',
                'author' => 'Historien Anonyme',
                'published_at' => Carbon::create(2024, 5, 1),
                'article_body' => 'La Révolution française débute en 1789 avec des troubles politiques et sociaux. Elle culmine avec la fin de la monarchie et la proclamation de la Première République en 1792.',
                'additional_details' => 'Les répercussions de cette révolution se sont fait sentir dans toute l’Europe, inspirant d’autres mouvements pour la démocratie et les droits de l’homme.'
            ]
        ];

        return view('client.post', compact('histoire'));
    }

    public function sitemap() {
        $urls = [
            ['loc' => URL::to('/'), 'lastmod' => Carbon::now()->toAtomString()],
            ['loc' => URL::to('/histoire'), 'lastmod' => Carbon::now()->toAtomString()],
            ['loc' => URL::to('/types'), 'lastmod' => Carbon::now()->toAtomString()],
            ['loc' => URL::to('/contact'), 'lastmod' => Carbon::now()->toAtomString()],
            ['loc' => URL::to('/blog'), 'lastmod' => Carbon::now()->toAtomString()],
            ['loc' => URL::to('/collections'), 'lastmod' => Carbon::now()->toAtomString()],
            ['loc' => URL::to('/musees'), 'lastmod' => Carbon::now()->toAtomString()],
            ['loc' => URL::to('/apropos'), 'lastmod' => Carbon::now()->toAtomString()],

        ];

        return response()->view('sitemap', ['urls' => $urls])->header('Content-Type', 'application/xml');
    }
}
