<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\URL; // Importation nécessaire pour utiliser URL
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon; // Importation nécessaire pour utiliser Carbon
use Illuminate\Support\Facades\Auth;
use App\Models\Galerie;


class ClientController extends Controller
{
    //
    public function checkout(){
        if (Auth::check())return view ('client.checkout');
        return redirect('/login');
    }
    public function signin(){
        return view('client.signin');
    }
    public function register(){
        return view('client.register');
    }
    public function home(){

        return view('client.home');
    }
    public function galerie(){
        $galeries=Galerie::get();
        return view('client.galerie')->with("galeries",$galeries);
    }
    
    public function contact(){
        return view('client.contact');
    }
    public function saison(){
        return view('client.saison');
    }
    public function dubai(){
        return view('client.dubai');
    }
    public function dubaiSoon(){
        return view('soon.dubai');
    }
    public function zanzibar(){
        return view('client.zanzibar');
    }
    public function zanzibarSoon(){
        return view('soon.zanzibar');
    }
    public function portugal(){
        return view('client.portugal');
    }
    public function portugalSoon(){
        return view('soon.portugal');
    }
    public function ski(){
        return view('client.ski');
    }
    public function skiSoon(){
        return view('soon.ski');
    }
    public function sitemap()
    {
        $urls = [
            ['loc' => URL::to('/'), 'lastmod' => Carbon::now()->toAtomString()],
            ['loc' => URL::to('/galerie'), 'lastmod' => Carbon::now()->toAtomString()],
            ['loc' => URL::to('/contact'), 'lastmod' => Carbon::now()->toAtomString()],
            ['loc' => URL::to('/dubailSoon'), 'lastmod' => Carbon::now()->toAtomString()],
            ['loc' => URL::to('/zanzibarSoon'), 'lastmod' => Carbon::now()->toAtomString()],
            ['loc' => URL::to('/portugalSoon'), 'lastmod' => Carbon::now()->toAtomString()],
            ['loc' => URL::to('/ski'), 'lastmod' => Carbon::now()->toAtomString()],
            ['loc' => URL::to('/dubail'), 'lastmod' => Carbon::now()->toAtomString()],
            ['loc' => URL::to('/zanzibar'), 'lastmod' => Carbon::now()->toAtomString()],
            ['loc' => URL::to('/portugal'), 'lastmod' => Carbon::now()->toAtomString()],
        ];

        return response()->view('sitemap', ['urls' => $urls])->header('Content-Type', 'application/xml');
    }

}
