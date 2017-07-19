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
        $hrhType->description = "Computer Programmer 1";
        $hrhType->save();

        $hrhType = new HrhType();
        $hrhType->description = "DDTB";
        $hrhType->save();

        $hrhType = new HrhType();
        $hrhType->description = "NDP";
        $hrhType->save();

        $hrhType = new HrhType();
        $hrhType->description = "RHMPP";
        $hrhType->save();

        $hrhType = new HrhType();
        $hrhType->description = "DDP";
        $hrhType->save();

        $hrhType = new HrhType();
        $hrhType->description = "MTDP";
        $hrhType->save();

        $hrhType = new HrhType();
        $hrhType->description = "PHA DP";
        $hrhType->save();

        $hrhType = new HrhType();
        $hrhType->description = " UHCI DP";
        $hrhType->save();

    }
}
