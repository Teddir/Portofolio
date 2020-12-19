<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wali extends Model
{
    //
    protected $fillable = ['name_wali', 'pekerjaan_wali', 'penghasilan_wali',
            'domisili_wali'
    ];

    public function siswa()
    {
        return $this->belongsTo(Siswa::class, 'id');
    }
}
