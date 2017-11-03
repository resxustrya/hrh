<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMunicipality extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create("municipality",function($table){
			$table->increments('id');
			$table->string('description')->nullable();
			$table->integer('province')->nullable();
			$table->integer('allocation')->nullable();
			$table->integer('number_of_hired')->nullable();
			$table->string('augmentation_allocation')->nullable();
			$table->string('augmentation_hired')->nullable();
			$table->string('status')->nullable();
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
		Schema::drop('municipality');
	}

}
