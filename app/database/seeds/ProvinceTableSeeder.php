<?php


class ProvinceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $province = new Province();
        $province->description = "CEBU PROVINCE";
        $province->save();

        $province = new Province();
        $province->description = "BOHOL PROVINCE";
        $province->save();

        $province = new Province();
        $province->description = "NEGROS ORIENTAL PROVINCE";
        $province->save();
    }
}
