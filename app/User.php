<?php

namespace App;

use App\Models\Conversation;
//use App\Conversation;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 
        'lastname', 
        'email',
        'password',
        'phone',
        'image'

    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function topics()
    {
        return $this->hasMany('App\Topic');
    }
    
    //On veut recuperer notre user via le champ name
    public function getRouteKeyName()
    {
        return 'name';
    }
    
    //Un user detient un profil
    public function profile()
    {
        return $this->hasOne('App\Profile');
    }

      //Un user detient un profil
      public function profil()
      {
          return $this->hasOne('App\Models\Infos\Profil');
      }
       //Un user detient une experience
       public function experience()
       {
           return $this->hasOne('App\Models\Infos\Experience');
       }
       public function referent()
       {
           return $this->hasOne('App\Models\Referent');
       }

       public function pubs()
       {
           return $this->hasMany('App\Models\Pub');
       }

    public function conversations()
    {
        /**L'utilisateur a des conversations qui sont soient dans là où
         * son id se trouve dans la colonne to soit où son id se trouve
         * dans la colonne from
        */
        return Conversation::where(function ($q) {
            $q->where('to', $this->id)
                ->orWhere('from', $this->id);
        });
    }

    public function getConversationsAttribute()
    {
        return $this->conversations()->get();
    }
}
