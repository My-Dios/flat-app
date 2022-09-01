<?php

use Illuminate\Database\Seeder;
use App\User;

class UpdateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name'=>'Admin-Y',
                'email'=>'yusufwijaya3@gmail.com',
                 'is_admin'=>'1',
                'password'=> bcrypt('yusuf110692'),
             ],
             [
                'name'=>'User-Y',
                'email'=>'yusufwijaya@gmail.com',
                 'is_admin'=>NULL,
                'password'=> bcrypt('yusuf110692'),
             ],
        ];

        foreach ($user as $key => $value) {
            User::updateOrCreate($value);
        }
    }
}
