<?php

namespace App\Http\Controllers;

use App\Prestasi;
use Illuminate\Http\Request;

class PrestasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function tampilan()
    {
        //
        $prestasi = Prestasi::get();
        return view('tampilan.akademik.prestasi', compact('prestasi'));
    }

    public function index()
    {
        //
        $prestasi = Prestasi::get();
        return view('gurudash.akademik.prestasi.prestasi', compact('prestasi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $prestasi = Prestasi::get();
        return view('gurudash.akademik.prestasi.create', compact('prestasi'));
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
            'name_lomba' => 'required|string',
            'keterangan' => 'required'
        ]);

        Prestasi::create([
            'name_lomba' => $request->name_lomba,
            'keterangan' => $request->keterangan
        ]);

        return redirect('/guru/prestasi')->with(['status', 'Data Berhasil Ditambah']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Prestasi  $prestasi
     * @return \Illuminate\Http\Response
     */
    public function show(Prestasi $prestasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Prestasi  $prestasi
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $prestasi = Prestasi::find($id);
        return view('gurudash.akademik.prestasi.update', compact('prestasi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Prestasi  $prestasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'name_lomba' => 'required|string',
            'keterangan' => 'required'
        ]);

        $prestasi = Prestasi::find($id);
        $dataRequest = $request->all();
        $dataResult = array_filter($dataRequest);
        $prestasi->update($dataResult);

        return redirect('/guru/prestasi')->with(['status', 'Data Berhasil Ditambah']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Prestasi  $prestasi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $prestasi = Prestasi::destroy($id);

        return redirect('/guru/prestasi')->with(['status', 'Data Berhasil Dihapus']);
    }
}
