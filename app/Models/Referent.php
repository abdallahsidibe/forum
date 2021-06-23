<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Referent extends Model
{
    use HasFactory;
    protected $guarded = [];

     //un profil appartient à un user
     public function user()
     {
         return $this->belongsTo('App\User');
     }  
}
