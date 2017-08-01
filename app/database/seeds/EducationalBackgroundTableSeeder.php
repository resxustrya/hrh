<?php

class EducationalBackgroundTableSeeder extends seeder{
    public function run(){
        foreach(range(1,50) as $index) {
            $eb = new EducationalBackground();
            $eb->userid = $index;
            $eb->name_of_school = 'Punta Princesa Elementary School';
            $eb->degree = 'Elementary';
            $eb->period_from = "2002";
            $eb->period_to = "2008";
            $eb->units_earned = "75";
            $eb->year_graduated = "2008";
            $eb->scholarship = "Elementary Scholarship";
            $eb->education_type = "elementary";
            $eb->save();

            $eb = new EducationalBackground();
            $eb->userid = $index;
            $eb->name_of_school = 'Abellana National School';
            $eb->degree = 'secondary';
            $eb->period_from = "2008";
            $eb->period_to = "2012";
            $eb->units_earned = "75";
            $eb->year_graduated = "2012";
            $eb->scholarship = "Secondary Scholarship";
            $eb->education_type = "secondary";
            $eb->save();

            $eb = new EducationalBackground();
            $eb->userid = $index;
            $eb->name_of_school = 'N/A';
            $eb->degree = 'N/A';
            $eb->period_from = "N/A";
            $eb->period_to = "N/A";
            $eb->units_earned = "N/A";
            $eb->year_graduated = "N/A";
            $eb->scholarship = "N/A";
            $eb->education_type = "vocation";
            $eb->save();

            $eb = new EducationalBackground();
            $eb->userid = $index;
            $eb->name_of_school = 'University of Cebu - Main Campus';
            $eb->degree = 'Bachelor of Science in Information of Technology';
            $eb->period_from = "2012";
            $eb->period_to = "2016";
            $eb->units_earned = "1500";
            $eb->year_graduated = "2016";
            $eb->scholarship = "Cebu City Scholarship";
            $eb->education_type = "college";
            $eb->save();

            $eb = new EducationalBackground();
            $eb->userid = $index;
            $eb->name_of_school = 'University of Cebu - Main Campus';
            $eb->degree = 'Bachelor of Science in Information of Technology';
            $eb->period_from = "2012";
            $eb->period_to = "2016";
            $eb->units_earned = "1500";
            $eb->year_graduated = "2016";
            $eb->scholarship = "Cebu City Scholarship";
            $eb->education_type = "graduate";
            $eb->save();
        }
    }
}