<?php

namespace App;
use users;
use Illuminate\Database\Eloquent\Model;

class posts extends Model
{
    protected $fillable = [
        'content',
    ];
   
    
   
    public function user()
    {
        return $this->belongTo(users::class);
    }

}
