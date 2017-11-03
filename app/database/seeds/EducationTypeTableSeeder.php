<?php

class EducationTypeTableSeeder extends seeder{
    public function run(){
        $educationType = ['ELEMENTARY','SECONDARY','VOCATIONAL/TRADE COURSE','COLLEGE','GRADUATE STUDIES'];
        foreach(range(0,4) as $index){
            $et = new EducationType();
            $et->description = $educationType[$index];
            $et->save();
        }
    }
}