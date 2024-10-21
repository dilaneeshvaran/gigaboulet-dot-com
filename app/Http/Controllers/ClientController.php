<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    //
    public function acceuil(){return view('client.home'); }
    public function blog(){return view('client.blog'); }
    public function about(){return view('client.about'); }
    public function contact(){return view('client.contact'); }

}
