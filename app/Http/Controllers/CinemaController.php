<?php

namespace App\Http\Controllers;

use App\Cinema;
use Illuminate\Http\Request;

class CinemaController extends Controller
{ 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cinemas = Cinema::all();
        return view('cinemas.index', ['cinemas' => $cinemas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $cinemas = Cinema::lists('films_id');
        return view('cinemas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate($request, [
            'nama_bioskop'   => 'required',
            'alamat'         => 'required',
            'tlp'            => 'required',
            'films_id'       => 'required',
            'jadwal_tayang'  => 'required',
            'status_film'    => 'required',
            'studios_id'     => 'required',
            'harga_tiket'    => 'required',
        ]);

        Cinema::create([
            'nama_bioskop'   => $request->nama_bioskop,
            'alamat'         => $request->alamat,
            'tlp'            => $request->tlp,
            'films_id'       => $request->films_id,
            'jadwal_tayang'  => $request->jadwal_tayang,
            'status_film'    => $request->status_film,
            'studios_id'     => $request->studios_id,
            'harga_tiket'    => $request->harga_tiket
        ]);

        return redirect('/cinemas');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cinema  $cinema
     * @return \Illuminate\Http\Response
     */
    public function show(Cinema $cinema)
    {
        return view('cinemas.show', compact('cinema'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cinema  $cinema
     * @return \Illuminate\Http\Response
     */
    public function edit(Cinema $cinema)
    {
        $cinemas = Cinema::find($id);
        return view('cinemas.edit', ['cinemas' => $cinemas]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cinema  $cinema
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $request->validate($request, [
            'nama_bioskop'   => 'required',
            'alamat'         => 'required',
            'tlp'            => 'required',
            'films_id'       => 'required',
            'jadwal_tayang'  => 'required',
            'status_film'    => 'required',
            'studios_id'     => 'required',
            'harga_tiket'    => 'required',
        ]);

        $cinemas = Cinema::find($id);
        $cinemas->nama_bioskop   = $request->nama_bioskop;
        $cinemas->alamat         = $request->alamat;
        $cinemas->tlp            = $request->tlp;
        $cinemas->films_id       = $request->films_id;
        $cinemas->jadwal_tayang  = $request->jadwal_tayang;
        $cinemas->status_film    = $request->status_film;
        $cinemas->studios_id     = $request->studios_id;
        $cinemas->harga_tiket    = $request->harga_tiket;
        $cinemas->save();
        return redirect('/cinemas');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cinema  $cinema
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cinema $cinema)
    {
        $cinema->delete();
        return redirect('/cinemas');
    }
}
