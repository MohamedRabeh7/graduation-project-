<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Admin;
use App\news2;

class Commant1 extends Model
{
    protected $fillable = [
        'comment','user_id','news_id',
    ];


    public function user_com (){
        return $this->belongsTo('App\Admin', 'user_id', 'id');
    }
   
    public function news_com (){
        return $this->belongsTo('App\news2', 'id', 'news2_id');
    }
}
