<?php

namespace Database\Seeders\Role;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @return void
     */
    public function run()
    {
        Role::firstOrCreate([
            'name' => 'seeker',
            'guard_name' => 'web'
        ]);
        Role::firstOrCreate([
            'name' => 'poster',
            'guard_name' => 'web'
        ]);
    }
}
