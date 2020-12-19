<?php

namespace App\Http\Controllers;

use App\Ekstrakuli;
use Illuminate\Http\Request;

class EkstrakuliController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tampilan()
    {
        //
        $ekstrakuli = Ekstrakuli::get();
        return view('tampilan.informasi.kegiatan.ekstrakuli', compact('ekstrakuli'));
    }

    public function index()
    {
        //
        $ekstrakuli = Ekstrakuli::get();
        return view('gurudash.informasi.kegiatan.ekstrakuli.ekstrakuli', compact('ekstrakuli'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $ekstrakuli = Ekstrakuli::get();
        return view('gurudash.informasi.kegiatan.ekstrakuli.create', compact('ekstrakuli'));
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

        Ekstrakuli::create([
            'name_ekstrakuli' => $request->name_ekstrakuli,
            'name_studyClub' => $request->name_studyClub
        ]);

        return redirect('/guru/ekstrakuli')->with(['status', 'Berhasil Ditambah']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ekstrakuli  $ekstrakuli
     * @return \Illuminate\Http\Response
     */
    public function show(Ekstrakuli $ekstrakuli)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ekstrakuli  $ekstrakuli
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $ekstrakuli = Ekstrakuli::find($id);
        return view('gurudash.informasi.kegiatan.ekstrakuli.update',compact('ekstrakuli'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ekstrakuli  $ekstrakuli
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([

        ]);

        $ekstrakuli = Ekstrakuli::find($id);
        $dataRequest = $request->all();
        $dataResult = array_filter($dataRequest);
        $ekstrakuli->save($dataResult);

        return redirect('/guru/ekstrakuli')->with(['status', 'Berhasil Diubah']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ekstrakuli  $ekstrakuli
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $ekstrakuli = Ekstrakuli::destroy($id);
        return redirect('/guru/ekstrakuli')->with(['status', 'Berhasil DIhapus']);
    }
}
