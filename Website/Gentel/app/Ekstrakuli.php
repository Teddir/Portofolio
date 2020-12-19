<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ekstrakuli extends Model
{
    //
    protected $fillable = [
        'name_ekstrakuli', 'name_studyClub'
    ];

    public function informasi()
    {
        return $this->belongsTo(Informasi::class, 'ekstrakuli_id');
    }
}
