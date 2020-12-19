<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Akademik extends Model
{
    //
    protected $fillable = [
        'kalender_pendidikan'
    ];

    public function guru()
    {
        return $this->hasMany(User::class, 'id');
    }

    public function prestasi()
    {
        return $this->hasMany(Prestasi::class, 'id');
    }

}
