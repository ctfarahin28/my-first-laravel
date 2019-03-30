<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RinController extends Controller // create my own controller
{
    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
}
