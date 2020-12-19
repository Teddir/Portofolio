<?php

namespace App\Http\Controllers;

use App\Akademik;
use Illuminate\Http\Request;

class AkademikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index1()
    {
        //
        $akademik = Akademik::get();
        return view('tampilan.akademik.kalender', compact('akademik'));
    }

    public function index()
    {
        //
        $akademik = Akademik::get();
        return view('gurudash.akademik.kalender.kalender', compact('akademik'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $akademik = Akademik::get();
        return view('gurudash.akademik.kalender.create', compact('akademik'));
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
            'kalender_pendidikan' => 'mimes:jpeg,png,jpg,gif,svg'
        ]);

        $imgName = $request->kalender_pendidikan->getClientOriginalName() . '-' . time() . '.' . $request->kalender_pendidikan->extension();
        $request->kalender_pendidikan->move(public_path('gambar/imageuser'), $imgName);

            Akademik::create([
            'kalender_pendidikan' => $imgName,
            ]);

        return redirect('/guru/kalender')->with(['status', 'Berhasil Menambah']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Akademik  $akademik
     * @return \Illuminate\Http\Response
     */
    public function show(Akademik $akademik)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Akademik  $akademik
     * @return \Illuminate\Http\Response
     */
    public function edit(Akademik $akademik)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Akademik  $akademik
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Akademik $akademik)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Akademik  $akademik
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $akademik = Akademik::destroy($id);

        return redirect('/guru/kalender')->with(['status', 'Berhasil Dihapus']);
    }
}
