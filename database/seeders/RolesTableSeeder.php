<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;
class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::truncate();
        Role::create(['role_name'=>'admin']);
        Role::create(['role_name'=>'Chủ Nhiệm']);
        Role::create(['role_name'=>'Phó Chủ Nhiệm']);
        Role::create(['role_name'=>'Thành viên']);
    }
}
