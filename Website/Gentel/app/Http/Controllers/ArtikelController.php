<?php

namespace App\Http\Controllers;

use App\Artikel;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function guru()
    {
        $user = User::get();
        return view('gurudash.akademik.guru.guru', compact('user'));
    }

    public function tampilan()
    {
        $user = User::get();
        return view('tampilan.akademik.guru', compact('user'));
    }


    public function register()
    {
        $user = User::get();
        return view('auth.register', compact('user'));
    }

    protected function create1(Request $request)
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'tmt' => $request->tmt,
            'jabatan' => $request->jabatan,
            'keterangan' => $request->keterangan
        ]);

        return redirect('/guru/profile')->with(['status', 'Berhasil Ditambah']);
    }





    public function index()
    {
        $artikel = Artikel::get();
        return view('gurudash.home.artikel.artikel', compact('artikel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        {
            $artikel = Artikel::get();
            return view('gurudash.home.artikel.create', compact('artikel'));
        }
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
            'name_artikel' => 'required|string',
            'image' => 'mimes:jpeg,png,jpg,gif,svg'
        ]);

        $imgName = $request->image->getClientOriginalName() . '-' . time() . '.' . $request->image->extension();
        $request->image->move(public_path('gambar/imageuser'), $imgName);

            Artikel::create([
            'name_artikel' => $request->name_artikel,
            'keterangan' => $request->keterangan,
            'image' => $imgName,
            ]);

        return redirect('/guru/artikel')->with(['succes' => 'Berhasil Menambah Artikel']);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function show(Artikel $artikel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $artikel = Artikel::find($id);
        return view('gurudash.home.artikel.update', compact('artikel'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'name_artikel' => 'required|string',
            'image' => 'mimes:jpeg,png,jpg,gif,svg'
        ]);


            $artikel = Artikel::find($id);
            $datarequest = $request->except(['image']);
            $dataresult = array_filter($datarequest);

            $imgName = $request->old_image;
            if ($request->image) {
                $imgName = $request->image->getClientOriginalName() . '-' . time() . '.' . $request->image->extension();

                $request->image->move(public_path('gambar/imageuser'), $imgName);
            }
            $artikel->image = $imgName;
            $artikel->update($dataresult);

        return redirect('/guru/artikel')->with(['succes' => 'Berhasil Menambah Artikel']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $artikel = Artikel::destroy($id);
        return redirect('/guru/artikel')->with(['succes' => 'Berhasil Menghapus Artikel']);
    }
}
