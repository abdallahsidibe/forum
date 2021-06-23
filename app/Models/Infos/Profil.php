<?php

namespace App\Models\Infos;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    use HasFactory;
    protected $guarded = [];

     //un profil appartient à un user
     public function user()
     {
         return $this->belongsTo('App\User');
     }  

}
