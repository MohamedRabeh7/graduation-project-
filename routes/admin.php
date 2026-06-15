<?php
Route::group([ 'prefix' => 'admin', 'namespace' => 'admin'],function () {

	
		Config::set('auth.defines', 'admin');
	
	
		Route::get('login', 'adminauth@login')->name('login');
		Route::post('login', 'adminauth@dologin')->name('login');
		Route::get('forgot/password', 'adminauth@forgot_password')->name('forgot/password');
		Route::post('forgot/password', 'adminauth@forgot_password_post')->name('forgot/password');
		Route::get('reset/password/{token}', 'adminauth@reset_password')->name('reset/password');
		Route::post('reset/password/{token}', 'adminauth@reset_password_final')->name('reset/password');        
        Route::get('register', 'adminauth@showRegister')->name('register');
		Route::post('registeration','adminauth@adminregister')->name('register');
		Route::get('verfiy/email/{token}','adminauth@verify')->name('verfiyemail');
				Route::get('/account','adminauth@chickup')->name('account');



    	Route::group(['middleware' => 'admin:admin'],function(){
		Route::get('novels','adminauth@novals')->name('novels');
		Route::post('images','adminauth@images')->name('images');
		Route::get('books','adminauth@books')->name('books');
    
        Route::get('sendemail','adminauth@sendemail');


		Route::pattern('id','[0-9]+');
		Route::delete('all_news/{id?}','adminauth@delete');
      
		Route::post('all_news','adminauth@all_news_post');
		Route::get('all_news','adminauth@all_news_send');
		//Route::get('/verfiyemail{token}','adminauth@verify');


	

				
					
					

			    Route::any('logout','adminauth@logout');
								
				});	
				Route::get('/', function() {
					return view('admin.home');
				});	
}); 


	Auth::routes(['verfiy'=>true]);