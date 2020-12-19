<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ibu extends Model
{
    //
    protected $fillable = [
        'name_ibu', 'pendidikan_ibu', 'pekerjaan_ibu', 'penghasilan_ibu',
        'domisili_ibu'
    ];

    public function siswa()
    {
        return $this->hasMany(Siswa::class, 'id');
    }
}
