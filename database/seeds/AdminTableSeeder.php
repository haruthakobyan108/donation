<?php

use App\Admin;
use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (!Admin::count()) {
            Admin::create([
                'name'              => 'Super Admin',
                'email'             => 'admin@gmail.com',
                'password'          => bcrypt('secret'),
                'remember_token'    => md5(time()),
            ]);
        }
    }
}
