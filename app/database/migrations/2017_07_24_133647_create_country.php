<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCountry extends Migration {


	public function up()
	{
		Schema::create('country',function($table){
			$table->increments('id');
			$table->string('description')->nullable();
			$table->string('capital_city')->nullable();
			$table->rememberToken();
			$table->timestamps();
		});
	}


	public function down()
	{
		Schema::drop('country');
	}

}
