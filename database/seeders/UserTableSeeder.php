<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_user = Role::where('rol', 'user')->first();
        $role_admin = Role::where('rol', 'admin')->first();
        $user = new User();
        $user->username = 'Pablo';
        $user->email = 'Pablo@example.com';
        $user->password = bcrypt('secret');
        $user->rol_id = 2;
        $user->save();
        $user->roles()->attach($role_user);
        $user = new User();
        $user->username = 'Admin';
        $user->email = 'admin@example.com';
        $user->password = bcrypt('secret');
        $user->rol_id = 1;
        $user->save();
        $user->roles()->attach($role_admin);
    }
}
