<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortifolioController extends Controller
{
    public function index()
    {
        return view('portifolio');
    }
}
