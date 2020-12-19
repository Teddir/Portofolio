<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ayah extends Model
{
    //
    protected $fillable = [
        'name_ayah', 'pendidikan_ayah', 'pekerjaan_ayah', 'penghasilan_ayah',
        'domisili_ayah'
    ];

    public function siswa()
    {
        return $this->hasMany(Siswa::class, 'id');
    }
}
