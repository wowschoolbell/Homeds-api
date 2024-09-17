<?php

namespace Database\Seeders;

use App\Models\AppPlan;
use App\Models\AppStatus;
use App\Models\User;
use App\Models\Role;
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
        // Roles Update
        foreach(Role::$hidden_roles as $value)
        {
            Role::firstOrCreate(
                ['name' => $value]
            );
        }

        // User Create
        $user = User::UpdateOrCreate([
            'name'      => 'Admin',
            'email'     => 'admin@gmail.com',
        ],[
            'username'  => 'admin',
            'password'  => Hash::make('123456')
        ]);

        // Assign role for user
        $user->syncRoles([Role::ADMIN]);

        // App Plans
        foreach(AppPlan::$appPlans as $value) {
            $appPlan = AppPlan::UpdateOrCreate([
                'name'          => $value['name']
            ],[
                'description'   => $value['description'],
                'plan_type'     => $value['plan_type']
            ]);
        }

        // App Statuses
        foreach(AppStatus::$appStatuses as $value) {
            $appStatus = AppStatus::firstOrCreate([
                'name'  => $value['name'],
                'type'  => $value['type'],
            ]);
        }
    }
}
