<?php

namespace App\Http\Controllers;

use App\Harian;
use Illuminate\Http\Request;

class HarianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tampilan()
    {
        //
        $harian = Harian::get();
        return view('tampilan.informasi.kegiatan.harian', compact('harian'));
    }
    
    public function index()
    {
        //
        $harian = Harian::get();
        return view('gurudash.informasi.kegiatan.harian.harian', compact('harian'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $harian = Harian::get();
        return view('gurudash.informasi.kegiatan.harian.create', compact('harian'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([

        ]);

        Harian::create([
            'name_kegiatan_harian' => $request->kegiatan_harian,
            'waktu' => $request->waktu,
        ]);

        return redirect('/guru/harian')->with(['status', 'Berhasil Ditambah']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Harian  $harian
     * @return \Illuminate\Http\Response
     */
    public function show(Harian $harian)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Harian  $harian
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $harian = Harian::find($id);

        return view('gurudash.informasi.kegiatan.harian.update', compact('harian'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Harian  $harian
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([

        ]);

        $harian = Harian::find($id);
        $harian->name_kegiatan_harian = $request->name_kegiatan_harian;
        $harian->waktu = $request->waktu;
        $harian->save();
            // dd($harian);
        return redirect('/guru/harian')->with(['status', 'Berhasil Di Update']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Harian  $harian
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $harian = Harian::destroy($id);
        return redirect('/guru/harian')->with(['status', 'Berhasil Dihapus']);
    }
}
