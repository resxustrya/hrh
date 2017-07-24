<?php

class NameExtensionTableSeeder extends Seeder{
    public function run(){

        $nameExtension = new NameExtension();
        $nameExtension->suffix = 'D.C.';
        $nameExtension->description = 'Doctor of Chiropractic';
        $nameExtension->save();

        $nameExtension = new NameExtension();
        $nameExtension->suffix = 'D.D';
        $nameExtension->description = 'Doctor of Divinity';
        $nameExtension->save();

        $nameExtension = new NameExtension();
        $nameExtension->suffix = 'D.D.S.';
        $nameExtension->description = 'Doctor of Dental Surgery';
        $nameExtension->save();

        $nameExtension = new NameExtension();
        $nameExtension->suffix = 'D.M.D.';
        $nameExtension->description = 'Doctor of Dental Medicine';
        $nameExtension->save();

        $nameExtension = new NameExtension();
        $nameExtension->suffix = 'D.O.';
        $nameExtension->description = 'Doctor of Osteopathy';
        $nameExtension->save();

        $nameExtension = new NameExtension();
        $nameExtension->suffix = 'D.V.M.';
        $nameExtension->description = 'Doctor of Veterinary Medicine';
        $nameExtension->save();

        $nameExtension = new NameExtension();
        $nameExtension->suffix = 'Ed.D';
        $nameExtension->description = 'Doctor of Education';
        $nameExtension->save();

        $nameExtension = new NameExtension();
        $nameExtension->suffix = 'II';
        $nameExtension->description = 'The Second';
        $nameExtension->save();

        $nameExtension = new NameExtension();
        $nameExtension->suffix = 'III';
        $nameExtension->description = 'The Third';
        $nameExtension->save();

        $nameExtension = new NameExtension();
        $nameExtension->suffix = 'IV';
        $nameExtension->description = 'The Fourth';
        $nameExtension->save();

        $nameExtension = new NameExtension();
        $nameExtension->suffix = 'Jr.';
        $nameExtension->description = 'Junior';
        $nameExtension->save();

        $nameExtension = new NameExtension();
        $nameExtension->suffix = 'LL.D';
        $nameExtension->description = 'Doctor of Laws';
        $nameExtension->save();

        $nameExtension = new NameExtension();
        $nameExtension->suffix = 'M.D.';
        $nameExtension->description = 'Doctor of Medicine';
        $nameExtension->save();

        $nameExtension = new NameExtension();
        $nameExtension->suffix = 'O.D.';
        $nameExtension->description = 'O.D.';
        $nameExtension->save();

        $nameExtension = new NameExtension();
        $nameExtension->suffix = 'Ph.D.';
        $nameExtension->description = 'Doctor of Philosophy';
        $nameExtension->save();

        $nameExtension = new NameExtension();
        $nameExtension->suffix = 'R.N.';
        $nameExtension->description = 'Registered Nurse';
        $nameExtension->save();

        $nameExtension = new NameExtension();
        $nameExtension->suffix = 'R.N.C.';
        $nameExtension->description = 'Registered Nurse Clinician';
        $nameExtension->save();

        $nameExtension = new NameExtension();
        $nameExtension->suffix = 'Sr.';
        $nameExtension->description = 'Senior';
        $nameExtension->save();
    }
}