<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       User::create([
        'name' =>'chourik',
        'email' =>'foussenichourik@gmail.com',
        'password' =>bcrypt('123456789')
       ]);
    }
}
