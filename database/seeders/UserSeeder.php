<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $permissions = '{"platform.systems.roles":true,"platform.systems.users":true,"platform.systems.attachment":true,"platform.index":true}';

        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'email_verified_at' => Carbon::now(),
            'password' => Hash::make('root'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'permissions' => $permissions
        ]);
    }
}
