<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHrhType extends Migration {


	public function up()
	{
		Schema::create("hrh_type",function($table){
			$table->increments('id');
			$table->string('suffix')->nullable();
			$table->string('description')->nullable();
			$table->string('status')->nullable();
			$table->rememberToken();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('hrh_type');
	}

}
