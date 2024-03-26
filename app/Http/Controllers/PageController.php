<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function characters(){
        return view('page.characters');
    }
    public function comics() {
        $comics = config('comics');
        return view('page.comics', compact('comics'));
    }

    public function comicDetail() {
        $comics = config('comics');
        return view('page.comic-detail', compact('comic'));
    }

    public function movies(){
        return view('page.movies');
    }
    public function tv(){
        return view('page.tv');
    }
    public function games(){
        return view('page.games');
    }
    public function collectibles(){
        return view('page.collectibles');
    }
    public function videos(){
        return view('page.videos');
    }
    public function fans(){
        return view('page.fans');
    }
    public function news(){
        return view('page.news');
    }
    public function shop(){
        return view('page.shop');
    }
}
