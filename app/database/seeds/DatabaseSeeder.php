<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();
		$this->call('UsersTableSeeder');
		$this->call('DesignationTableSeeder');
		$this->call('MunicipalityTableSeeder');
		$this->call('ProvinceTableSeeder');
		$this->call('ChildrenTableSeeder');
		$this->call('ServiceEligibilityTableSeeder');
		$this->call('WorkExperienceTableSeeder');
	}

}
