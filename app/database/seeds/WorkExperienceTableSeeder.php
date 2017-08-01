<?php

class WorkExperienceTableSeeder extends seeder{
    public function run(){
        $faker = Faker\Factory::create();

        foreach(range(1,50) as $index){
            $work = new WorkExperience();
            $work->userid = $index;
            $work->inclusive_dates = '10/21/2016 - 07/19/2017';
            $work->position = $faker->jobTitle;
            $work->company = 'Department of Health - Region 7';
            $work->monthly_salary = '19,100';
            $work->pay_grade = 'SD-17';
            $work->status_appointment = 'JOB ORDER';
            $work->gov_service = 'YES';
            $work->save();
        }

    }
}