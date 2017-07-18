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
        $user->username = "admin";
        $user->fname = 'DOH HR';
        $user->lname = 'DOH_HR';
        $user->password = Hash::make('admin');
        $user->save();
    }
}
