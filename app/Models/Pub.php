<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pub extends Model
{
    use HasFactory;
    /**Pour éviter le massasegment */
 protected $guarded = [];

 //Une appartient à un user
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
