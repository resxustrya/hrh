<?php


class HrhTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $hrhType = new HrhType();
        $hrhType->suffix = "DTTB";
        $hrhType->description = "Doctors to the Barrios Program";
        $hrhType->save();

        $hrhType = new HrhType();
        $hrhType->suffix = "NDP";
        $hrhType->description = "Nurse Deployment Project";
        $hrhType->save();

        $hrhType = new HrhType();
        $hrhType->suffix = "RHMPP";
        $hrhType->description = "Rural Health Midwives Placement Program";
        $hrhType->save();

        $hrhType = new HrhType();
        $hrhType->suffix = "DDP";
        $hrhType->description = "Dentist Deployment Project";
        $hrhType->save();

        $hrhType = new HrhType();
        $hrhType->suffix = "MT DP";
        $hrhType->description = "Medical Technologist Deployment Project ";
        $hrhType->save();

        $hrhType = new HrhType();
        $hrhType->suffix = "PHA DP";
        $hrhType->description = "Public Health Associates Deployment Project";
        $hrhType->save();

        $hrhType = new HrhType();
        $hrhType->suffix = "UHCI DP";
        $hrhType->description = "Universal Health Care Implementers Deployment Project";
        $hrhType->save();

    }
}
