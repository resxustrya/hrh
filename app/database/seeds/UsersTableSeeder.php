<?php


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        foreach(range(1,50) as $index){
            // PERSONAL INFORMATION
            $user = new Users();
            $user->photo = $faker->imageUrl($width = 640, $height = 480);
            $user->hrh_type = 1;
            $user->lname = $faker->lastName;
            $user->fname = $faker->firstName;
            $user->mname = $faker->lastname;

            $user->date_of_birth = '10/10/1994';
            $user->place_of_birth = $faker->address;
            $user->sex = 'Male';
            $user->civil_status = 'Single';
            $user->philhealth_no = 'PHIL-121-2017';
            $user->tin_no = 'TIN-121-2017';
            $user->gsis_beneficiaries1 = 'JOHN DOE';
            $user->gsis_beneficiaries2 = 'JANE DOE';
            $user->prc_license = 'PRC-121-2017';
            $user->citizenship = "Filipino";
            $user->residential_address = $faker->address;
            $user->permanent_address = 'Cebu City';
            $user->zip_code = '6000';
            $user->telephone_no = '264-3106';
            $user->mobile_no = '09438285527';
            $user->email_address = $faker->email;
            $user->province = 1;
            $user->municipality = 1;
            $user->date_of_entrance_to_duty = '10/20/2017';
            $user->status_of_employment = 1;
            if($index >= 2){
                $user->username = $faker->userName;
                $user->password = Hash::make($faker->password);
            } else {
                $user->username = 'admin';
                $user->password = Hash::make('admin');
            }

            // FAMILY BACKGROUND
            $user->spouse_lname = "N/A";
            $user->spouse_fname = "N/A";
            $user->spouse_mname = "N/A";
            $user->father_lname = "Tayong";
            $user->father_fname = "Rodrigo";
            $user->father_mname = "Verallo";
            $user->mother_lname = "Tayong";
            $user->mother_fname = "Tessie";
            $user->mother_mname = "Tamayo";

            $user->usertype = 1;
            $user->save();
        }
    }
}
