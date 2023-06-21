<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AudioController extends Controller
{
    public function about(){
        return view('about');
    }
    public function equipe(){
        return view('equipe');
    }


}
