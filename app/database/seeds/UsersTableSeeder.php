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
        $user = new Users();
        $user->hrh_type = 1;
        $user->lname = 'Tayong';
        $user->fname = 'Rusel';
        $user->mname = 'Tamayo';
        $user->province = 1;
        $user->municipality = 1;
        $user->date_of_birth = '10/10/1994';
        $user->place_of_birth = 'Cebu City';
        $user->gender = 'Male';
        $user->civil_status = 'Single';
        $user->residential_address = '75-D Jakosalem Street Cebu City';
        $user->permanent_address = 'Cebu City';
        $user->cellphone = '09438285527';
        $user->email = 'ruseltayong@gmail.com';
        $user->citizenship = "Filipino";
        $user->philhealth = 'PHIL-121-2017';
        $user->tin = 'TIN-121-2017';
        $user->gsis = 'GSIS-121-2017';
        $user->prc_license = 'PRC-121-2017';
        $user->date_of_entrance_to_duty = '10/20/2017';
        $user->status_of_employment = 1;
        $user->username = 'admin';
        $user->password = Hash::make('admin');
        $user->usertype = 1;
        $user->save();
    }
}
