<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use  App\Admin;
class news extends Model
{

use SoftDeletes;
    protected $table ='news';
    protected $date = ['deleted_at'];
    protected $fillable = [
        'content',
    ];
   
    
   
    public function user()
    {
        return $this->belongsTo(Admin::class);
    }

      
                
                
    
}

