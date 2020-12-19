<?php

namespace App;
use Illuminate\Foundation\Auth\User as Authenticable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Authenticable
{
    use Notifiable;

    protected $guard = 'admin';
    //
    protected $fillable = [
        'name_panggilan', 'name_lengkap', 'email', 'password', 
        'sekolah_asal', 'domisili', 'image', 'akte_keluarga', 'kartu_keluarga',
        'phone_number', 'tgl_lahir', 'kode'
    ];

    public function pendaftaran()
    {
        return $this->belongsTo(Pendaftaran::class, 'siswa_id');
    }

    public function ayah()
    {
        return $this->hasMany(Ayah::class, 'siswa_id');
    }

    public function ibu()
    {
        return $this->hasMany(Ibu::class, 'siswa_id');
    }

    public function wali()
    {
        return $this->hasMany(Wali::class, 'siswa_id');
    }

}
