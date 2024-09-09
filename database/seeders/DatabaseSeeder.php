<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $newUser = User::updateOrCreate([
            'name'      => 'Admin',
            'email'     => 'admin@gmail.com',
        ],[
            'password'  => Hash::make('+#-B[LAFwNei')
        ]);
    }
}
