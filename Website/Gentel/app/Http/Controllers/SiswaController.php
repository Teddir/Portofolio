<?php

namespace App\Http\Controllers;

use App\Siswa;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function __construct1()
    {
        $this->middleware('auth:siswa');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $siswa = Siswa::get();
        return view('siswadash.profil');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $siswa = Siswa::get();
        return view('auth.sisregister');
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
            'name_panggilan' => 'required|string|max:10',
            'name_lengkap' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:siswas',
            'password' => 'required|string|min:6|confirmed',
            'sekolah_asal' => 'required|string|max:20',
            'domisili' => 'required|string',
            'phone_number' => 'required|numeric:unique:siswas',
            'tgl_lahir' => 'required',
        ]);


        $imgName = $request->image->getClientOriginalName() . '-' . time() . '.' . $request->image->extension();
        $request->image->move(public_path('gambar/imageuser'), $imgName);

        $imgakte = $request->akte_keluarga->getClientOriginalName() . '-' . time() . '.' . $request->akte_keluarga->extension();
        $request->akte_keluarga->move(public_path('gambar/imageuser'), $imgakte);

        $imgkk = $request->kartu_keluarga->getClientOriginalName() . '-' . time() . '.' . $request->kartu_keluarga->extension();
        $request->kartu_keluarga->move(public_path('gambar/imageuser'), $imgkk);


        Siswa::create([
            'name_panggilan' => $request->name_panggilan,
            'name_lengkap' => $request->name_lengkap,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'sekolah_asal' => $request->sekolah_asal,
            'domisili' => $request->domisili,
            'phone_number' => $request->phone_number,
            'tgl_lahir' => $request->tgl_lahir,
            'image' => $imgName,
            'akte_keluarga' => $imgakte,
            'kartu_keluarga' => $imgkk,
        ]);

        return redirect('/')->with(['success' => 'Berhasil Mendaftar']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function show(Siswa $siswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function edit(Siswa $siswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Siswa $siswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Siswa $siswa)
    {
        //
    }
}
