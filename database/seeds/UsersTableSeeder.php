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
        $admin = new User([
            'name' => 'Admin',
            'email' => 'admin@dotspix.be',
            'password' => bcrypt('123456'),
            'role' => 'Admin'
        ]);
        $admin->save();

        $planner = new User([
            'name' => 'Planner',
            'email' => 'planner@dotspix.be',
            'password' => bcrypt('123456'),
            'role' => 'Planner'
        ]);
        $planner->save();

        $finance = new User([
            'name' => 'Finance',
            'email' => 'finance@dotspix.be',
            'password' => bcrypt('123456'),
            'role' => 'Finance'
        ]);
        $finance->save();
    }
}
