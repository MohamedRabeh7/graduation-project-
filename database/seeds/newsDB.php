<?php

use Illuminate\Database\Seeder;
use App\news;

class newsDB extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   

        for($i=0; $i<10; $i++){


            $add=new news;
            $add->title=' News_Title'.rand(0,9);
            $add->discreption=' News_discreption'.rand(0,9);
            $add->status=' active';
            $add->add_by=1;
            $add->content=' News_content'.rand(0,9);
            $add->save();
          
        }
    }
}
