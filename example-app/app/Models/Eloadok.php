<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eloadok extends Model
{
    use HasFactory;
    public $table = 'eloadok';
    public function eloado_szekciok (){

        return $this->belongsToMany(Szekciok::class);
    }
}
