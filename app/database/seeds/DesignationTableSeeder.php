<?php


class DesignationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $designation = new Designation();
        $designation->description = "Computer Programmer 1";
        $designation->save();
    }
}
