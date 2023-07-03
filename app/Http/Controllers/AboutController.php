<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index (Request $request)
    {
    //   $URILink = $request->server("REQUEST_URI"); 
        $URILink = "kamba"; 
        return \View::make("about", $URILink);
    }
}