<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    //
    protected $fillable = [
        'name_artikel', 'image', 'keterangan',
    ];

    public function beranda()
    {
        return $this->belongsTo(Beranda::class, 'artikel_id');
    }

}
