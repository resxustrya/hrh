<?php

class StatusSeeder extends Seeder
{
    public function run(){
        $status = new Status();
        $status->description = "HIRED";
        $status->save();

        $status = new Status();
        $status->description = "REHIRED";
        $status->save();

        $status = new Status();
        $status->description = "NEW";
        $status->save();
    }
}
