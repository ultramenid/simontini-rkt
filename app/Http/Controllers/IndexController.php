<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $title = 'StranasPK';
        $navbar = 'home';
        return view('frontends.index', compact('title', 'navbar'));
    }
}
