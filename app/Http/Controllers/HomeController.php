<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        // $uri = $_SERVER['REQUEST_URI'];
        return view("home"); 
    }
}