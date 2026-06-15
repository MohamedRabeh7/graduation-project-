<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;

class users extends Model
{
    protected $fillable = [
        'name','email',
    'password',
    ];
    
    
   
    public function news2()
    {
        return $this->hasMany(news2::class);
    }

      
                
                
    
    

    protected $hidden = [
        'password', 'remember_token',
    ];
 
}
