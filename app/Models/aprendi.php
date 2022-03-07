<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class aprendi extends Model
{
    use HasFactory;

    public function ficha(){
        return $this->belongsTo(ficha::class, 'id_ficha');
    }

}
