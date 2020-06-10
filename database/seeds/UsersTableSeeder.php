<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'id' => 1,
            'first_name' => 'Admin',
            'last_name' => 'Istrator',
            'email' => 'admin@mail.com',
            'password' => bcrypt('secret'),
            'email_verified_at' => date('Y-m-d H:i:s'),
            'gender' => '1',
            'country_id' => '102',
            'date_of_birth' => '1990-01-01',
            'phone' => '',
            'address' => ''
        ]);
        $user->assignRole('Administrator');
    }
}
