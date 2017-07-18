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

        $designation = new Designation();
        $designation->description = "DDTB";
        $designation->save();

        $designation = new Designation();
        $designation->description = "NDP";
        $designation->save();

        $designation = new Designation();
        $designation->description = "RHMPP";
        $designation->save();

        $designation = new Designation();
        $designation->description = "DDP";
        $designation->save();

        $designation = new Designation();
        $designation->description = "MTDP";
        $designation->save();

        $designation = new Designation();
        $designation->description = "PHA DP";
        $designation->save();

        $designation = new Designation();
        $designation->description = " UHCI DP";
        $designation->save();

    }
}
