<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    //
    protected $fillable = [
        'name_berita', 'image', 'keterangan',
    ];

    public function beranda()
    {
        return $this->belongsTo(Beranda::class, 'berita_id');
    }
}
