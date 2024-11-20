<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon; // Importation nécessaire pour utiliser Carbon
use Illuminate\Support\Facades\URL; // Importation nécessaire pour utiliser URL

class ClientController extends Controller
{
    //
    public function acceuil(){return view('client.home'); }
    public function histoire(){return view('client.histoire'); }
    public function types(){return view('client.types'); }
    public function contact(){return view('client.contact'); }
    public function collections(){return view('client.collections'); }
    public function actualites(){return view('client.actualites'); }

    public function sitemap()
    {
        $urls = [
            ['loc' => URL::to('/'), 'lastmod' => Carbon::now()->toAtomString()],
            ['loc' => URL::to('/histoire'), 'lastmod' => Carbon::now()->toAtomString()],
            ['loc' => URL::to('/types'), 'lastmod' => Carbon::now()->toAtomString()],
            ['loc' => URL::to('/contact'), 'lastmod' => Carbon::now()->toAtomString()],
        ];

        return response()->view('sitemap', ['urls' => $urls])->header('Content-Type', 'application/xml');
    }

}
