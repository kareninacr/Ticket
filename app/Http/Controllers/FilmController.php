<?php

namespace App\Http\Controllers;

use App\Film;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $films = Film::latest();
        return view('film.index', compact('films'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('films.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul'     => 'required', 
            'cover'     => 'required',
            'durasi'    => 'required',
            'rating'    => 'required',
            'sinopsi'   => 'required',
            'trailer'   => 'required', 
        ]);

        Film->create($request->all());
        return redirect()->route('films.index')->with('success', "Film berhasil ditambahkan!");    

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Film  $film
     * @return \Illuminate\Http\Response
     */
    public function show(Film $film)
    {
        return view('films.show', compact('film'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Film  $film
     * @return \Illuminate\Http\Response
     */
    public function edit(Film $film)
    {
        return view('films.edit', compact('film'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Film  $film
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Film $film)
    {
        $request->validate([
            'judul'     => 'required', 
            'cover'     => 'required',
            'durasi'    => 'required',
            'rating'    => 'required',
            'sinopsi'   => 'required',
            'trailer'   => 'required', 
        ]);

        Film->update($request->all());
        return redirect()->route('films.index')->with('success', "Film berhasil diubah!"); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Film  $film
     * @return \Illuminate\Http\Response
     */
    public function destroy(Film $film)
    {
        Film->delete();
        return redirect()->route('films.index')->with('success', "Film berhasil dihapus!"); 
    }
}
