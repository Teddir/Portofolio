<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    //
    protected $fillable = [
        'kegiatan', 'biaya', 'waktu',
    ];

    public function siswa()
    {
        return $this->hasMany(Siswa::class, 'id');
    }
}
