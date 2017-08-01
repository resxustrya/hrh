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
			//PERSONAL INFORMATION
			$table->integer('hrh_type')->nullable();
			$table->string('photo')->nullable();
			$table->string('lname')->nullable();
			$table->string('fname')->nullable();
			$table->string('mname')->nullable();
			$table->string('name_extension')->nullable();
			$table->string('date_of_birth')->nullable();
			$table->string('place_of_birth')->nullable();
			$table->string('sex')->nullable();
			$table->string('civil_status')->nullable();
			$table->string('philhealth_no')->nullable();
			$table->string('tin_no')->nullable();
			$table->string('gsis_beneficiaries1')->nullable();
			$table->string('gsis_beneficiaries2')->nullable();
			$table->string('prc_license')->nullable();
			$table->string('citizenship')->nullable();
			$table->string('other_country')->nullable();
			$table->string('residential_address')->nullable();
			$table->string('permanent_address')->nullable();
			$table->string('zip_code')->nullable();
			$table->string('telephone_no')->nullable();
			$table->string('mobile_no')->nullable();
			$table->string('email_address')->nullable();
			$table->integer('province')->nullable();
			$table->integer('municipality')->nullable();
			$table->string('date_of_entrance_to_duty')->nullable();
			$table->integer('status_of_employment')->nullable();
			$table->string('username')->nullable();
			$table->string('password')->nullable();
			$table->boolean('usertype')->default(0);
			//FAMILY BACKGROUND
			$table->string('spouse_lname')->nullable();
			$table->string('spouse_fname')->nullable();
			$table->string('spouse_mname')->nullable();
			$table->string('spouse_nextension')->nullable();
			$table->string('spouse_occupation')->nullable();
			$table->string('spouse_business_name')->nullable();
			$table->string('spouse_telephone_no')->nullable();
			//NAME OF PARENT
			$table->string('father_lname')->nullable();
			$table->string('father_fname')->nullable();
			$table->string('father_mname')->nullable();
			$table->string('father_nextension')->nullable();
			$table->string('mother_lname')->nullable();
			$table->string('mother_fname')->nullable();
			$table->string('mother_mname')->nullable();

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
