<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Informasi extends Model
{
    //
    protected $fillable = [
        'program_tahfidz', 'sumbangan'
    ];

    public function pengasuhan()
    {
        return $this->hasMany(Pengasuhan::class, 'id');
    }

    public function ekstrakuli()
    {
        return $this->hasMany(Ekstrakuli::class, 'id');
    }

    public function harian()
    {
        return $this->hasMany(Harian::class, 'id');
    }

}
