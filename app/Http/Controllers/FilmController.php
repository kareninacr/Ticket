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
        $films = Film::latest()->paginate(10);

        return view('films.index', compact('films'))
             ->with('i', (request()->input('page', 1) -1) * 10);
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
            'cover'     => 'required|image|mimes:jpeg, png, jpg|max:2048',
            'durasi'    => 'required',
            'rating'    => 'required',
            'sinopsis'  => 'required',
            'trailer'   => 'required', 
        ]);

        $coverName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images'), $coverName);

        Film::create($request->all());

        return redirect()->route('films.index')
            ->with('success', "Film berhasil ditambahkan!");    

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
            'sinopsis'  => 'required',
            'trailer'   => 'required', 
        ]);

        $film->update($request->all());
        return redirect()->route('films.index')
            ->with('success', "Film berhasil diubah!"); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Film  $film
     * @return \Illuminate\Http\Response
     */
    public function destroy(Film $film)
    {
        $film->delete();
        return redirect()->route('films.index')
            ->with('success', "Film berhasil dihapus!"); 
    }
}
