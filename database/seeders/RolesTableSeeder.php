<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // DB::table('users')->insert([
        //     'name' => Str::random(10),
        //     'email' => Str::random(10).'@gmail.com',
        //     'password' => Hash::make('password'),
        // ]);
 
        //  1 = users / @s 
        //  2 = promoters to post ads
        //  3 = Admin 
        //  4 = SADMIN 

        DB::table('roles')->insert([
            'roleId' => '1',
            'roleTitle' => 'clients',
        ]);
    
        DB::table('roles')->insert([
            'roleId' => '3',
            'roleTitle' => 'admin',
        ]);

        DB::table('roles')->insert([
            'roleId' => '2',
            'roleTitle' => 'promoter',
        ]);

        DB::table('roles')->insert([
            'roleId' => '4',
            'roleTitle' => 'superAdmin',
        ]);
    }
}
