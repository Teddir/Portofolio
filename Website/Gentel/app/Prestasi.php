<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prestasi extends Model
{
    //
    protected $fillable = [
        'name_lomba', 'keterangan'
    ];

    public function akademik()
    {
        return $this->belongsTo(Akademik::class, 'prestasi_id');
    }
}
