<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengasuhan extends Model
{
    //
    protected $fillable = [
        'tatib', 'syarat'
    ];

    public function informasi()
    {
        return $this->belongsTo(Informasi::class, 'pengasuhan_id');
    }

}
