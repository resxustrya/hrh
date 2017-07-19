<?php

class WorkExperienceTableSeeder extends seeder{
    public function run(){
        $work = new WorkExperience();
        $work->userid = 1;
        $work->inclusive_dates = '10/21/2016 - 07/19/2017';
        $work->position = 'Computer Programmer 1';
        $work->company = 'Department of Health - Region 7';
        $work->monthly_salary = '19,100';
        $work->pay_grade = 'SD-17';
        $work->status_appointment = 'JOB ORDER';
        $work->gov_service = 'YES';
        $work->save();
    }
}