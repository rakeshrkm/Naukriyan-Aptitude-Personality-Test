<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Hash;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user  = new User();
        $user->first_name  = 'Rakesh';
        $user->last_name  = 'Kumar';
        $user->email  = 'cbtadmin@gmail.com';
        $user->user_type  = 'admin';
        $user->password  = Hash::make('Admincbt@123#');
        $user->save();
    }
}
