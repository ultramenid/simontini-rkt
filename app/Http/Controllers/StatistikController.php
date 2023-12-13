<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StatistikController extends Controller
{
    public function index(){
        $title = 'Statistik - StranasPK';
        $nav = 'dinamika';
        $navbar = 'statistik';
        return view('frontends.statistik', compact('title', 'nav', 'navbar'));
    }
    public function tataBatas(){
        $title = 'Statistik - Stranas PK';
        $nav = 'tatabatas';
        $navbar = 'statistik';
        return view('frontends.tatabatas', compact('title', 'nav', 'navbar'));
    }
    public function penetapan(){
        $title = 'Statistik - Stranas PK';
        $navbar = 'statistik';
        $nav = 'penetapan';
        return view('frontends.penetapan', compact('title', 'nav', 'navbar'));
    }
}
