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
            'name' => 'admin',
            'email' => 'admin@dotspix.be',
            'password' => bcrypt('123456')
        ]);
        $admin->save();
    }
}
