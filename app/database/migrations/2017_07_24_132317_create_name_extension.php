<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNameExtension extends Migration {

	public function up()
	{
		Schema::create('name_extension',function($table){
			$table->increments('id');
			$table->string('suffix')->nullable();
			$table->string('description')->nullable();
			$table->rememberToken();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('name_extension');
	}

}
