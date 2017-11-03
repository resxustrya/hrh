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
		//$this->call('HrhTypeTableSeeder');
		//$this->call('MunicipalityTableSeeder');
		//$this->call('ProvinceTableSeeder');
		//$this->call('ChildrenTableSeeder');
		//$this->call('ServiceEligibilityTableSeeder');
		//$this->call('WorkExperienceTableSeeder');
		//$this->call('StatusTableSeeder');
		//$this->call('NameExtensionTableSeeder');
		//$this->call('CountryTableSeeder');
		//$this->call('EducationalBackgroundTableSeeder');
		//$this->call('EducationTypeTableSeeder');
	}

}
