<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Download extends Model
{
    //
    protected $fillable = [
        'form_raport', 'form_kesehatan'
    ];

    public function pendaftaran()
    {
        return $this->belongsTo(Pendaftaran::class, 'download_id');
    }

}
