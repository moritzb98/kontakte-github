<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_user = Role::where('name', 'user')->first();
        $role_admin = Role::where('name', 'admin')->first();

        $admin = new User();
        $admin->name = 'admin';
        $admin->email = 'admin@test.de';
        $admin->password = bcrypt('password');
        $admin->save();
        $admin->roles()->attach($role_admin);

        $admin = new User();
        $admin->name = 'user';
        $admin->email = 'user@test.de';
        $admin->password = bcrypt('password');
        $admin->save();
        $admin->roles()->attach($role_user);
    }
}
