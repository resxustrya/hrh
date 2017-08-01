<?php

class ChildrenTableSeeder extends seeder
{
    public function run(){
        $faker = Faker\Factory::create();

        foreach(range(1,50) as $index) {
            $children = new Children();
            $children->userid = $index;
            $children->name = $faker->name;
            $children->date_of_birth = "10/10/2017";
            $children->save();

            $children = new Children();
            $children->userid = $index;
            $children->name = $faker->name;
            $children->date_of_birth = "11/11/2017";
            $children->save();
        }

    }
}

