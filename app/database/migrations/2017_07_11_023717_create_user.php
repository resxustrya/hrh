<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUser extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function ($table) {
			$table->increments('id');
			$table->string('designation')->nullable();
			$table->string('lname')->nullable();
			$table->string('fname')->nullable();
			$table->string('mname')->nullable();
			$table->string('n_extensions')->nullable();
			$table->string('province')->nullable();
			$table->string('municipality')->nullable();
			$table->string('date_of_birth')->nullable();
			$table->string('place_of_birth')->nullable();
			$table->integer('age')->nullable();
			$table->string('gender')->nullable();
			$table->string('civil_status')->nullable();
			$table->string('residential_address')->nullable();
			$table->string('permanent_address')->nullable();
			$table->string('telephone')->nullable();
			$table->string('cellphone')->nullable();
			$table->string('email')->nullable();
			$table->string('citizenship')->nullable();
			$table->string('philhealth')->nullable();
			$table->string('tin')->nullable();
			$table->string('gsis')->nullable();
			$table->string('prc_license')->nullable();
			$table->string('date_of_entrance_to_duty')->nullable();
			$table->integer('status_of_employment')->nullable();
			$table->string('username')->nullable();
			$table->string('password')->nullable();
			$table->boolean('usertype')->default(0);
			$table->index('id');
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
		Schema::drop('users');
	}

}
