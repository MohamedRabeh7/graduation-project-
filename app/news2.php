<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Admin;
use App\Commant1;


class news2 extends Model
{


//protected $date = ['deleted_at'];
protected $fillable = [
   'title','desc', 'content','status','user_id'
];

public function user_id(){

    
        return $this->hasOne('App\Admin', 'id', 'user_id');
    
      

}


public function comment(){

    
    return $this->hasMany('App\Commant1', 'news_id', 'id');



}



}
