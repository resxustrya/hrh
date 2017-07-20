<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkExperience extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('work_experience',function($table){
			$table->increments('id');
			$table->integer('userid');
			$table->string('inclusive_dates');
			$table->string('position');
			$table->string('company');
			$table->string('monthly_salary');
			$table->string('pay_grade');
			$table->string('status_appointment');
			$table->string('gov_service');
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
		Schema::drop('work_experience');
	}

}
