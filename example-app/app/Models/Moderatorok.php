<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Moderatorok extends Model
{
    use HasFactory;
    public $table = 'moderatorok';
    
    public function users (){
        return $this->hasMany(User::class);
        
    }
}
