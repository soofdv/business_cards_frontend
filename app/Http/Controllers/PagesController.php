<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        //data uit een database halen
        //data meegeven aan de view
        //view returnen
        return view('home');

    }

    public function about(){
        return view('about');
    }

    public function contact(){
        return view('contact');
    }
}
