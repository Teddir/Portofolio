<?php

namespace App\Http\Controllers;

use App\Galerilo;
use App\Message;
use Illuminate\Http\Request;

class GaleriloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function tampilan()
    {
        //
        $galerilo = Galerilo::get();
        return view('tampilan.fasilitasLokasi.galeri', compact('galerilo'));
    }

    public function tampilan1()  //-------->hanya untuk email di web dll
    {
        //
        $galerilo = Galerilo::get();
        return view('tampilan.fasilitasLokasi.lokasi', compact('galerilo'));
    }

    public function index()
    {
        //
        $galerilo = Galerilo::get();
        if ($galerilo > null) {
            # code...
            return view('gurudash.fasilitasLokasi.galeri.galeri', compact('galerilo'));
        }
    }

    public function index1() //-------->hanya untuk email hal-guru dll
    {
        //
        $message = Message::get();
        return view('gurudash.fasilitasLokasi.message', compact('message'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $galerilo = Galerilo::get();
        return view('gurudash.fasilitasLokasi.galeri.create', compact('galerilo'));
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
            'image' => 'mimes:jpeg,png,jpg,gif,svg'
        ]);

        $imgName = $request->image->getClientOriginalName() . '-' . time() . '.' . $request->image->extension();
        $request->image->move(public_path('gambar/imageuser'), $imgName);

        Galerilo::create([
            'image' => $imgName,
        ]);

        return redirect('/guru/galeri')->with(['status', 'Berhasil Ditambah']);
    }

    public function store1(Request $request)  //-------->hanya untuk email dll
    {
        //
        $request->validate([

        ]);

        Message::create([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ]);

        return redirect('/lokasi')->with(['status', 'Berhasil Mengirim Pesan']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Galerilo  $galerilo
     * @return \Illuminate\Http\Response
     */
    public function show(Galerilo $galerilo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Galerilo  $galerilo
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Galerilo  $galerilo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Galerilo  $galerilo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $galerilo = Galerilo::destroy($id);
        return redirect('/guru/galeri')->with(['status', 'Berhasil Dihapus']);
    }
}
