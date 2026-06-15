<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {

           $table->bigincrements('id');
           $table->string('first_name');
           $table->string('last_name');
           $table->date('date_of_birth');
           $table->integer('age');
           $table->enum('gender', ['male', 'female']);
           $table->string('mobile')->unique();
           $table->string('email')->unique();
           $table->string('password');
           $table->string('verifyToken')->nullable();
           $table->boolean('status')->default(false);
   

           $table->rememberToken();
           $table->timestamps();
           

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admins');
    }
}

