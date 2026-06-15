<?php  

Blade::if('dooney',function(){
    return auth()->user()? true:false;
  

});

/*
Blade::directive('comment',function($dooney){


   
    if($dooney==2027){

        return 'mohamed rabeh';
    }else {
        # code...
        return '<a href="#"> this is  </a> the end '.$dooney ;
    }
  

    return view('layouts.comment');
});

  */