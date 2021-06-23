<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
     
    //un profil appartient à un user
    public function user()
    {
        return $this->belongsTo('App\User');
    }  
}
