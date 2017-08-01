<?php

class ServiceEligibilityTableSeeder extends seeder{
    public function run(){
        foreach(range(1,50) as $index){
            $service = new ServiceEligibility();
            $service->userid = $index;
            $service->career_service = "OJT in Department of Health - Region 7";
            $service->rating = "Good";
            $service->date_of_examination = "10/18/2016";
            $service->place_of_examination = "Osmeña Boulevard, Cebu City";
            $service->license_number = "12145231";
            $service->date_of_validity = "10/20/2016";
            $service->save();
        }
    }
}