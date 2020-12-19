<?php

namespace App\Http\Controllers;

use App\Pengasuhan;
use Illuminate\Http\Request;

class PengasuhanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tampilan()
    {
        //
        $syarat = Pengasuhan::get();
        return view('tampilan.informasi.pengasuhan.syaratnaik', compact('syarat'));
    }
    public function tampilan1()
    {
        $tatib = Pengasuhan::get();
        return view('tampilan.informasi.pengasuhan.tatatertibmu', compact('tatib'));
    }


    public function index()
    {
        //
        $syarat = Pengasuhan::get();
        return view('gurudash.informasi.pengasuhan.syaratnaik.syaratnaik', compact('syarat'));
    }
    public function index1()
    {
        $tatib = Pengasuhan::get();
        return view('gurudash.informasi.pengasuhan.tatatertibmu.tatatertibmu', compact('tatib'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $syarat = Pengasuhan::get();
        return view('gurudash.informasi.pengasuhan.syaratnaik.create', compact('syarat'));
    }

    public function create1()
    {
        //
        $tatib = Pengasuhan::get();
        return view('gurudash.informasi.pengasuhan.tatatertibmu.create', compact('tatib'));
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
        $tatib = $request->tatib->getClientOriginalName() . '-' . time() . '.' . $request->tatib->extension();
        $request->tatib->move(public_path('gambar/imageuser'), $tatib);

        $syarat = $request->syarat->getClientOriginalName() . '-' . time() . '.' . $request->syarat->extension();
        $request->syarat->move(public_path('gambar/imageuser'), $syarat);

        Pengasuhan::create([
            'tatib' => $tatib,
            'syarat' => $syarat,
        ]);

        return redirect('/guru/tatib')->with(['status', 'Succes']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pengasuhan  $pengasuhan
     * @return \Illuminate\Http\Response
     */
    public function show(Pengasuhan $pengasuhan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pengasuhan  $pengasuhan
     * @return \Illuminate\Http\Response
     */
    public function edit(Pengasuhan $pengasuhan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pengasuhan  $pengasuhan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pengasuhan $pengasuhan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pengasuhan  $pengasuhan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $pengasuh = Pengasuhan::destroy($id);
        return redirect('/guru/tatib')->with(['status', 'Berhasil Dihapush']);
    }
}
