<?php

namespace App\Http\Controllers;

use App\Artikel;
use App\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function detailB($id)
    {
        $berita  = Berita::find($id);
        return view('tampilan.index_detailB', compact('berita'));
    }

    public function detailA($id)
    {
        $artikel = Artikel::find($id);
        return view('tampilan.index_detailA', compact('artikel'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $berita  = Berita::get();
        return view('gurudash.home.berita.berita', compact('berita'));
    }

    public function index1()
    {
        $berita  = Berita::get();
        $artikel = Artikel::get();
        return view('tampilan.index', compact('berita', 'artikel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $berita  = Berita::get();
        return view('gurudash.home.berita.create', compact('berita'));
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
            'name_berita' => 'required|string',
            'image' => 'mimes:jpeg,png,jpg,gif,svg'
        ]);

        $imgName = $request->image->getClientOriginalName() . '-' . time() . '.' . $request->image->extension();
        $request->image->move(public_path('gambar/imageuser'), $imgName);

            Berita::create([
            'name_berita' => $request->name_berita,
            'keterangan' => $request->keterangan,
            'image' => $imgName,
            ]);

        return redirect('/guru/berita')->with(['succes' => 'Berhasil Menambah berita']);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function show(Berita $berita)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $berita = Berita::find($id);
        return view('gurudash.home.berita.update', compact('berita'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'name_berita' => 'required|string',
            'image' => 'mimes:jpeg,png,jpg,gif,svg'
        ]);


            $berita = berita::find($id);
            $datarequest = $request->except(['image']);
            $dataresult = array_filter($datarequest);

            $imgName = $request->old_image;
            if ($request->image) {
                $imgName = $request->image->getClientOriginalName() . '-' . time() . '.' . $request->image->extension();

                $request->image->move(public_path('gambar/imageuser'), $imgName);
            }
            $berita->image = $imgName;
            $berita->update($dataresult);

        return redirect('/guru/berita')->with(['succes' => 'Berhasil Menambah berita']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $berita = Berita::destroy($id);
        return redirect('/guru/berita')->with(['succes' => 'Berhasil Menghapus Berita']);

    }
}
