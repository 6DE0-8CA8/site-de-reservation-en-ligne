<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class Acceuilcontroller extends Controller
{
    public function index()
    {
        return view('front.acceuil');
    }


}
