<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServiceEligibility extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('service_eligibility',function($table){
			$table->increments('id');
			$table->integer('userid');
			$table->string('career_service');
			$table->string('rating');
			$table->string('date_of_examination');
			$table->string('place_of_examination');
			$table->string('license_number');
			$table->string('date_of_validity');
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
		Schema::drop('service_eligibility');
	}

}
