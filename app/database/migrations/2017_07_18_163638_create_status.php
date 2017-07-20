<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStatus extends Migration {

	public function up()
	{
		Schema::create('employee_status',function($table){
			$table->increments('id');
			$table->string('description');
			$table->rememberToken();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop("employee_status");
	}

}
