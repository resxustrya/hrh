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
        $suffix = ["","(DTTB)","(NDP)","(RHMPP)","(DDP)","(MT DP)","(PHA DP)","(UHCI DP)"];
        foreach(range(1,7) as $index){
            $province = new Province();
            $province->description = "CEBU PROVINCE".$suffix[$index];
            $province->hrh_type = $index;
            $province->allocation = 10;
            $province->save();

            $province = new Province();
            $province->description = "BOHOL PROVINCE".$suffix[$index];
            $province->hrh_type = $index;
            $province->allocation = 20;
            $province->save();

            $province = new Province();
            $province->description = "SIQUIJOR PROVINCE".$suffix[$index];
            $province->hrh_type = $index;
            $province->allocation = 30;
            $province->save();
        }

    }
}
