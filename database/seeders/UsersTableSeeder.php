<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        
        $adminRole = Role::where('role_name','admin')->first();
        $leader = Role::where('role_name','Chủ Nhiệm')->first();
        $deputy = Role::where('role_name','Phó Chủ Nhiệm')->first();
        $member = Role::where('role_name','Thành viên')->first();

    }
}
