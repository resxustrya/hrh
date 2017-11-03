<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProvince extends Migration {

	public function up()
	{
		Schema::create("province",function($table){
			$table->increments('id');
			$table->string('description')->nullable();
			$table->integer('hrh_type')->nullable();
			$table->integer('allocation')->nullable();
			$table->integer('number_of_hired')->nullable();
			$table->string('augmentation_allocation')->nullable();
			$table->string('augmentation_hired')->nullable();
			$table->string('status')->nullable();
			$table->rememberToken();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('province');
	}

}
