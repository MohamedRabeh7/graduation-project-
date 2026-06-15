<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Notifications\VerfyEmail;

use App\news;


class Admin extends Authenticatable 
{
    //
	use Notifiable;
	protected $table ='admins';

 
	protected $fillable = [
		'first_name', 'last_name', 'date_of_birth','age','gender','mobile','email','password','verifyToken'
		];
	
   
    protected $casts = [
        'email_verified_at' => 'datetime',
        'date_of_birth' => 'date',
    ];

	public function posts()
    {
        return $this->hasMany(news::class);
    }


	/**
	 * The attributes that should be hidden for arrays.  
	 *
	 * @var array
	 */
	protected $hidden = [
		'password', 'remember_token',
	];



	public function verfied(){
		return $this->verifyToken === null;
	}

	public function sendverficationEmail(){
		$this->notify(new VerfyEmail($this));

	}
}

