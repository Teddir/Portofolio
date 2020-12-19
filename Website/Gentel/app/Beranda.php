<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Beranda extends Model
{
    //
    protected $fillable = [
        'name', 'email', 'phone_number',
    ];

    public function artikel()
    {
        return $this->hasMany(Artikel::class, 'id');
    }

    public function berita()
    {
        return $this->hasMany(Berita::class, 'id');
    }

}
