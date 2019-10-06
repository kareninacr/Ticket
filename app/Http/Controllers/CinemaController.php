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
        $cinemas = Cinema::latest()->paginate(10);

        return view('cinemas.index', compact('cinemas'))
            -with('i', (request()->input('page', 1) -1) * 10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
        $request->validate([
            'nama_bioskop'   => 'required',
            'alamat'         => 'required',
            'tlp'            => 'required',
            'films_id'       => 'required',
            'jadwal_tayang'  => 'required',
            'status_film'    => 'required',
            'studios_id'     => 'required',
            'harga_tiket'    => 'required',
        ]);

        Cinema::create($request()->all());

        return redirect()->route('cinemas.index')
            ->with('success', 'Bioskop berhasil ditambahkan!');
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
        return view('cinemas.edit', compact('cinema'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cinema  $cinema
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cinema $cinema)
    {
        $request->validate([
            'nama_bioskop'   => 'required',
            'alamat'         => 'required',
            'tlp'            => 'required',
            'films_id'       => 'required',
            'jadwal_tayang'  => 'required',
            'status_film'    => 'required',
            'studios_id'     => 'required',
            'harga_tiket'    => 'required',
        ]);

        $cinema->update($request()->all());

        return redirect()->route('cinemas.index')
            ->with('success', 'Bioskop berhasil diubah!');
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

        return redirect()->route('cinemas.index')
            ->with('success', 'Bioskop berhasil dihapus!');
    }
}
