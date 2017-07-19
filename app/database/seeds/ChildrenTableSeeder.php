<?php

class ChildrenTableSeeder extends seeder
{
    public function run(){
        $children = new Children();
        $children->userid = 1;
        $children->name = "Rusel T. Tayong JR";
        $children->date_of_birth = "10/10/2017";
        $children->save();

        $children = new Children();
        $children->userid = 1;
        $children->name = "Rusel T. Tayong III";
        $children->date_of_birth = "11/11/2017";
        $children->save();
    }
}

