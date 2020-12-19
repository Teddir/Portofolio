<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Harian extends Model
{
    //
    protected $fillable = [
        'name_kegiatan_harian', 'waktu',
    ];

    public function informasi()
    {
        return $this->belongsTo(Informasi::class, 'harian_id');
    }
}
