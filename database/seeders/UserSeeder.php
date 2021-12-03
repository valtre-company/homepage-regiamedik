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
        $permissionsAdmin = '{
            "platform.systems.roles":true,
            "platform.systems.users":true,
            "platform.systems.attachment":true,
            "platform.index":true}';

        $permissionsUser = '{
            "platform.systems.attachment":false,
            "platform.systems.roles":false,
            "platform.systems.users":false,
            "platform.index":true}';
        
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'email_verified_at' => Carbon::now(),
            'password' => Hash::make('InSoNSte'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'permissions' => $permissionsAdmin
        ]);
        DB::table('users')->insert([
            'name' => 'Gian Carlo',
            'email' => 'giancarlo.zapata@valtre.com',
            'email_verified_at' => Carbon::now(),
            'password' => Hash::make('CRAsHEAu'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'permissions' => $permissionsAdmin
        ]);
        DB::table('users')->insert([
            'name' => 'Operaciones',
            'email' => 'cesar.valdez@valtre.com',
            'email_verified_at' => Carbon::now(),
            'password' => Hash::make('UnkmatIo'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'permissions' => $permissionsUser
        ]);
        
        DB::table('users')->insert([
            'name' => 'Marketing',
            'email' => 'marketing@regiamedik.com',
            'email_verified_at' => Carbon::now(),
            'password' => Hash::make('SwEBRoME'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'permissions' => $permissionsUser
        ]);

        DB::table('users')->insert([
            'name' => 'Boris',
            'email' => 'boris@regiamedik.com',
            'email_verified_at' => Carbon::now(),
            'password' => Hash::make('iNELaMEL'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'permissions' => $permissionsUser
        ]);

    }
}
