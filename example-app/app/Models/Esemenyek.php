<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Esemenyek extends Model
{
    use HasFactory;
    public $table = 'esemenyek';

    public function szekciok (){
        return $this->hasMany(Szekciok::class);
        
    }
}
