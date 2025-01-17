<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Modules\Feeder\App\Models\User;
use Modules\Feeder\App\Models\Role;
use Modules\Feeder\App\Models\Permission;
use Illuminate\Support\Facades\DB;

class AuthDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        User::truncate();
        Role::truncate();
        Permission::truncate();
        DB::table('role_has_permissions')->truncate();
        DB::table('model_has_permissions')->truncate();
        DB::table('model_has_roles')->truncate();

        $this->call([
            PermissionSeeder::class,
            RoleSeeder::class,
            UserSeeder::class,
        ]);
    }
}
