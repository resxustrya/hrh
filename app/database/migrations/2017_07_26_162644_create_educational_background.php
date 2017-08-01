<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEducationalBackground extends Migration {

	public function up()
	{
		Schema::create('educational_background',function($table){
			$table->increments('id');
			$table->integer('userid')->nullable();
			$table->string('name_of_school')->nullable();
			$table->string('degree')->nullable();
			$table->string('period_from')->nullable();
			$table->string('period_to')->nullable();
			$table->string('units_earned')->nullable();
			$table->string('year_graduated')->nullable();
			$table->string('scholarship')->nullable();
			$table->string('education_type')->nullable();
			$table->rememberToken();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('educational_background');
	}

}
