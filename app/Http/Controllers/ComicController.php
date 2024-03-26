<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     *
     */
    public function index()
    {
        $comics = Comic::all();
        return view("page.comics", compact("comics"));
    }
 

    /**
     * Show the form for creating a new resource.
     *
     * 
     */
    public function create()
    {
        return view('page.comics-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * 
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $comic = new Comic();
        $comic->fill($data);
        $comic->save();

        return view("page.comics-detail", compact("comic"));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     *
     */
    public function show($comicId)
    {
        $comic = Comic::find($comicId);
        return view("page.comics-detail", compact("comic"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * 
     */
    public function edit(Comic $comic)
    {
        return view('page.comics-edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comic  $comic
     * 
     */
    public function update(Request $request, Comic $comic)
    {
       //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comic  $comic
     * 
     */
    public function destroy(Comic $comic)
    {
       //
    }
}
